<?php
require_once BASE_DIR.'/config.php';
$titulo = APP_NAME;
$css_pagina = CSS."exemplo.css";
require_once "layouts/header.php";

?>

    <div class="form-cliente-container">
        <section class="form-cliente">

            <div class="form-cliente-side">
                <h1>Cadastre-se Gratuitamente!</h1>
                <p>Preencha os campos abaixo para criar sua conta como cliente.</p>
                <p>Ja possui uma conta? <a href="{{ route('login') }}">Entre aqui!</a></p>
                <img src="{{ asset('assets/imgs/cadastro.png') }}" alt="Imagem de fundo">
            </div>

            <form action="{{ route('form.cliente.submit') }}" method="post"enctype="multipart/form-data">

                <input type="hidden"name="tipo" value="cliente">

                <div class="form-cliente-pessoal form">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text"name="nome"id="nome" class="form-control">
                        @error('nome')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="cpf">Cpf</label>
                        <input type="text"name="cpf"id="cpf" class="form-control">
                        @error('cpf')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email"name="email"id="email" class="form-control">
                        @error('email')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text"name="telefone"id="telefone" class="form-control">
                        @error('telefone')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-cliente-endereco form">
                    <div>
                        <label for="cep">Cep</label>
                        <input type="text"name="cep"id="cep" class="form-control">
                        @error('cep')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="rua">Rua</label>
                        <input type="text"name="rua"id="rua" class="form-control">
                        @error('rua')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="cidade">Cidade</label>
                        <input type="text"name="cidade"id="cidade" class="form-control">
                        @error('cidade')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="bairro">Bairro</label>
                        <input type="text"name="bairro"id="bairro" class="form-control">
                        @error('bairro')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="form-cliente-senha form">
                    <div>
                        <label for="password">Senha</label>
                        <input type="password"name="password" class="form-control">
                        @error('password')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation">Confirmar Senha</label>
                        <input type="password"name="password_confirmation" class="form-control">
                        @error('password_confirmation')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-cliente-fim form">
                    <div class="form-cliente-foto">
                        <label for="foto">Foto de Perfil</label>
                        <input type="file" name="foto" class="form-control">
                        @error('foto')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
               <!-- Botão de envio -->
                <div class="mt-4 ">
                    <input type="submit" class="btn btn-secondary form-control btn-cliente" value="Cadastrar-se">
                </div>
    </div>

    </form>
    </section>

    </div>

<?php include "layouts/footer.php"; ?>
