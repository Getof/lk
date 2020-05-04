<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Главная</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/index.css') }}">
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
                <form method="POST" action="/" class="register-modal__form-container d-flex flex-jc-sb">
                    <input type="hidden" name="_token" value="YQ2fFS0mICl7Wn5OAs9E3dfP8s00HUkIOUXNLLBQ">
                    <input type="text" class="register-modal__form-input" name="name" placeholder="Имя">
                    <input type="text" class="register-modal__form-input" name="surname" placeholder="Фамилия">
                    <input type="tel" class="register-modal__form-input" name="tel" placeholder="Телефон">
                    <input type="email" class="register-modal__form-input" name="email" placeholder="Email">
                    <input type="text" class="register-modal__form-input register-modal__form-input__invite" name="invite" placeholder="Пригласительная ссылка">
                    <input type="password" class="register-modal__form-input" name="password" placeholder="Пароль">
                    <input type="password" class="register-modal__form-input" name="password_confirmation" placeholder="Подтвердите пароль">
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
                <form method="POST" action="/" class="login-modal__form-container d-flex flex-jc-sb">
                    <input type="hidden" name="_token" value="YQ2fFS0mICl7Wn5OAs9E3dfP8s00HUkIOUXNLLBQ">
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
<header class="header">
    <div class="container">
        <div class="d-flex flex-jc-sb">
            <div class="header-logo">
                <a href="/">
                    <img src="{{ asset('front/img/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="header-btn d-flex flex-jc-sb">
                <div class="header-btn__register">
                    <a href="#" data-toggle="modal" data-target="#registerStartModal">Регистрация</a>
                </div>
                <div class="header-btn__login">
                    <a href="#" data-toggle="modal" data-target="#loginModal">Вход</a>
                </div>
            </div>
        </div>
    </div>
</header>
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
<footer class="footer">
    <div class="container">
        <div class="footer-links">
            <ul class="d-flex footer-links__list flex-jc-sb">
                <li class="footer-links__list-item">
                    <a href="/contacts">Контакты</a>
                </li>
                <li class="footer-links__list-item">
                    <a href="/reviews">Отзывы</a>
                </li>
                <li class="footer-links__list-item">
                    <a href="#">О нас</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="d-flex footer-copyright-container flex-jc-sb">
                <div class="footer-copyright__text">
						<span>
							© 2019 ООО «TutorSite».
							Все права защищены.
						</span>
                </div>
                <div class="footer-icons">
                    <ul class="footer-icons__list">
                        <li class="footer-icons__list-item">
                            <a href="#">
                                <img class="list-item__img" src="{{ asset('front/img/footer/facebook.svg') }}" alt="facebook_logo">
                            </a>
                        </li>
                        <li class="footer-icons__list-item">
                            <a href="#">
                                <img class="list-item__img" src="{{ asset('front/img/footer/instagram.svg') }}" alt="instagram_logo">
                            </a>
                        </li>
                        <li class="footer-icons__list-item">
                            <a href="#">
                                <img class="list-item__img" src="{{ asset('front/img/footer/twitter.svg') }}" alt="twitter_logo">
                            </a>
                        </li>
                        <li class="footer-icons__list-item">
                            <a href="#">
                                <img class="list-item__img" src="{{ asset('front/img/footer/whatsup.svg') }}" alt="whatsup_logo">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/register.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.bxslider.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.slider').bxSlider();
    });
</script>
</body>
</html>
