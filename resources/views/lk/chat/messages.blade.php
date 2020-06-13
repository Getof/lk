<div class="box">
    <div  class="box-container">
        <div  class="chat-box white-block">
            <div  class="chat-box-header d-flex flex-jc-sb">
                <div  class="header-credentails">
                    <a href="/chat" class="header-credentails__prev router-link-active">
                        <img src="{{ asset('front/img/lk/arrow.svg') }}" alt="prev">
                    </a>
                    <img src="{{ asset('front/img/lk/no_avatar.svg') }}" alt="logo" class="header-credentails__img">
                    <span class="header-credentails__name heading">Валерия Сысоева</span>
                </div>
                <div class="header-actions d-flex flex-jc-sb">
                    <div class="header-actions__block header-actions-search">
                        <img src="{{ asset('front/img/lk/gray_search.svg') }}" alt="search" class="header-actions__block-img">
                    </div>
                    <div class="header-actions__block header-actions-mute">
                        <img src="{{ asset('front/img/lk/mute.svg') }}" alt="mute" class="header-actions__block-img">
                    </div>
                    <div class="header-actions__block header-actions-garbage">
                        <img src="{{ asset('front/img/lk/garbage.svg') }}" alt="garbage" class="header-actions__block-img">
                    </div>
                </div>
            </div>
            <hr class="chat-box-line">
            <div class="chat-box-field-container">
                <div class="chat-box-field">
                    <span class="chat-box-date heading">17 марта</span>

                    @foreach($messages as $message)

                    @if($message->from_user == Auth::id())
                    <div class="chat-box-message d-flex flex-jc-sb message-own">
                        <div class="message-text">
                            <div  class="message-text__header d-flex flex-jc-sb">
                                <div class="message-text__header-credentails">
                                    <span>{{ date('d M y, h:i a', strtotime($message->created_at)) }}</span>
{{--                                    <img src="/images/seen.svg?8a0f3e0ac8578f4581482e331bbcf7d0" class="header-credentails-seen">--}}
                                </div>
                                <div class="message-text__header-name">
                                    <span></span>
                                </div>
                            </div>
                            <span class="message-text-container">{{$message->message}}</span>
                        </div>
                        <div class="message-photo">
                            <img src="{{ asset('front/img/lk/no_avatar.svg') }}" alt="logo">
                        </div>
                    </div>
                    @else
                    <div class="chat-box-message d-flex flex-jc-sb message-opponent">
                        <div class="message-photo">
                            <img src="{{ asset('front/img/lk/no_avatar.svg') }}" alt="logo">
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
                    @endif
                    @endforeach


                </div>
            </div>

            <div class="chat-box-footer d-flex flex-jc-sb">
                <div class="box-footer__input d-flex">
                    <img src="{{ asset('front/img/lk/clip.svg') }}" alt="clip" class="box-footer__input-clip">
                    <input placeholder="Сообщение" class="box-footer__input-field">
                </div>
                <div class="box-footer__send d-flex">
                    <img src="{{ asset('front/img/lk/smile.svg') }}" alt="smile" class="box-footer__send-smile">
                    <img src="{{ asset('front/img/lk/plane.svg') }}" alt="plane" class="box-footer__send-plane">
                </div>
            </div>
        </div>
    </div>
</div>
