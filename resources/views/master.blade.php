<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Главная</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.bxslider.css') }}">
    @yield('css')
</head>
<body>
<div class="modal fade" id="registerStartModal" tabindex="-1" role="dialog" aria-labelledby="registerStartModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal-label" role="document">
        <div class="modal-content">
            <div class="register-modal-start">
                <h2 class="register-modal__header">Регистрация</h2>
                <div class="register-modal__type-container d-flex flex-jc-sb">
                    <div class="register-modal__type-block register-modal__type-checked" data-type="student">
                        <img src="{{ asset('front/img/register/student.svg') }}" alt="student" class="register-modal__type-img">
                        <span class="register-modal__type-text">Я ученик</span>
                    </div>
                    <div class="register-modal__type-block" data-type="parent">
                        <img src="{{ asset('front/img/register/parent.svg') }}" alt="parent" class="register-modal__type-img">
                        <span class="register-modal__type-text">Я родитель</span>
                    </div>
                    <div class="register-modal__type-block" data-type="teacher">
                        <img src="{{ asset('front/img/register/teacher.svg') }}" alt="teacher" class="register-modal__type-img">
                        <span class="register-modal__type-text">Я преподователь</span>
                    </div>
                </div>
                <div class="register-modal__btn-container d-flex">
                    <a class="register-modal__btn" href="#" onClick="$(function () {$('#registerStartModal').modal('toggle')});" data-toggle="modal" data-target="#registerFinishModal">Продолжить</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerFinishModal" tabindex="-1" role="dialog" aria-labelledby="registerFinishModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal-label" role="document">
        <div class="modal-content">
            <div class="register-modal-finish">
                <h2 class="register-modal__header">Регистрация</h2>
                <form method="POST" action="/reg" class="register-modal__form-container d-flex flex-jc-sb">
                    @csrf
                    <input type="text" class="register-modal__form-input" name="name" placeholder="Имя">
                    <input type="text" class="register-modal__form-input" name="surname" placeholder="Фамилия">
                    <input type="tel" class="register-modal__form-input" name="tel" placeholder="Телефон">
                    <input type="email" class="register-modal__form-input" name="email" placeholder="Email">
{{--                    <input type="text" class="register-modal__form-input register-modal__form-input__invite" name="invite" placeholder="Пригласительная ссылка">--}}
                    <input type="password" class="register-modal__form-input" name="password" placeholder="Пароль">
                    <input type="password" class="register-modal__form-input" name="password_confirmation" placeholder="Подтвердите пароль">
                    <input type="hidden"  name="type" id="type" value="student">
                    <div class="register-modal__btn-container">
                        <input type="submit" class="register-modal__btn" value="Зарегистрироваться">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog login-modal-label" role="document">
        <div class="modal-content">
            <div class="login-modal">
                <h2 class="login-modal__header">Авторизация</h2>
                <form method="POST" action="/login" class="login-modal__form-container d-flex flex-jc-sb">
                    @csrf
                    <input type="text" class="login-modal__form-input" name="email" placeholder="Login">
                    <input type="password" class="login-modal__form-input" name="password" placeholder="Пароль">
                    <div class="login-modal__btn-container">
                        <input type="submit" class="login-modal__btn" value="Войти">
                    </div>
                </form>
                <div class="login-modal__after">
				<span class="login-modal__after-text">
					Еще нет аккаунта?
				</span>
                    <a href="#" class="login-modal__after-href" onClick="$(function () {$('#loginModal').modal('toggle')});" data-toggle="modal" data-target="#registerStartModal">Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.web.partial.header')

@yield('main')

@include('frontend.web.partial.footer')

<script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/register.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.bxslider.js') }}"></script>

@yield('script')
</body>
</html>
