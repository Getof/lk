@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/index.css') }}">
@endsection

@section('main')
<main class="main">
    <div class="container">
        <div class="main-slider">
            <div class="slider">
                @forelse($slides as $slide)
                    <div class="slide">
                        <h4 class="slide-header">{{$slide->title}}</h4>
                        <span class="slide-text">{{$slide->body}}</span>
                    </div>
                @empty
                @endforelse
            </div>
{{--            <div class="main-slider__details">--}}
{{--                <a href="#">Читать полностью</a>--}}
{{--            </div>--}}
        </div>
    </div>
    <hr class="long-line">
    <div class="container">
        <div class="main-blog">
            <h2 class="main-blog__header">Блог</h2>
            <div class="main-blog__blocks d-flex flex-jc-sb">
                @forelse($tasks as $task)
                    <div class="block-container">
                        <img class="block-container__img" src="{{asset('upload/imgtasks/'.$task->img)}}" alt="blog">
                        <div class="block-container__text-container">
                            <h5 class="block-container__header">{{$task->title}}</h5>
                            <span class="block-container__text">{{$task->body}}</span>
                            <div class="block-container__after d-flex flex-jc-sb">
                                <a href="{{route('post.show', $task->id)}}" class="block-container__after-details">Подробнее</a>
                                <span class="block-container__after-date">{{$task->created_at->format('d m Y')}}</span>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="main-blog__bth-container d-flex">
                <div class="main-blog__btn d-flex">
                    <a href="/blog" class="main-blog__btn-link">Все статьи</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider();
        });
    </script>
@endsection
