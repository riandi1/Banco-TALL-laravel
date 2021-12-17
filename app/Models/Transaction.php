<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function creditsent()
    {
        return $this->belongsTo(creditcard::class,'card_sent');
    }
    public function creditrecive()
    {
        return $this->belongsTo(creditcard::class,'card_recive');
    }
}
