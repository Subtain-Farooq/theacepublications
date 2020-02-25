<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $countries = Country::all();
        return view('frontend.auth.register')->with('countries', $countries);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'country' => ['required', 'integer'],
            'title' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_number' => ['numeric', 'nullable', 'unique:users'],
            'fax_number' => ['nullable', 'numeric', 'unique:users'],
            'live_dna' => ['max:100', 'string', 'nullable', 'unique:users'],
            'scopus' => ['max:100', 'string', 'nullable', 'unique:users'],
            'address' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:60'],

            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       /* $request = request();
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {

            $path = 'avatars';
            $size = $request->file('avatar')->getSize();
            $file_data = $request->file('avatar')->store($path);
            $title = substr($file_data, 8);

            return dd(substr($file_data,8));
        }*/

        return User::create([
            'country_id' => $data['country'],
            'title' => $data['title'],
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'fax_number' => $data['fax_number'],
            'live_dna' => $data['live_dna'],
            'scopus' => $data['scopus'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if (Auth::check()) {
            $user = User::find(Auth::id());
            $user->timestamps = false;
            $user->last_login_at = now();
            $user->save();
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
