<?php
require_once BASE_DIR.'/config.php';
$titulo = APP_NAME;
$css_pagina = CSS."login.css";
require_once VIEWS."/layouts/header.php";
?>
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


                    <div class="auth-user d-flex justify-content-center align-items-center gap-4">

                        <form action="#" method="post">
                            
                            <input type="submit"value="Logout" class="btn btn-danger">
                        </form>

                            <a href="{{ route('dashboard.cliente') }}" class='btn btn-secondary'>Meu Perfil</a>
                     
                    </div>



          
            </nav>
        </div>

    </div>
</header>