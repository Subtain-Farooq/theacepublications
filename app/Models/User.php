<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Country;
use App\Models\File;
use App\Models\Manuscript;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'status',
        'title',
        'name',
        'email',
        'mobile_number',
        'fax_number',
        'live_dna',
        'scopus',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function image(){
        return $this->hasOne(File::class)->where(['journal_id' => null, 'manuscript_id' => null]);
    }

    public function manuscripts(){
        return $this->hasMany(Manuscript::class)->orderByDesc('created_at');
    }

}
