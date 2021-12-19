<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankIndex extends Controller
{
    public function bank($id)
    {
        return view('bank.inicio',compact('id'));
    }
    public function transaccion()
    {
        return view('bank.transaccion');
    }
    
}
