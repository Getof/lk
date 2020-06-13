@extends('lk.layouts.lk')

@section('main')
<main class="main">
    <div class="main-container">
        <section class="content">
            <div class="materials">
                @include('lk.custom.materials.mat-links')
                <div class="matrials-container">
                    <div class="courses">
                        <div class="courseModal">
                            <div tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true" class="modal fade">
                                <div role="document" class="modal-dialog addCourse-modal-label">
                                    <div class="modal-content">
                                        <div class="addCourse-modal">
                                            <h2 class="addCourse-modal__header materials-modal-header">Создать курс</h2>
                                            <div class="addCourse-modal__form">
                                                <div class="addCourse-modal__form-block">
                                                    <span class="materials-modal-small-header">Название:</span>
                                                    <input type="text" id="course-title" placeholder="Название курса" class="materials-modal-input">
                                                </div>
                                                <div class="addPicture-modal__form-block">
                                                    <span class="materials-modal-small-header">Описание:</span>
                                                    <textarea type="text" id="picture-desc" placeholder="Описание курса" class="materials-modal-textarea">
                                                    </textarea>
                                                </div>
                                                <div class="addCourse-modal__form-block">
                                                    <span class="materials-modal-small-header">Теги:</span>
                                                    <div class="tags">
                                                        <div class="modal-tags-field d-flex">
                                                            <input placeholder="Введите тег" class="materials-modal-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="addCourse-modal-graph">
                                                <div class="graph">
                                                    <div class="graph-object">
                                                        <div id="graph-container" class="d-flex" style="flex-wrap: wrap;">
                                                            <div id="graph-parent-block" style="display: none;">
                                                                <div id="graph" class="graph-block white-block d-flex flex-jc-sb">
                                                                    <div id="draggable" class="graph-block__text">
                                                                        <span class="graph-block__text-header heading"></span>
                                                                        <a href="" class="graph-block__text-details">Подробнее</a>
                                                                    </div>
                                                                    <a href="#" class="graph-block__settings">
                                                                        <img src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f" alt="settings">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="addCourse-modal-footer">
                                                <div class="modal-footer__container d-flex flex-jc-sb">
                                                    <div class="footer-block">
                                                        <img src="/images/calendar&amp;timer.svg?cc01e223943832a4d391430aa243a1b0">
                                                        <span class="heading">Заданий: 2</span>
                                                    </div>
                                                    <div class="footer-block">
                                                        <img src="/images/book.svg?52105a925d38a97afccc1f8f19f59af7">
                                                        <span class="heading">Занятий: 2</span>
                                                    </div>
                                                    <div class="footer-block">
                                                        <img src="/images/timer.svg?b43dfe42871e3f7bbac42fc0da8be56d">
                                                        <span class="heading">Времени: 2</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="addCourse-modal-bottom materials-modal-bottom-btn">
                                                <div class="black-btn">Добавить</div>
                                                <div onclick="$(function () {$('#addCourseModal').modal('hide')});" class="white-btn">Отмена</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="courses-title heading">Курсы</h3>
                        <div class="courses-container d-flex">
                            <a data-v-3b1c1c67="" class="course-block-add">
                                <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
                                <span class="heading">Добавить курс</span>
                            </a>
                        </div>
                    </div>

                    <div class="files">

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('front/js/lk-main.js') }}"></script>
@endsection

