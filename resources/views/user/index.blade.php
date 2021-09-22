@extends('layouts.main')

@section('title', 'Профиль')

@section('content')
    <div class="category__container">
        <div class="main__container">

            <div class="profile__inner">
                <div class="profile-item">
                    <img src="img/default/avatar.jpg" class="profile__user-img">
                    <a href="{{ route('auth.signout') }}" class="profile__btn mt-15" style="background:red; text-align: center">Выйти</a>
                </div>
                <div class="profile-item ml-15">
                    <h1 class="profile__user-title">
                        {{ Auth::user()->getName() }}
                    </h1>
                    <ul class="profile__user-menu">
                        <li>
                            Дата регистрация: <a style="font-family: 'Roboto">{{ Auth::user()->getData() }}</a>
                        </li>
                        <li>
                            E-mail:  {{ Auth::user()->getEmail() }}
                        </li>
                    </ul>
                </div>
            </div>
            <button class="profile__btn mt-15">Сохранить изменение</button>
        </div>
    </div>
@endsection
