<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country' => ['required', 'integer'],
            'title' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['numeric','nullable', Rule::unique('users')->ignore(Auth::id())],
            'fax_number' => ['sometimes', 'numeric', 'nullable', Rule::unique('users')->ignore(Auth::id())],
            'live_dna' => ['sometimes', 'max:100', 'string', 'nullable', Rule::unique('users')->ignore(Auth::id())],
            'scopus' => ['sometimes', 'max:100', 'string', 'nullable', Rule::unique('users')->ignore(Auth::id())],
            'avatar' => ['image', 'mimes:jpeg,bmp,png,jpg,webp', 'file', 'max:200', 'dimensions:max_width=200,max_height=200']
        ];
    }
}
