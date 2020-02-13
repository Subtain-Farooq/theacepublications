<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Journal;
use App\Models\Article;

class Issue extends Model
{
    protected $fillable = [
        'journal_id', 'issue_number', 'issue_status', 'year', 'volume'
    ];

    public function journal(){
        return $this->belongsTo(Journal::class);//current issue belongs to one jornal
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }


}
