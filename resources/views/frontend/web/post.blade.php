@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/blog.css') }}">
@endsection

@section('main')
<main class="main">
    <div class="container">
        <div class="main-blog">
            <h2 class="main-blog__header">{{$post->title}}</h2>
            <div class="main-blog__blocks d-flex flex-center">
                @include('frontend.web.partial.onepost')
            </div>
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

