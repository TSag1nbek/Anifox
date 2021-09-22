@extends('layouts.auth')

@section('title', 'Войти')

@section('content')
    <h1 class="title center">Войти на сайт</h1>
    <form method="POST" action="{{ route('auth.signin') }}" class="form__control" novalidate>
        @csrf
        <input type="email" class="input-dark{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Например, user@gmail.com" value="{{ Request::old('email') }}">
        @if($errors->has('email'))
            <span class="danger-text">
                {{ $errors->first('email') }}
            </span>
        @endif
        <input type="password" class="input-dark{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="минимум 6 символов" value="{{ Request::old('password') }}">
        @if($errors->has('password'))
            <span class="danger-text">
                {{ $errors->first('password') }}
            </span>
        @endif
        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Запомнить меня</label>
        </div>
        <button class="btn-primary mt-15" type="submit">Войти</button>
        <a href="{{ route('auth.signup') }}" class="link-dark mt-5 center">Зарегистрироваться</a>
    </form>
@endsection
