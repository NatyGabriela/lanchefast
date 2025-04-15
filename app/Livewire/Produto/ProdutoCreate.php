<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdutoCreate extends Component
{
    use WithFileUploads;

    public $nome;
    public $descricao;
    public $preco;
    public $imagem;

    protected $rules = [
        'nome' => 'required|min:3',
        'descricao' => 'required|min:10',
        'preco' => 'required|numeric',
        'imagem' => 'nullable|image|max:1024',
    ];

    protected $messages = [
        'nome.required' => 'O nome do produto é obrigatório.',
        'nome.min' => 'O nome do produto deve ter pelo menos 3 caracteres.',
        
        'descricao.required' => 'A descrição do produto é obrigatória.',
        'descricao.min' => 'A descrição deve ter pelo menos 10 caracteres.',
        
        'preco.required' => 'O preço do produto é obrigatório.',
        'preco.numeric' => 'O preço deve ser um valor numérico.',
        
        'imagem.image' => 'A imagem deve ser um arquivo de imagem.',
        'imagem.max' => 'A imagem não pode ultrapassar 1MB.',
    ];

    public function store()
    {
        $this->validate();

        $imagemPath = null;
        if ($this->imagem) {
            $imagemPath = $this->imagem->store('produtos', 'public');
        }

        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'imagem' => $imagemPath,
        ]);

        session()->flash('message', 'Produto cadastrado com sucesso!');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produtos.create');
    }
}
