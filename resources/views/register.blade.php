<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Ativos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="assets-body">

    <main class="page-wrapper">
        <div class="card-register">
            
            <header class="card-header">
                <div class="header-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <div class="header-text">
                    <h1>Novo Ativo</h1>
                    <p>Cadastre e aloque equipamentos nos setores da unidade</p>
                </div>
            </header>

            <form id="assetForm" class="register-form" action="{{ route('registrations') }}" method="POST">
                @csrf

                <!-- Campo Tipo de Ativo -->
                <div class="form-group">
                    <label class="form-label">Tipo de Ativo</label>
                    <input type="hidden" name="name" id="selectedActive" value="">
                    
                    <div class="custom-dropdown" data-target="selectedActive">
                        <div class="dropdown-trigger">
                            <span class="placeholder">Selecione o ativo...</span>
                            <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <ul class="dropdown-menu">
                            <li data-value="impressora">Impressora Térmica</li>
                            <li data-value="monitor">Monitor KDS</li>
                            <li data-value="tablet">Tablet de Pedidos</li>
                            <li data-value="computador">Computador PDV</li>
                            <li data-value="leitor">Leitor de Código de Barras</li>
                        </ul>
                    </div>
                </div>

                <!-- Campo Setor -->
                <div class="form-group">
                    <label class="form-label">Setor Destino</label>
                    <input type="hidden" name="sector" id="selectedSector" value="">
                    
                    <div class="custom-dropdown" data-target="selectedSector">
                        <div class="dropdown-trigger">
                            <span class="placeholder">Selecione o setor...</span>
                            <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <ul class="dropdown-menu">
                            <li data-value="cozinha">Cozinha</li>
                            <li data-value="bar">Bar</li>
                            <li data-value="salao">Salão</li>
                            <li data-value="caixa">Caixa / Recepção</li>
                            <li data-value="estoque">Estoque</li>
                        </ul>
                    </div>
                </div>

                <!-- Campo Descrição -->
                <div class="form-group">
                    <div class="label-wrapper">
                        <label for="description" class="form-label">Descrição / Observações</label>
                        <span class="char-counter" id="charCounter">0 / 250</span>
                    </div>
                    <textarea 
                        class="form-control" 
                        name="description" 
                        id="description" 
                        maxlength="250" 
                        rows="4" 
                        placeholder="Ex: Terminal instalado ao lado da chapa, conectado à tomada 220V."></textarea>
                </div>

                <!-- Ações -->
                <button type="submit" id="btnSubmit" class="btn-primary">
                    <span class="btn-text">Cadastrar Ativo</span>
                    <span class="btn-loader" style="display: none;">
                        <svg class="spinner" width="20" height="20" viewBox="0 0 24 24">
                            <circle class="path" cx="12" cy="12" r="10" fill="none" stroke-width="3"></circle>
                        </svg>
                        Processando...
                    </span>
                </button>
            </form>

        </div>
    </main>

</body>
</html>