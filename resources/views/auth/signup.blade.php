@extends('layouts.auth')

@section('title', 'Регистрация')

@section('content')
        <h1 class="title center">Welcome to Anifox</h1>
        <form method="POST" action="{{ route('auth.signup') }}" class="form__control" novalidate>
            @csrf
            <input type="email" class="input-dark{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Например, user@gmail.com" value="{{ Request::old('email') }}">
            @if($errors->has('email'))
                <span class="danger-text">
                    {{ $errors->first('email') }}
                </span>
            @endif
            <input type="text" class="input-dark{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="Логин" value="{{ Request::old('username') }}">
            @if($errors->has('username'))
                <span class="danger-text">
                    {{ $errors->first('username') }}
                </span>
            @endif
            <input type="password" class="input-dark{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="минимум 6 символов" value="{{ Request::old('password') }}">
            @if($errors->has('password'))
                <span class="danger-text">
                    {{ $errors->first('password') }}
                </span>
            @endif
            <button class="btn-primary mt-15" type="submit">Зарегистрироваться</button>
            <a href="{{ route('auth.signin') }}" class="link-dark mt-5 center">У меня уже есть аккаунт</a>
        </form>
@endsection
