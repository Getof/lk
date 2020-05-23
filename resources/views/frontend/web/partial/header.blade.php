<header class="header">
    <div class="container">
        <div class="d-flex flex-jc-sb">
            <div class="header-logo">
                <a href="/">
                    <img src="{{ asset('front/img/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="header-btn d-flex flex-jc-sb">
                @guest
                <div class="header-btn__register">
                    <a href="#" data-toggle="modal" data-target="#registerStartModal">Регистрация</a>
                </div>
                <div class="header-btn__login">
                    <a href="#" data-toggle="modal" data-target="#loginModal">Вход</a>
                </div>
                    @else
                    <div class="header-btn__register">
                        <a href="#" data-toggle="modal" data-target="#registerStartModal">{{Auth::user()->name}}</a>
                    </div>
                    <div class="header-btn__login">
                        <a href="#" data-toggle="modal" data-target="#loginModal">Выход</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>
