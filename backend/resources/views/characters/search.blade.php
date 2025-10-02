<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Personagens Marvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        body {
            background-image: url("{{ asset('assets/marvelfundo (1).jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Ajuste: 0.3 a 0.8 */
            z-index: -1;
        }

        .card-marvel {
            width: 90vw;             /* ocupa 90% da largura da tela */
            max-width: 1039px;       /* limite de largura */
            height: auto;
            min-height: 500px;       /* altura mínima */
            max-height: 90vh;        /* não passa da altura da tela */
            overflow-y: auto;        /* cria scroll se o texto passar */
            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            
            background-color: #6C0505;
            border-radius: 20px;
            padding: 30px;
            box-sizing: border-box;
            color: #FFF;
            text-align: center;
        }
        .icon-marvel {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
       .search-container {
        position: relative;
        width: 100%;
        border: none;
    }

    .marvel_search {
        padding-left: 45px;
        background-image: url(http://127.0.0.1:8000/assets/lupa.svg);
        background-repeat: no-repeat;
        background-position: 15px center;
        background-size: 21px;
        border: none;
        border-radius: 20px;
        margin-top: 2rem;
    }

    .character-card {
        display: flex;
        flex-direction: column;
        margin-top: 20px;

        align-items: center;
        text-align: center;
    }

    .character-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin: 20px 0;
    }

    .character-title {
        font-size: 2rem;
        font-weight: bold;
        color: #FFF;
    }

    .character-card p {
        color: #FFF;
        font-size: 1rem;
        margin: 5px 0;
        word-wrap: break-word;
        white-space: normal;
        line-height: 1.5;
    }

    .character-description h5 {
        color: #FFF;
        font-size: 1.2rem;
    }

    /* Infos básicas */
.character-info {
    max-width: 700px;      /* limite de largura */
    margin: 0 auto;
    text-align: center;
}

.character-info p {
    margin: 6px 0;
    font-size: 1rem;
    line-height: 1.4;
}

/* labels em destaque */
.info-label {
    font-weight: bold;
}

/* Descrição */
.character-description {
    max-width: 800px;      /* largura máxima para o texto */
    margin: 20px auto 0;
    text-align: justify;   /* alinhado */
    line-height: 1.6;
}

.character-description h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    text-align: center;
}

.character-description p {
    font-size: 1rem;
    color: #FFF;
    margin-bottom: 0;
    word-wrap: break-word;
}

.alert {
    margin-top: 27px;
}

    
    </style>

</head>
<body>

<div class="card-marvel">
    <img src="{{ asset('assets/Marvel_Logo.svg') }}" class="icon-marvel" alt="Ícone Marvel">
    
    <div class="search-container">
        <form action="{{ url('/character/search') }}" method="GET" id="searchForm">
            <input 
                type="text" 
                class="form-control marvel_search" 
                name="q" 
                placeholder="Pesquise um personagem"
                value="{{ request('q') }}"
                id="characterSearch">
        </form>
    </div>

    <!-- Card do Personagem (APENAS quando encontrado) -->
    @if(isset($character) && $character)
    <div class="character-card">
        <!-- 1. NOME DO PERSONAGEM -->
        <h1 class="character-title">{{ $character->name }}</h1>
        
        <!-- 2. IMAGEM DO PERSONAGEM -->
        @if($character->image_url)
             <img src="{{ asset('storage/characters/' . $character->image_url) }}" class="character-image" alt="{{ $character->name }}">
        @else
        <div class="character-image bg-secondary d-flex align-items-center justify-content-center">
            <span>Imagem não disponível</span>
        </div>
        @endif
        
        <!-- 3. INFORMAÇÕES BÁSICAS -->
        <div class="character-info">
            <p>
                <span class="info-label">Primeira Aparição:</span> 
                {{ $character->first_appearance }}
            </p>
            
            <p>
                <span class="info-label">Nome Verdadeiro:</span> 
                {{ $character->real_name }}
            </p>
            
            @if($character->occupation)
            <p>
                <span class="info-label">Ocupação:</span> 
                {{ $character->occupation }}
            </p>
            @endif
        </div>
        
        <!-- 4. DESCRIÇÃO DO PERSONAGEM -->
        <div class="character-description">
            <h5 class="info-label mb-3">Sobre o Personagem:</h5>
            <p class="mb-0">{{ $character->description }}</p>
        </div>
    </div>

    @elseif(request('q'))
    <!-- Mensagem de personagem não encontrado -->
    <div class="alert alert-warning text-center">
        <h4>Personagem não encontrado!</h4>
        <p>Não encontramos nenhum personagem com o nome "{{ request('q') }}"</p>
        <p class="mb-0">Tente buscar por: Homem-Aranha, Hulk, Homem de Ferro, Wolverine, etc.</p>
    </div>
    @endif
</div>

<!-- JavaScript para Busca -->
<script>
document.getElementById('characterSearch').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('searchForm').submit();
    }
});

// Foco automático no input
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('characterSearch').focus();
});
</script>
</body>
</html>