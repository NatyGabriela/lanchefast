<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
            
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|max:80',
        'endereco'=> 'required|min:20',
        'telefone'=>'required|min:11',
        'cpf'=>'required|max:11',
        'email'=>'required',
        'senha' => 'required|min:6',
    ];

     public $message =[
          'nome.required'=> 'nome é obrigatório',
          'nome.max'=> 'nome deve conter no maximo 80 caracteres',
          'endereco.required'=> 'endereco é obrigatório',
          'endereco.min'=> 'endereco deve conter no minimo 20 caracteres',
          'telefone.required'=> 'telefone é obrigatório',
          'telefone.min'=> 'telefone deve conter no minimo 11 caracteres',
          'cpf.required'=> 'cpf é obrigatório',
          'cpf.max'=> 'cpf deve conter no maximo 11 caracteres',
          'email.required'=> 'email é obrigatório',
          'senha.required'=> 'senha é obrigatório',
          'senha.min'=> 'senha deve conter no minimo 6 caracteres'
     ];

    public function store()
    {
        $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco'=>$this->endereco,
            'telefone'=>$this->telefone,
            'cpf'=>$this->cpf,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);

        session()->flash('message', 'Cliente criado com sucesso!');

       
    }




    public function render()
    {
        return view('livewire.clientes.create');
    }
}
