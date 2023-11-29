<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('site.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Painel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Adicionar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Aluno</a></li>
                        <li><a class="dropdown-item" href="#">Professor</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if ($userDataNav)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $userDataNav->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            @if ()
                                
                            @endif
                            <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Ver professores</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Ver alunos</a></li>
                            <li>
                                <form action="{{ route('login.logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Sair</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login.index') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register.create') }}">Registro</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
