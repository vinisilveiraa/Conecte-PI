@extends('Layouts.main_layout')
@section('title', 'Cadastro')


@section('content')

    <section class="papeis-container">
        <h1>A ajuda certa, no momento certo!</h1>
        <div class="papeis">
            <div class="papeis-item item1">
                <h2>Buscando um <br> cuidador ?</h2>
                <ul>
                    <li>Profissionais confiáveis.</li>
                    <li>Escolha fácil e rápida.</li>
                    <li>Sem burocracia.</li>
                    <li>Encontre ajuda quando mais precisar.</li>
                </ul>
                <a href="{{route('form.cliente')}}"class="btn form-control">Preciso de um</a>
            </div>
            <div class="papeis-item item2">
                <h2>Quer oferecer <br> cuidado ?</h2>
                <ul>
                    <li>Alcance mais pessoas.</li>
                    <li>Destaque sua experiência.</li>
                    <li>Conexão direta, sem burocracia.</li>
                    <li>Flexibilidade para escolher seus serviços.</li>
                </ul>
                <a href="{{route('form.cuidador')}}"class="btn form-control">Seja Cuidador</a>
            </div>
        </div>
    </section>

    <div class="como-funciona-container">

        <h1 class="mt-5">Como Funciona ?</h1>

        <section class="como-funciona">

            <div class="card color1">
                <img src="{{ asset('assets/imgs/funciona1.png') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Escolha seu papel</h5>
                    <p class="card-text">
                        Quer oferecer cuidado? Cadastre-se como cuidador. <br> Precisa de um cuidador? Busque profissionais
                        qualificados.
                    </p>
                </div>
            </div>

            <div class="card color2">
                <img src="{{ asset('assets/imgs/funciona2.png') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Preencha um formulário</h5>
                    <p class="card-text">
                        Preencha um formulário simples com suas informações e preferências. Quanto mais detalhes, melhor a
                        conexão!
                    </p>
                </div>
            </div>

            <div class="card color2">
                <img src="{{ asset('assets/imgs/funciona3.png') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Conecte-se com facilidade</h5>
                    <p class="card-text">
                        Receba contatos rapidamente e converse diretamente com o cuidador ou quem precisa do serviço.
                    </p>
                </div>
            </div>

            <div class="card color1">
                <img src="{{ asset('assets/imgs/funciona4.png') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Comece o cuidado</h5>
                    <p class="card-text">
                        Combine os detalhes, alinhe expectativas e inicie um cuidado seguro e de confiança.
                    </p>
                </div>
            </div>

        </section>
    </div>

@endsection


