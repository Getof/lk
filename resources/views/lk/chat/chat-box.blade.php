@extends('lk.layouts.lk')
@section('main')
    <div class="main">
        <div class="main-container">
            <section class="content">
                <div class="chat">
                    <div class="chat-container">
                        <div class="chat-lists white-block">
                            <div class="chat-lists__header">
                                <input placeholder="Поиск в диалогах" class="chat-lists__header-input">
                                <img src="{{ asset('front/img/lk/search.svg') }}" alt="search" class="chat-lists__header-search">
                            </div>
                            <ul class="chat-lists__container">
                                @foreach($users as $user)
                                <li id="{{$user->id}}" class="conversation-block router-link-exact-active">
                                <div class="conversation-block__credentails d-flex">
                                    <img src="{{ asset('front/img/lk/no_avatar.svg') }}" class="conversation-block__credentails-img">
                                    <div class="credentails-text">
                                        <span class="credentails-text__name heading">{{$user->name}} {{$user->lastname}}</span>
        {{--                                <span class="credentails-text__time">1 месяц назад</span>--}}
                                        <img src="{{ asset('front/img/lk/red.svg') }}" class="credentails-unread">
                                    </div>
                                </div>
        {{--                        <span class="conversation-last_msg">Quis velit dolor cursus enim dui nibh...</span>--}}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="chat-box-container" id="messages">

                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection

@section('script')
<script>
    var receiver_id='';
    var my_id = "{{Auth::id()}}";
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        Pusher.logToConsole = true;

        var pusher = new Pusher('84606b18260d9d3f7f6a', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            if (my_id == data.from_user){

            }
        });


        $('.conversation-block').click(function () {
            $('.conversation-block').removeClass('conversation-block-active');
            $(this).addClass('conversation-block-active');
            receiver_id = $(this).attr('id');

            $.ajax({
               type: 'GET',
               url: 'chat/' + receiver_id,
               data: '',
               cache: false,
               success: function (data) {
                   $('#messages').html(data);
                   scrollToBottomFunc();
               }
            });

        });

        $(document).on('keyup', '.box-footer__input input', function (e) {
            var message = $(this).val();
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "chat/message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                });
            }
        });


    });

    function scrollToBottomFunc() {
        $('.chat-box-field-container').animate({
            scrollTop: $('.chat-box-field-container').get(0).scrollHeight
        }, 50);
    }
</script>
@endsection
