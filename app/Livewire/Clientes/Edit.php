<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    // Regras de validação
    protected $rules = [
        'nome' => 'required|max:80',
        'endereco' => 'required|min:15',
        'telefone' => 'required|min:11',
        'cpf' => 'required|max:11',
        'email' => 'required|email',
        'senha' => 'required|min:6',
    ];

    // Mensagens de erro personalizadas
    public $message = [
        'nome.required' => 'Nome é obrigatório.',
        'nome.max' => 'Nome deve ter no máximo 80 caracteres.',
        'endereco.required' => 'Endereço é obrigatório.',
        'endereco.min' => 'Endereço deve ter no mínimo 15 caracteres.',
        'telefone.required' => 'Telefone é obrigatório.',
        'telefone.min' => 'Telefone deve ter no mínimo 11 caracteres.',
        'cpf.required' => 'CPF é obrigatório.',
        'cpf.max' => 'CPF deve ter no máximo 11 caracteres.',
        'email.required' => 'Email é obrigatório.',
        'email.email' => 'Email inválido.',
        'senha.required' => 'Senha é obrigatória.',
        'senha.min' => 'Senha deve ter no mínimo 6 caracteres.',
    ];

    // Método mount para inicializar os dados
    public function mount($id)
    {
       
        
        // Carrega o cliente do banco de dados
        $cliente = Cliente::find($id);

        // Se o cliente for encontrado, preenche os dados
        if ($cliente) {
            $this->clienteId = $cliente->id;
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->cpf = $cliente->cpf;
            $this->email = $cliente->email;
            $this->senha = $cliente->senha; // Pode ser necessário criptografar a senha ao salvar.
        }
     
    }

    // Método para atualizar os dados do cliente
    public function update()
    {
        $this->validate(); // Valida os dados com base nas regras definidas

        // Busca o cliente pelo ID
        $cliente = Cliente::find($this->clienteId);

        // Se o cliente existir, faz a atualização
        if ($cliente) {
            $cliente->update([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'senha' => bcrypt($this->senha), // Criptografando a senha
            ]);

            session()->flash('message', 'Cliente atualizado com sucesso!');
        } else {
            session()->flash('error', 'Cliente não encontrado!');
        }
    }

    // Método para renderizar a view
    public function render()
    {
        return view('livewire.clientes.edit');
    }
}