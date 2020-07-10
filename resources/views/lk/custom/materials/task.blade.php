<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog addTask-modal-label" role="document">
        <div class="modal-content">
            <div class="register-modal-start">
                <h2 class="addTask-modal__header materials-modal-header">Задание</h2>
                <h2 class="addTask-modal__header materials-modal-small-header-task">Id задания: </h2>
                <div class="addTask-modal__form-block">
                    <span class="materials-modal-small-header">Условие:</span>
                    <div class="d-flex flex-jc-sb">
                        <input type="text" class="addTask-modal-input" name="condition" placeholder="Условие">
                        <div class="materials-modal-file">
                                <img src="{{ asset('front/img/lk/clip.svg') }}" alt="">
                                <span>Добавить файл</span>
                        </div>
                    </div>
                </div>
                <div class="decision-modal">
                    <div class="addTask-modal__form-block">
                        <span class="materials-modal-small-header">Подсказка:</span>
                        <div class="d-flex flex-jc-sb">
                            <input type="text" class="addTask-modal-input" name="hint" placeholder="Подсказка">
                            <div class="materials-modal-file">
                                <img src="{{ asset('front/img/lk/clip.svg') }}" alt="">
                                <span>Добавить файл</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="material-modal-addField">
                    <img src="{{ asset('front/img/lk/plus-round.svg') }}" alt="">
                    <span>Добавить еще</span>
                </div>
                <div class="decision-modal">
                    <div class="addTask-modal__form-block">
                        <span class="materials-modal-small-header">Решение:</span>
                        <div class="d-flex flex-jc-sb">
                            <input type="text" class="addTask-modal-input" name="decision" placeholder="Решение">
                            <div class="materials-modal-file">
                                <img src="{{ asset('front/img/lk/clip.svg') }}" alt="">
                                <span>Добавить файл</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mat-modal">
                    <div class="addTask-modal__form-block">
                        <span class="materials-modal-small-header">Материалы:</span>
                        <div class="modal-tags-field">
{{--                            <input type="text" class="addTask-modal-input" name="decision" placeholder="Решение">--}}
{{--                            <div class="materials-modal-file">--}}
{{--                                <img src="{{ asset('front/img/lk/clip.svg') }}" alt="">--}}
{{--                                <span>Добавить файл</span>--}}
                            </div>
                        </div>
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


    <h3 class="tasks-title heading">Задания</h3>
<div class="tasks-container d-flex">
    @foreach($tasks as $task)
        <div class="tasks-block white-block d-flex flex-jc-sb">
            <div class="tasks-block__text-header__span-container d-flex">
                <span class="tasks-block__text-header__span">Химия</span>
                <span class="tasks-block__text-header__span-id">Задание №1</span>
            </div>
            <a id="{{$task->id}}" onclick="modalShow(this, '{{$task->name}}', '{{$task->description}}')" class="files-block__settings">
                <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings">
            </a>
        </div>
    @endforeach
    <a onclick="$(function () {$('#addTaskModal').modal('show')});" class="tasks-block-add d-flex">
        <div class="task-block-add-container">
            <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
            <span class="heading">Добавить задание</span>
        </div>
    </a>
</div>
