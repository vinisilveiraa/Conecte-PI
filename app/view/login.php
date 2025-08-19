@php
    if (Auth::user()) {
        if (Auth::user()->tipo == 'cliente') {
            return redirect()->route('dashboard.cliente');
        }

        return redirect()->route('dashboard.cuidador');
    }
@endphp



@extends('Layouts.main_layout')

@section('title', 'Cadastro')

@section('content')

    <div class="form-login-container">

        {{-- Menssagem caso a senha ou login estejam errados --}}
        @if (session('login_error'))
            <div class="alert alert-primary"id="login_error">
                {{ session('login_error') }}
            </div>
        @endif

        {{-- Menssagem quando o cadastro é bem sucedido  --}}
        @if (session('create_user_success'))
            <div class="alert alert-success"id="create_user_success">
                {{ session('create_user_success') }}
            </div>
        @endif

        <section class="form-login">
            <h1>LOGIN</h1>
            <form action="{{ route('login.submit') }}" method="post">
                @csrf

                <div>
                    <label for="email">E-mail</label>
                    <input type="email"name="email" class="form-control"value="{{ old('email') }}">
                    @error('email')
                        <div class="text-warning">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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
                    <input type="submit"class="btn btn-secondary form-control mt-4 mb-4" value="LOGIN">
                </div>
                <div>
                    <a href="{{route('cadastro')}}" class="text-light">Ainda não tem conta ?</a>
                </div>
            </form>
        </section>

    </div>

@endsection
