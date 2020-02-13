<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Manuscript;
use App\Models\File;
use App\Models\Editor;
use App\Models\Backend\Issue;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journal extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'issn', 'frequency', 'language', 'description', 'status'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function Categories(){
        return $this->belongsToMany(Category::class);
    }

    public function manuscripts(){
        return $this->hasMany(Manuscript::class);
    }

    public function image(){
        return $this->hasOne(File::class)->where(['user_id' => null, 'manuscript_id' => null]);
    }

    public function editors(){
        return $this->belongsToMany(Editor::class, 'editor_journal');
    }

    public function currentIssue(){
        return $this->hasOne(Issue::class)->where('issue_status', 1); //Journal has one current issue
    }

    public function archives(){
        return $this->hasMany(Issue::class)->where('issue_status', 0); //journal has many archives (past issues)
    }

}
