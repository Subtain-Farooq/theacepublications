<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\User;
use App\Models\Journal;
use App\Models\File;
use App\Models\Invoice;
use Illuminate\Notifications\Notifiable;

class Manuscript extends Model
{
    use Notifiable;
    protected $fillable = [
        'title', 'code', 'authors', 'abstract', 'status', 'reason', 'user_id', 'journal_id', 'type_id'
    ];
    public function Type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function journal(){
        return $this->belongsTo(Journal::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }

    public function invoice(){
        return $this->hasOne(Invoice::class);
    }

}
