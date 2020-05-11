@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/reviews.css') }}">
    <style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>@endsection

@section('main')


<main class="main">
    <div class="container">
        <div class="main-reviews" id="review-data">
            <h2 class="main-reviews__header">Отзывы</h2>
            @include('frontend.web.partial.rew')


            {{--<div class="review-details">
                <a href="#">Читать полностью</a>
            </div>--}}
{{--            --}}{{--<div class="review-btn d-flex">--}}
{{--                <div class="review-btn__more-reviews">--}}
{{--                    <a href="#" class="review-btn__more-reviews__href">Показать еще</a>--}}
{{--                </div>--}}
                {{--<div class="review-btn__make-review">

                    <a href="#" class="review-btn__make-review__href" data-toggle="modal" data-target="#reviewModal">Оставить отзыв</a>
                </div>--}}

        </div>
        <div class="ajax-load text-center" style="display:none">
            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Загрузка</p>
        </div>
    </div>
</main>

@endsection

@section('script')
    <script>
        var page = 1;
        var pageLast = {{$reviews->lastPage()}};
        console.log(pageLast);
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                if (page <= pageLast) {
                    page++;
                    loadMoreData(page);
                }
            }
        });


        function loadMoreData(page){
            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    beforeSend: function()
                    {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data)
                {
                    if(data.html == ''){
                        $('.ajax-load').html("Отзывов больше нет");
                        return;
                    }
                    $('.ajax-load').hide();
                    $("#review-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('Сервер не отвечает...');
                });
        }
    </script>
@endsection
