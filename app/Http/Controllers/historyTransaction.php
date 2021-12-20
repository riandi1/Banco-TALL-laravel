<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyTransaction extends Controller
{
    public function index($id2)
    {
        return view('bank.history',compact('id2'));
    }
}
