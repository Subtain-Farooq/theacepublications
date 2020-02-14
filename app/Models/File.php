<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Journal;
use App\Models\Manuscript;
use App\Models\Article;
use App\Models\Reviewer;
use App\Models\Editor;

class File extends Model
{
    protected $fillable = [
        'user_id', 'journal_id', 'manuscript_id', 'editor_id', 'title', 'name', 'path', 'alt', 'size'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function journal(){
        return $this->belongsTo(Journal::class);
    }

    public function manuscript(){
        return $this->belongsTo(Manuscript::class);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function reviewer(){
        return $this->belongsTo(Reviewer::class);
    }

    public function editor(){
        return $this->belongsTo(Editor::class);
    }
}
