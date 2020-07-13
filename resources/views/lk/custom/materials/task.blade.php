<div class="tasks">
    <div class="taskModal">
        <div class="materialModal">
            <div id="materialModal" tabindex="-1" role="dialog" aria-labelledby="materialModalLabel" aria-hidden="true"
                 class="modal fade">
                <div role="document" class="modal-dialog material-modal-label">
                    <div class="modal-content">
                        <div class="material-modal">
                            <h2 class="material-modal__header materials-modal-header">Добавить</h2>
                            <div class="material-modal__search materials-modal-input d-flex flex-jc-sb">
                                <input id="material-modal-search" placeholder="Поиск по тегу...">
                                <img src="{{ asset('front/img/lk/search.svg') }}">
                            </div>
                            <div class="material-modal__items materials-modal-input"></div>
                            <div class="material-modal-bottom materials-modal-bottom-btn">
                                <div class="black-btn">Сохранить</div>
                                <div class="white-btn">Отмена</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true"
             class="modal fade">
            <div role="document" class="modal-dialog addTask-modal-label">
                <div class="modal-content">
                    <div class="addTask-modal">
                        <h2 class="addTask-modal__header materials-modal-header">Добавить задание</h2>
                        <div class="addTask-modal__form">
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Название задания:</span>
                                <input type="text" id="task-title" placeholder="Химические элементы"
                                       class="materials-modal-input"></div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Условие:</span>
                                <div class="materials-modal-block-divided">
                                    <input type="text" id="task-criterion" placeholder="Краткое условие задания"
                                           class="materials-modal-input">
                                    <div class="materials-modal-material">
                                        <img src="{{ asset('front/img/lk/clip.svg') }}">
                                        <span>Добавить файлы</span>
                                    </div>
                                </div>
                            </div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Подсказка:</span>
                                <div class="materials-modal-block-divided">
                                    <input type="text" id="task-tips" placeholder="Краткое условие задания"
                                           class="materials-modal-input">
                                    <div class="materials-modal-material">
                                        <img src="{{ asset('front/img/lk/clip.svg') }}">
                                        <span>Добавить файлы</span>
                                    </div>
                                </div>
                            </div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Решение:</span>
                                <div class="materials-modal-block-divided">
                                    <input type="text" id="task-answers" placeholder="Краткое описание"
                                           class="materials-modal-input">
                                    <div class="materials-modal-material">
                                        <img src="{{ asset('front/img/lk/clip.svg') }}">
                                        <span>Добавить файлы</span>
                                    </div>
                                </div>
                            </div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Материалы:</span>
                                <div class="materials">
                                    <div class="modal-materials-field d-flex flex-jc-sb">
                                        <div class="materials-container d-flex"></div>
                                        <div class="add d-flex">
                                            <img src="{{ asset('front/img/lk/plus.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Количество минут на решение:</span>
                                <input type="text" id="task-time" placeholder="120" class="materials-modal-input">
                            </div>
                            <div class="addTask-modal__form-block">
                                <span class="materials-modal-small-header">Теги:</span>
                                <div class="tags">
                                    <div class="modal-tags-field d-flex">
                                        <input placeholder="Введите тег" class="materials-modal-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="addTask-modal-bottom materials-modal-bottom-btn">
                            <div class="black-btn">Добавить</div>
                            <div onclick="$(function () {$('#addTaskModal').modal('hide')});" class="white-btn">Отмена
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h3 class="tasks-title heading">Задания</h3>
    <div class="tasks-container d-flex">
        @foreach($tasks as $task)
        <div class="tasks-block white-block">
            <div class="tasks-block__text-header d-flex flex-jc-sb">
                <div class="tasks-block__text-header__span-container"><span
                        class="tasks-block__text-header__span heading">s</span> <span
                        class="tasks-block__text-header__span-id heading">Задание №2</span></div>
                <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings"
                     class="tasks-block__text-header__img"></div>
            <hr class="tasks-block__line">
            <span class="tasks-block__desc-header">Задание: </span>
            <span class="tasks-block__desc">s</span> <br>
            <a class="tasks-block__details">Подробнее</a>
        </div>
        @endforeach
    </div>

{{--    <h3 class="tasks-title heading">Задания</h3>--}}
{{--    <div class="tasks-container d-flex">--}}
{{--        @foreach($tasks as $task)--}}
{{--            <div class="tasks-block white-block d-flex flex-jc-sb">--}}
{{--                <div class="tasks-block__text-header__span-container d-flex">--}}
{{--                    <span class="tasks-block__text-header__span">Химия</span>--}}
{{--                    <span class="tasks-block__text-header__span-id">Задание №1</span>--}}
{{--                </div>--}}
{{--                <a id="{{$task->id}}" onclick="modalShow(this, '{{$task->name}}', '{{$task->description}}')"--}}
{{--                   class="files-block__settings">--}}
{{--                    <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
        <a onclick="$(function () {$('#addTaskModal').modal('show')});" class="tasks-block-add d-flex">
            <div class="task-block-add-container">
                <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
                <span class="heading">Добавить задание</span>
            </div>
        </a>
    </div>
