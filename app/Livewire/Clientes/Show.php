<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
{
    public $clienteld;

    public function mount($clienteId)
    {
        $this->clienteld = $clienteId;
    }

    public function render()
    {
        $cliente = Cliente::find($this->clienteld);
        return view('livewire.clientes.show', compact('cliente'));
    }





    
}
