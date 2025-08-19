<header class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="menu-bg container-fluid">

        <div class="menu container">


            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{ asset('assets/imgs/logo.png') }}" alt="logo">
                    <span>Conecte</span>
                </a>
            </div>

            <!-- botão do menu hamburguer -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- menu no modo desktop -->
            <nav class="menu-nav col-md-10 collapse navbar-collapse" id="navbarNav" style="flex-grow:0;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('form.cliente') }}" class="nav-link">Contrate um Cuidador</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('form.cuidador') }}"class="nav-link">Sou Cuidador</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sobre.nos') }}" class="nav-link">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contatos') }}" class="nav-link">Contatos</a>
                    </li>
                </ul>

                @guest
                    <div class="buttons ms-md-2">
                        <a href="{{ route('login') }}"class="btn btn-primary form-control">Entrar</a>
                        <a href="{{ route('cadastro') }}"class="btn btn-secondary form-control">Cadastrar</a>
                    </div>
                @endguest

                @auth

                    <div class="auth-user d-flex justify-content-center align-items-center gap-4">

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit"value="Logout" class="btn btn-danger">
                        </form>

                        @if (Auth::user()->tipo == 'cuidador')
                            <a href="{{ route('dashboard.cuidador') }}" class='btn btn-secondary'>Meu Perfil</a>
                        @endif
                        @if (Auth::user()->tipo == 'cliente')
                            <a href="{{ route('dashboard.cliente') }}" class='btn btn-secondary'>Meu Perfil</a>
                        @endif
                    </div>



                @endauth
            </nav>
        </div>

    </div>
</header>
