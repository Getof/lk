<header class="header">
    <div class="container">
        <div class="d-flex flex-jc-sb">
            <div class="header-logo">
                <a href="/">
                    <img src="{{ asset('front/img/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="header-btn d-flex flex-jc-sb">
                    @auth
                    <div class="header-btn__register">
                        <a href="/lk/{{Auth::user()->role}}">{{Auth::user()->name}}</a>
                    </div>
                    <div class="header-btn__login">
                        <a href="/logout">Выход</a>
                    </div>
                    @else
                        <div class="header-btn__register">
                            <a href="#" data-toggle="modal" data-target="#registerStartModal">Регистрация</a>
                        </div>
                        <div class="header-btn__login">
                            <a href="#" data-toggle="modal" data-target="#loginModal">Вход</a>
                        </div>
                    @endauth
            </div>
        </div>
    </div>
</header>
