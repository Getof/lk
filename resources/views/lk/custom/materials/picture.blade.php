<div class="pictureShowModal">
    <div id="showPictureModal" tabindex="-1" role="dialog" aria-labelledby="showPictureModalLabel" class="modal fade" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog showPicture-modal-label">
            <div class="modal-content">
                <div class="showPicture-modal">
                    <img id="showPicture" class="showPicture-modal__img" alt="test" src="">
                    <div class="showPicture-modal-text">
                        <h4 id="title" class="modal-text__title"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pictureModal">
    <div id="addPictureModal" tabindex="-1" role="dialog" aria-labelledby="addPictureModalLabel" class="modal fade" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog addPicture-modal-label">
            <div class="modal-content">
                <div class="addPicture-modal">
                    <h2 class="addPicture-modal__header materials-modal-header">Добавить картинку</h2>
                    <div class="addPicture-modal__form">
                        <div class="addPicture-modal__form-block">
                            <span  class="materials-modal-small-header">Название:</span>
                            <input type="text" id="picture-title" placeholder="Название материала" class="materials-modal-input">
                        </div>
                        <div class="addPicture-modal__form-block">
                            <span class="materials-modal-small-header">Описание:</span>
                            <textarea type="text" id="picture-desc" placeholder="Картинка.png" class="materials-modal-textarea"></textarea>
                        </div>
                        <div class="addPicture-modal__form-block">
                            <span class="materials-modal-small-header">Загрузить картинку:</span>
                            <input type="file" id="picture-file" class="materials-modal-file" accept=".jpg, .png">
                        </div>
{{--                        <div class="addPicture-modal__form-block">--}}
{{--                            <span class="materials-modal-small-header">Ссылка на картинку:</span>--}}
{{--                            <input type="text" id="picture-url" placeholder="www.example.com/Картинка.png" class="materials-modal-input">--}}
{{--                        </div>--}}
                        <div class="addPicture-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <input  placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="addPicture-modal-bottom materials-modal-bottom-btn">
                        <div onclick="addPicture()" class="black-btn">Добавить</div>
                        <div onclick="$(function () {$('#addPictureModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pictureEditModal">
    <div id="editPictureModal" tabindex="-1" role="dialog" aria-labelledby="editPictureModalLabel" class="modal fade" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog editPicture-modal-label">
            <div class="modal-content">
                <div class="editPicture-modal">
                    <h2 class="editPicture-modal__header materials-modal-header">Редактировать картинку</h2>
                    <div class="editPicture-modal__form">
                        <div class="editPicture-modal__form-block">
                            <span class="materials-modal-small-header">Название:</span>
                            <input type="text" id="picture-edit-title" placeholder="Название материала" class="materials-modal-input">
                        </div>
                        <div class="editPicture-modal__form-block">
                            <span class="materials-modal-small-header">Описание:</span>
                            <textarea type="text" id="picture-edit-desc" placeholder="Картинка.png" class="materials-modal-textarea"></textarea>
                        </div>
                        <div class="editPicture-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <div>
                                        <div class="tag d-flex">
                                            <span class="text">test</span>
                                            <span class="remove">X</span>
                                        </div>
                                    </div>
                                    <input placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editPicture-modal-bottom materials-modal-bottom-btn">
                        <div onclick="editPict()" class="black-btn">Сохранить</div>
                        <div onclick="$(function () {$('#editPictureModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h3 class="pictures-title heading">Картинки</h3>
<div class="pictures-container slider">
    @foreach($pictures as $pict)
    <div class="pictures-block white-block">
        <img alt="test" src="{{ asset('/upload/matfiles/'.$pict->img_name) }}" onclick="showPicture(this, '{{$pict->name}}')" class="pictures-block__img">
        <div class="pictures-block__text-container d-flex flex-jc-sb">
            <span class="pictures-block__text-span heading">{{$pict->name}}</span>
            <img id="{{$pict->id}}" onclick="modalEditShow(this, '{{$pict->name}}', '{{$pict->description}}')" src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings" class="pictures-block__text-settings">
        </div>
    </div>
    @endforeach

    <a onclick="$(function () {$('#addPictureModal').modal('show')});" class="pictures-block-add">
        <div class="pictures-block-add-container">
            <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
            <span class="heading">Добавить картинку</span>
        </div>
    </a>
</div>
