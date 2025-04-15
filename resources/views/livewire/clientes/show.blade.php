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
        <h5 class="card-header text-center" style="color: white;">Detalhes do Cliente</h5>
        <div class="card-body">
            <!-- Exibição dos dados do cliente -->
            
            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <!-- Adicionando um campo de texto, mas não editável -->
                <input type="text" class="form-control" id="nome" value="{{ $nome }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label" for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" value="{{ $endereco }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label" for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" value="{{ $telefone }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" value="{{ $cpf }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">E-mail</label>
                <input type="email" class="form-control" id="email" value="{{ $email }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" value="{{ $senha }}" disabled>
            </div>

            <!-- Botão para voltar ou editar -->
            <div class="mb-3 text-center">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
