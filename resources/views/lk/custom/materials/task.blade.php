<h3 class="tasks-title heading">Задания</h3>
<div class="tasks-container d-flex">
    @foreach($files as $file)
        <div class="tasks-block white-block d-flex flex-jc-sb">
            <div class="tasks-block__text-header__span-container d-flex">
                <span class="tasks-block__text-header__span">Химия</span>
                <span class="tasks-block__text-header__span-id">Задание №1</span>
            </div>
            <a id="{{$file->id}}" onclick="modalShow(this, '{{$file->name}}', '{{$file->description}}')" class="files-block__settings">
                <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings">
            </a>
        </div>
    @endforeach
    <a onclick="$(function () {$('#addFileModal').modal('show')});" class="tasks-block-add">
        <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
        <span class="heading">Добавить файл</span>
    </a>
</div>
