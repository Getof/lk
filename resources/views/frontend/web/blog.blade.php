@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/blog.css') }}">
@endsection

@section('main')
<main class="main">
    <div class="container">
        <div class="main-blog">
            <h2 class="main-blog__header">Блог</h2>
            <div class="main-blog__blocks d-flex flex-jc-sb">
                <div class="big-blocks slider d-flex flex-jc-sb">
                    @foreach($taskmain as $tm)
                    <div class="big-blog-container"
                         style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), url({{asset('upload/imgtasks/'.$tm->img)}}) no-repeat">
                        <div class="big-blog-text">
                            <h4 class="big-blog-text__header">{{$tm->title}}</h4>
                            <hr class="big-blog-text__line">
                            <div class="big-blog-text__after d-flex flex-jc-sb">
                                <a href="{{route('post.show', $tm->id)}}" class="big-blog-text__after-details">Подробнее</a>
                                <span class="big-blog-text__after-date">{{$tm->created_at->format('d.m.Y')}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="big-blog-container" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), url(http://macfort-test.ru/front/img/blog.svg) no-repeat">--}}
{{--                        <div class="big-blog-text">--}}
{{--                            <h4 class="big-blog-text__header">Lorem ipsum header</h4>--}}
{{--                            <hr class="big-blog-text__line">--}}
{{--                            <div class="big-blog-text__after d-flex flex-jc-sb">--}}
{{--                                <a href="#" class="big-blog-text__after-details">Подробнее</a>--}}
{{--                                <span class="big-blog-text__after-date">12.03.2020</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                @foreach($tasks as $ts)
                <div class="block-container">
                    <img class="block-container__img" src="{{asset('upload/imgtasks/'.$ts->img)}}" alt="blog">
                    <div class="block-container__text-container">
                        <h5 class="block-container__header">{{$ts->title}}</h5>
                        <span class="block-container__text">{{$ts->body}}</span>
                        <div class="block-container__after d-flex flex-jc-sb">
                            <a href="{{route('post.show', $ts->id)}}" class="block-container__after-details">Подробнее</a>
                            <span class="block-container__after-date">{{$ts->created_at->format('d.m.Y')}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
{{--            <div class="main-blog__bth-container d-flex">--}}
{{--                <div class="main-blog__btn d-flex">--}}
{{--                    <a href="#" class="main-blog__btn-link">Все статьи</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</main>

@endsection

@section('script')
    <script>
        if(window.innerWidth < 1170){
            $(document).ready(function(){
                $('.slider').bxSlider();
            });
        }
    </script>
@endsection
