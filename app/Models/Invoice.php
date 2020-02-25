<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Manuscript;

class Invoice extends Model
{
    protected $fillable = [
        'manuscript_id', 'invoice_number', 'status', 'generated_at', 'cleared_at'
    ];

    protected $dates = [
        'generated_at',
        'cleared_at'
    ];

    public function manuscript(){
        return $this->belongsTo(Manuscript::class);
    }
}
