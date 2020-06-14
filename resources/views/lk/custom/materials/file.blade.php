<div class="fileModal">
    <div id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="addFileModalLabel" class="modal fade" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog addFile-modal-label">
            <div class="modal-content">
                <form class="addFile-modal">
                    <h2 class="addFile-modal__header materials-modal-header">Добавить файл</h2>

                    <form id="addFileForm" action="{{route('teacher.file.add')}}" method="post" enctype="multipart/form-data" class="addFile-modal__form">
                        <div class="addFile-modal__form-block">
                            <span class="materials-modal-small-header">Название:</span>
                            <input type="text" id="file-name" placeholder="Название материала" class="materials-modal-input">
                        </div>
                        <div class="addFile-modal__form-block">
                            <span class="materials-modal-small-header">Файл:</span>
                            <input type="file" id="file-path" class="materials-modal-file">
                        </div>
                        <div class="addFile-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <div>
                                        <div class="tag d-flex">
                                            <span class="text">лор</span>
                                            <span class="remove">X</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tag d-flex">
                                            <span class="text">ор</span>
                                            <span class="remove">X</span>
                                        </div>
                                    </div>
                                    <input placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div  class="addFile-modal-bottom materials-modal-bottom-btn">
                        <div type="submit" onclick="addFile()" class="black-btn">Добавить</div>
                        <div onclick="$(function () {$('#addFileModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fileEditModal">
    <div id="editFileModal" tabindex="-1" role="dialog" aria-labelledby="editFileModalLabel" class="modal fade" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog editFile-modal-label">
            <div class="modal-content">
                <div class="editFile-modal">
                    <h2 class="editFile-modal__header materials-modal-header">Редактировать файл</h2>
                    <div class="editFile-modal__form">
                        <div class="editFile-modal__form-block">
                            <span class="materials-modal-small-header">Название:</span>
                            <input type="text" id="file-edit-title" placeholder="Инструкция.pdf" class="materials-modal-input">
                        </div>
                        <div class="editFile-modal__form-block">
                            <span class="materials-modal-small-header">Описание:</span>
                            <textarea type="text" id="file-edit-desc" placeholder="Инструкция" class="materials-modal-textarea"></textarea>
                        </div>
                        <div class="editFile-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <div>
                                        <div class="tag d-flex">
                                            <span class="text">8.5.2020</span>
                                            <span class="remove">X</span>
                                        </div>
                                    </div>
                                    <input placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editFile-modal-bottom materials-modal-bottom-btn">
                        <div class="black-btn">Сохранить</div>
                        <div onclick="$(function () {$('#editFileModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="files-title heading">Файлы</h3>
<div class="files-container d-flex">
    @foreach($files as $file)
    <div class="files-block white-block d-flex flex-jc-sb">
        <div class="files-block__text d-flex">
            <img src="{{ asset('front/img/lk/'.$file->ext_img.'.svg') }}" alt="file_type" class="files-block__text-img heading">
            <div class="file-block__text-container">
                <span class="text-header heading">{{$file->name}}</span>
                <br>
                <a href="" class="text-details">Размер: 0.865 кб</a>
            </div>
        </div>
        <a onclick="$(function () {$('#editFileModal').modal('show')});" class="files-block__settings">
            <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings">
        </a>
    </div>
    @endforeach
    <a onclick="$(function () {$('#addFileModal').modal('show')});" class="course-block-add">
        <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
        <span class="heading">Добавить файл</span>
    </a>
</div>
