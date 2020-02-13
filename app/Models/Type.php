<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Manuscript;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'status',
    ];

    protected $dates = [
        'deleted_at'
    ];
    public function manuscripts(){
        return $this->hasMany(Manuscript::class);
    }
}
