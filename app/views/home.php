@extends('Layouts.main_layout')
@section('title', 'Home')

@section('content')

    <div class="hero">

        <div class="message d-flex justify-content-center w-100">
            @if (session('email-success'))
                <div class="alert alert-success"id="email-success">
                    {{ session('email-success') }}
                </div>
            @endif
        </div>



        <div class="hero-intro">
            <h1>
                Conectamos quem cuida a quem precisa. <br><strong>Simples, rápido e humano.</strong>
            </h1>
            <p>
                Encontre o cuidador ideal para suas necessidades ou ofereça seus serviços de cuidado de forma fácil
                e segura. Nossa plataforma simplifica a busca e a conexão, priorizando o cuidado humanizado e a
                confiança entre as partes.
            </p>
            <a href="{{ route('cadastro') }}"class="btn btn-success">Quero saber mais</a>
        </div>
        <div class="hero-img">
            <img src="{{ asset('assets/imgs/hero4.png') }}" alt="Imagem de fundo">
        </div>
    </div>

    <section class="sobre">
        <div class="sobre-img">
            <div>
                <img src="{{ asset('assets/imgs/1.png') }}" alt="Sobre 2">
            </div>
        </div>
        <div class="sobre-info">
            <h1>Quem somos nós?</h1>
            <p>No <strong>Conecte Cuidadores</strong>, acreditamos que todos merecem cuidado e atenção de qualidade.
                Nossa plataforma nasceu com um propósito simples: <strong>aproximar cuidadores experientes de pessoas
                    que precisam de assistência</strong>, de forma rápida, acessível e confiável.</p>

            <p><strong>Nossa Missão é clara:</strong> facilitar a conexão entre aqueles que precisam de apoio no dia a
                dia e profissionais dedicados ao bem-estar e à saúde. Queremos tornar essa busca mais <strong>simples,
                    rapida e humana</strong>.</p>
        </div>
    </section>



@endsection
