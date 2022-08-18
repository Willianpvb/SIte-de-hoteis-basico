<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img height="30" width="30" src="https://i.pinimg.com/originals/72/41/40/724140ff247a6e922bcb45f534bab3bc.jpg"><img>
            </a>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quem_somos">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/corretores">Corretores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                    
                    
                </ul>
            </div>
            
            <div class="d-flex justify-content-end">
                @auth <a href="/sair" class="btn btn-outline-danger" 
                type="button">Sair</a> 
                @endauth @guest <a class="btn btn-outline-success" 
                type="button" href="/entrar">Entrar</a>@endguest 
            </div>
        </div>
    </nav>
</div>