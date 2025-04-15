<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Cadastrar Produto</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('produtos.index') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left-circle"></i> Voltar para a lista
            </a>
        </div>
    </div>

    <!-- Exibe mensagens de sucesso -->
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card" style="background-color: #b39ddb;">
        <h5 class="card-header">Cadastrar Produto</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" wire:model="nome" placeholder="Nome do produto">
                    @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" wire:model="descricao" placeholder="Descrição do produto">
                    @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" wire:model="preco" placeholder="Preço do produto">
                    @error('preco') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="imagem" wire:model="imagem">
                    @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar Produto</button>
                </div>
            </form>
        </div>
    </div>
</div>
