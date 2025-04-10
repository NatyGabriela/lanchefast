@extends('layouts.app')

@section('content')
<div class="mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <h5 class="card-header">Editar Cliente</h5>

        <div class="card-body">
            <form wire:submit.prevent="update">
                @csrf
                @method('PUT')

                <div class="mb-3">
                   <label for="nome" class="form-label">Nome</label> 
                   <input type="text" class="form-control" 
                   id="nome" name="nome" value="{{ old('nome', $cliente->nome) }}" 
                   wire:model.defer="nome">
                </div>

                <div class="mb-3">
                   <label for="endereco" class="form-label">Endereço</label> 
                   <input type="text" class="form-control" 
                   id="endereco" name="endereco" value="{{ old('endereco', $cliente->endereco) }}" 
                   wire:model.defer="endereco">
                </div>

                <div class="mb-3">
                   <label for="telefone" class="form-label">Telefone</label> 
                   <input type="text" class="form-control" 
                   id="telefone" name="telefone" value="{{ old('telefone', $cliente->telefone) }}" 
                   wire:model.defer="telefone">
                </div>

                <div class="mb-3">
                   <label for="cpf" class="form-label">CPF</label> 
                   <input type="text" class="form-control" 
                   id="cpf" name="cpf" value="{{ old('cpf', $cliente->cpf) }}" 
                   wire:model.defer="cpf">
                </div>

                <div class="mb-3">
                   <label for="email" class="form-label">E-mail</label> 
                   <input type="email" class="form-control" 
                   id="email" name="email" value="{{ old('email', $cliente->email) }}" 
                   wire:model.defer="email">
                </div>

                <div class="mb-3">
                   <label for="senha" class="form-label">Senha</label> 
                   <input type="password" class="form-control" 
                   id="senha" name="senha" placeholder="Digite sua nova senha" 
                   wire:model.defer="senha">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
