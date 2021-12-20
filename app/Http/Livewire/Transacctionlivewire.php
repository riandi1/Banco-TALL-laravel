<?php

namespace App\Http\Livewire;

use App\Models\creditcard;
use App\Models\Transaction;
use Livewire\Component;

class Transacctionlivewire extends Component
{
    public $user, $price, $sald, $card, $card_confirmation, $usersent;
    public $steps = 1;
    // message validation
    protected $messages = [
        'sald.required' => 'El Valor de la Transaccion es requerida :).',
        'sald.max' => 'No tenes Dinero Suficiente :(.',
        'sald.min' => 'El dinero minimo es de 1000 ;)',
        'card_confirmation.same' => 'No coinciden las tarjetas :c'
    ];

    protected $listeners = ['render','transfer','redi'];
    // mount
    public function mount()
    {
        $this->usersent = creditcard::where('id', $this->user)->get();
        $this->price = $this->usersent->toArray();
    }
    // reglas
    protected function rules()
    {
        return [
            'sald' => 'required|numeric|min:1000|max:' . $this->price[0]['sald'],
            'card' => 'required',
            'card_confirmation' => 'required|same:card'
        ];
    }
    // valida en tiempo real
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // guardar
    public function transfer()
    {
        $idReceive = creditcard::where('number', $this->card)->where('user_id', '!=', auth()->user()->id)->get();
        $idrc = $idReceive->toArray();
        Transaction::create([
            'card_sent' => $this->user,
            'card_recive' => $idrc[0]['id'],
            'mont' => $this->sald
        ]);
        foreach ($this->usersent as $value) {
            $value->sald = $value->sald - $this->sald;
            $value->save();
        }
        foreach ($idReceive as $value) {
            $value->sald += $this->sald;
            $value->save();
        }
    }

    // vista
    public function render()
    {
        return view('livewire.transacctionlivewire');
    }

    // aumentar
    public function crement()
    {
        $this->validate();
        $idReceive = creditcard::where('number', $this->card)->where('user_id', '!=', auth()->user()->id)->get();
        $idrc = $idReceive->toArray();
        if (empty($idrc)) {
            session()->flash('message', 'Parece que la tarjeta que ingresas no es valida');
        } else {
            $this->steps = 2;
        }
    }
    public function decrement()
    {
        $this->steps = 1;
    }

    public function redi()
    {
        redirect()->route('dashboard');
    }
}
