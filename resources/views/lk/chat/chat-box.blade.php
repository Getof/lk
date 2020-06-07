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
                        <img src="/images/search.svg" alt="search" class="chat-lists__header-search">
                    </div>
                    <div class="chat-lists__container">
                        @foreach($users as $user)
                        <a href="" data-id="{{$user->id}}" data-user="{{$user->name}}" class="conversation-block router-link-exact-active conversation-block-active">
                        <div class="conversation-block__credentails d-flex">
                            <img src="{{ asset('front/img/lk/no-avatar.svg') }}" class="conversation-block__credentails-img">
                            <div class="credentails-text">
                                <span class="credentails-text__name heading">{{$user->name}} {{$user->lastname}}</span>
{{--                                <span class="credentails-text__time">1 месяц назад</span>--}}
                                <img src="{{ asset('front/img/lk/red.svg') }}" class="credentails-unread">
                            </div>
                        </div>
{{--                        <span class="conversation-last_msg">Quis velit dolor cursus enim dui nibh...</span>--}}
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
                <div  class="chat-box-container">
                    <div d class="box">
                        <div  class="box-container">
                            <div  class="chat-box white-block">
                                <div  class="chat-box-header d-flex flex-jc-sb">
                                    <div  class="header-credentails">
                                        <a href="#/chat" class="header-credentails__prev router-link-active">
                                            <img src="/images/arrow.svg?9862ee571d567ccf956053c8b0839004" alt="prev">
                                        </a>
                                            <img src="http://127.0.0.1:8000/storage/avatars/no_avatar.svg" alt="logo" class="header-credentails__img">
                                            <span class="header-credentails__name heading">Валерия Сысоева</span>
                                    </div>
                                    <div class="header-actions d-flex flex-jc-sb">
                                        <div class="header-actions__block header-actions-search">
                                            <img src="/images/gray_search.svg?69717dd19494afaef12738f39cc6641a" alt="search" class="header-actions__block-img"></div>
                                        <div class="header-actions__block header-actions-mute">
                                            <img src="/images/mute.svg?ef02b4a6f1cd0d804f91e8034d5658a9" alt="mute" class="header-actions__block-img">
                                        </div>
                                        <div class="header-actions__block header-actions-garbage">
                                            <img src="/images/garbage.svg?6cf88a42d0a390a17fc48eb152649a69" alt="garbage" class="header-actions__block-img">
                                        </div>
                                    </div>
                                </div>
                                <hr class="chat-box-line">
                                <div class="chat-box-field-container">
                                    <div class="chat-box-field"><span class="chat-box-date heading">17 марта</span>

                                        <div class="chat-box-message d-flex flex-jc-sb message-own">
                                            <div class="message-text">
                                                <div  class="message-text__header d-flex flex-jc-sb">
                                                    <div class="message-text__header-credentails">
                                                        <span>13:21</span>
                                                        <img src="/images/seen.svg?8a0f3e0ac8578f4581482e331bbcf7d0" class="header-credentails-seen">
                                                    </div>
                                                    <div class="message-text__header-name">
                                                        <span>Степан Елисеев</span>
                                                    </div>
                                                </div>
                                                <span class="message-text-container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tincidunt magnis quam.</span>
                                            </div>
                                            <div class="message-photo">
                                                <img src="http://127.0.0.1:8000/storage/avatars/no_avatar.svg" alt="logo">
                                            </div>
                                        </div>


                                        <div class="chat-box-message d-flex flex-jc-sb message-opponent">
                                            <div class="message-photo">
                                                <img src="http://127.0.0.1:8000/storage/avatars/no_avatar.svg" alt="logo">
                                            </div>
                                            <div class="message-text">
                                                <div class="message-text__header d-flex flex-jc-sb">
                                                    <div class="message-text__header-name">
                                                        <span>Степан Елисеев</span>
                                                    </div>
                                                    <div class="message-text__header-credentails">
                                                        <span>13:21</span>
                                                    </div>
                                                </div>
                                                <span class="message-text-container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tincidunt magnis quam.</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="chat-box-footer d-flex flex-jc-sb">
                                    <div class="box-footer__input d-flex">
                                        <img src="/images/clip.svg?20ae23977c17b73408cfceca1c4e9f57" alt="clip" class="box-footer__input-clip">
                                        <input placeholder="Сообщение" class="box-footer__input-field">
                                    </div>
                                    <div class="box-footer__send d-flex">
                                        <img src="/images/smile.svg?63d137cccf621258224682d33cc986aa" alt="smile" class="box-footer__send-smile">
                                        <img src="/images/plane.svg?2225d0544a907688bf88522a642d1274" alt="plane" class="box-footer__send-plane">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>
    </div>
@endsection
