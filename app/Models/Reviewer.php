<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\File;
use App\Models\Country;

class Reviewer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'country_id', 'name', 'email', 'status', 'contact_number', 'job_type', 'degree', 'keywords', 'identifier', 'address'
    ];

    public function cv(){
        return $this->hasOne(File::class, 'reviewer_id');
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

}
