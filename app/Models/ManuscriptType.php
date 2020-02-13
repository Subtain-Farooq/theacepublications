<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Manuscript;

class ManuscriptType extends Model
{
    public function manuscripts(){
        return $this->hasMany(Manuscript::class);
    }
}
