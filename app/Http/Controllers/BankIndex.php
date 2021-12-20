<?php

namespace App\Http\Controllers;

use App\Models\creditcard;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BankIndex extends Controller
{
    public function bank($id2)
    {
        //id2 por que id es una variable reservada de livewire  
        return view('bank.inicio',compact('id2'));
    }
    public function transaccion($id)
    {
        return view('bank.transaccion',compact('id'));
    }
    
}
