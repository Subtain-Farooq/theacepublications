<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Journal;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'status'
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
        'status' => 'boolean'
    ];

    protected $dates = [
        'deleted_at'
    ];
    public function journals(){
        return $this->belongsToMany(Journal::class);
    }
}
