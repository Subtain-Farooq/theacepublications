<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Issue;
use App\Models\File;

class Article extends Model
{
    protected $fillable = [
        'issue_id', 'status', 'title', 'slug', 'code', 'doi', 'doi_link', 'pages', 'authors', 'abstract', 'cite', 'url'
    ];

    public function currentIssue(){
        return $this->belongsTo(Issue::class, 'issue_id')->where('issue_status', 1);
    }

    public function archive(){
        return $this->belongsTo(Issue::class, 'issue_id')->where('issue_status', 0);
    }

    public function document(){
        return $this->hasOne(File::class, 'article_id')->where(['journal_id' => null, 'manuscript_id' => null]);;
    }
}
