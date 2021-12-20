<?php

namespace App\Http\Livewire;

use App\Models\creditcard;
use App\Models\Transaction;
use Livewire\Component;

class IndexBank extends Component
{
    public $id2,$sald,$transf,$factura;
    public function render()
    {
        $userlog = creditcard::where('user_id',auth()->user()->id)->get();
        foreach ($userlog as $key => $value) {
            if ($value->id != $this->id2) {
                abort(403);
            }
        }
        $this->sald = creditcard::where('id', $this->id2)->get();
        $this->transf = Transaction::select('creditcards.number','transactions.*')
        ->where('card_sent',$this->id2)
        ->orWhere('card_recive',$this->id2)
        ->join('creditcards','card_recive','creditcards.id')
        ->orderBy('created_at','DESC')
        ->get();
        return view('livewire.index-bank');
    }
    public function sald()
    {
        session()->flash('message', 'Parece que la tarjeta que ingresas no es valida');
    }
}
