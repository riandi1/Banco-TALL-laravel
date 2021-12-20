<?php

namespace App\Http\Livewire;

use App\Models\creditcard;
use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class HistoryTra extends Component
{
    use WithPagination;
    public $id2,$enviado =0;

    public function render()
    {
        $userlog = creditcard::where('user_id', auth()->user()->id)->get();
        foreach ($userlog as $key => $value) {
            if ($value->id != $this->id2) {
                abort(403);
            }
        }
        if ($this->enviado == 1) {
            $transf = Transaction::select('creditcards.number', 'transactions.*')
                ->where('card_sent', $this->id2);
        } elseif ($this->enviado == 2) {
            $transf = Transaction::select('creditcards.number', 'transactions.*')
                ->where('card_recive', $this->id2);
        } else {
            $transf = Transaction::select('creditcards.number', 'transactions.*')
                ->where('card_sent', $this->id2)
                ->orWhere('card_recive', $this->id2);
        }
        $transf = $transf->join('creditcards', 'card_recive', 'creditcards.id')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
        return view('livewire.history-tra', compact('transf'));
    }

    public function enviados()
    {
        $this->enviado = 1;
    }
    public function recibidos()
    {
        $this->enviado = 2;
    }
}
