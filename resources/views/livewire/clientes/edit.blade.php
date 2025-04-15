<div class="container-fluid" style="background-color: #e0b3e6; min-height: 100vh; padding: 20px;">
    <!-- Exibe mensagens de sucesso ou erro -->
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card com o fundo roxo claro -->
    <div class="card mx-auto" style="background-color: #b39ddb; max-width: 600px;">
        <h5 class="card-header text-center" style="color: white;">Editar Cliente</h5>
        <div class="card-body">
            <form wire:submit.prevent="update">
                
                <!-- Nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" wire:model="nome" placeholder="Ex: João Silva">
                    @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Endereço -->
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" wire:model="endereco" placeholder="Ex: Rua das Flores, 123">
                    @error('endereco') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Telefone -->
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" wire:model="telefone" placeholder="Ex: (11) 99999-9999">
                    @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- CPF -->
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" wire:model="cpf" placeholder="Ex: 123.456.789-00">
                    @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- E-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" wire:model="email" placeholder="Ex: exemplo@email.com">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Senha -->
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" wire:model="senha" placeholder="Digite sua senha">
                    @error('senha') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Botão para salvar -->
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
