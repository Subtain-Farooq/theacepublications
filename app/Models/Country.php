<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Editor;
use App\Models\Reviewer;

class Country extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }

    public function editors(){
        return $this->hasMany(Editor::class);
    }

    public function reviewers(){
        return $this->hasMany(Reviewer::class);
    }


}
