<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Journal;
use App\Models\Country;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\File;

class Editor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'country_id', 'name', 'email', 'contact_number', 'departmental_address', 'status'
    ];
    protected $dates = [
        'deleted_at'
    ];

    public function journals(){
        return $this->belongsToMany(Journal::class, 'editor_journal');
    }

    public function Ejournals(){
        return $this->hasMany(Journal::class, 'editor_id');
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function image(){
        return $this->hasOne(File::class, 'editor_id');
    }
}
