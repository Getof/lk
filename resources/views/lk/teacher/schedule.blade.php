@extends('lk.layouts.lk')

@section('aside')
    <aside id="aside" class="aside">
        <div class="aside-container">
            <div class="aside-header-container">
                <div class="aside-header aside-header-normal d-flex flex-jc-sb">
                    <div class="aside-header__user">
                        <img src="{{ asset('front/img/lk/aside/user-logo.svg') }}" alt="user-logo" class="aside-header__user-logo">
                        <span class="aside-header__user-name">Учитель</span>
                    </div>
                    <a href="./exit" class="aside-header_user-logout d-flex">
                        <img src="{{ asset('front/img/lk/aside/logout.svg') }}" alt="logout" class="aside-header__user-logout_img">
                    </a>
                </div>
                <div class="aside-header aside-header-mobile d-flex flex-jc-sb">
                    <img src="{{ asset('front/img/lk/aside/logo-small.svg') }}" alt="logo" class="aside-header__logo-small">
                    <a href="#" class="aside-header_close">
                        <img src="{{ asset('front/img/lk/aside/close.svg') }}" alt="close" class="aside-header__user-close_img">
                    </a>
                </div>
            </div>
            <ul class="aside-links">
                <a href="#/schedule" class="aside-links__element router-link-exact-active aside-links-active">
                    <img src="{{ asset('front/img/lk/aside/calendar.svg') }}" alt="aside_schedule" class="aside-links__element-logo">
                    <span class="aside-links__element-text">Расписание</span>
                </a>
                <a href="#/materials/courses" class="aside-links__element">
                    <img src="{{ asset('front/img/lk/aside/materials.svg') }}" alt="materials_courses" class="aside-links__element-logo">
                    <span class="aside-links__element-text">Материалы</span>
                </a>
                <a href="#/students" class="aside-links__element">
                    <img src="{{ asset('front/img/lk/aside/students.svg') }}" alt="aside_students" class="aside-links__element-logo">
                    <span class="aside-links__element-text">Ученики</span>
                </a>
                <a href="#/blog" class="aside-links__element">
                    <img src="{{ asset('front/img/lk/aside/blog.svg') }}" alt="aside_blog" class="aside-links__element-logo">
                    <span class="aside-links__element-text">Блог</span>
                </a>
                <a href="#/profile" class="aside-links__element">
                    <img src="{{ asset('front/img/lk/aside/profile.svg') }}" alt="aside_profile" class="aside-links__element-logo">
                    <span class="aside-links__element-text">Профиль</span>
                </a>
            </ul>
        </div>
    </aside>
@endsection
