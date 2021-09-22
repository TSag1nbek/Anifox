@extends('layouts.main')

@section('title', $anime->title)

@section('content')
<!-- Episode Show -->
<div class="product-show">
    <div class="show__product-container">
        <div class="product__hide-navs">
            <div class="bg__shadow"></div>
            <img src="{{ asset($anime->hide_img) }}">
        </div>

        <div class="product__inner container">
            <div class="product__navs">
                <img src="{{ asset($anime->image) }}" class="product__img">

                <div class="product__navs-item">
                    <i class="fas fa-eye"></i>
                    {{ $anime->view_count }}
                </div>

                <div class="product__navs-item">
                    <i class="fas fa-heart"></i>
                    {{ $anime->likes->count() }}
                </div>
            </div>

            <div class="product__body">
                <div class="product__body-container">

                    <div class="product__container-head">
                        <img src="{{ asset($anime->image) }}" alt="" class="product__img-mobile">
                    </div>

                    <div class="product__container-body">
                        <div class="product__body-inner">
                            <h1 class="product-title">{{ $anime->title }}</h1>
                        </div>

                        <div class="product__body-content">
                            <ul class="product__menu">
                                <li>
                                    Жанры:
                                    @foreach($anime->categories as $category)
                                        <a href="{{ route('showCategory', $category->slug) }}">{{ $category->title }}</a>
                                    @endforeach
                                </li>
                                <li>
                                    Типы:
                                    @foreach($anime->types as $type)
                                        <a href="{{ route('showType', $type->slug) }}">{{ $type->title }}</a>
                                    @endforeach
                                </li>
                                <li>
                                    Годы выпуска:
                                    @foreach($anime->dates as $date)
                                        <a href="{{ route('showDate', $date->date) }}">{{ $date->date }}</a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>

                        <div class="product__body-inner">
                            <ul class="product__menu">
                                <li>
                                    Возрастной рейтинг:  <div class="product__quality">+{{ $anime->old }}</div>
                                </li>
                                <li>
                                    Оригинальное название: {{ $anime->original_title }}
                                </li>
                                <li>
                                    @if($anime->user !== Auth::user() )
                                        <a href="{{ route('episode.like', ['statusId' => $anime->id]) }}">Поставить лайк</a>
                                    @endif()
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product__body-container only__mobile">
                    <div class="product__container-head">
                        <button class="btn__squard"><i class="fas fa-eye"></i>{{ $anime->view_count }}</button>
                    </div>
                    <div class="product__container-body float-right">
                        <button class="btn__squard"><i class="fas fa-heart"></i>{{ $anime->likes->count() }}</button>
                    </div>
                </div>

                <div class="product__body-content">
                    <div class="product__description">
                        <p class="product-show__txt">
                            {{ $anime->description }}
                        </p>
                    </div>
                </div>

                <!-- Player -->
                <div class="product__series">
                    @foreach($anime->seasons as $season)
                    <div class="product__season">
                        <h1 class="product__season-title">{{ $season->title }}</h1>
                        <div class="product__season-series">
                            @foreach($season->episodes as $episode)
                            <a href="{{ route('showEpisode', [$anime->slug, $season->slug, $episode->slug]) }}" class="product__season-link">{{ $episode->title }}</a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="product__body-inner">
                <div class="title m-none">
                    <h1>Комментарии к фильму</h1>
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>
            @if(\Auth::check())
                <form method="POST" action="{{ route('comments.add') }}" class="comments">
                    @csrf
                    <input type="hidden" value="{{ $anime->id }}" name="product_id">
                    <textarea placeholder="Коментарии" class="comment__input" name="comment"></textarea>
                    <button class="comment__btn" type="submit">Написать</button>
                </form>
            @else
                <p style="font-size:18px;color:#e3e3e3;margin-top:10px;margin-bottom: 15px">Чтобы написать комментарий пожалуйста
                    <a href="{{ route('auth.signup') }}" style="color:#f9f9f9">зарегистрируйтесь</a>
                </p>
            @endif
        </div>
        <div class="container">
            <!-- Comments -->
            <div class="product__commnets">
                @foreach($comments as $comment)
                <div class="product__comment-item">
                    <div class="comment__navs">
                        @if(is_null(_user($comment->user_id)->avatar))
                        <img src="{{ asset('img/default/avatar.jpg') }}" alt="" class="comment__img">
                        @else
                        <img src="{{ asset('image/avatar/' . _user($comment->user_id)->avatar) }}" class="comment__img">
                        @endif
                    </div>
                    <div class="comment__body">
                        <div class="product__flex">
                            <h1 class="comment__username">{{ _user($comment->user_id)->username }}</h1>
                            <p class="product__time">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        <p class="comment__txt">
                            {{ $comment->comment }}
                        </p>
                    </div>
                </div>
                @endforeach

                    {{$comments->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection
