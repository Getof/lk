<div class="linkModal">
    <div id="addLinkModal" tabindex="-1" role="dialog" aria-labelledby="addLinkModalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog addLink-modal-label">
            <div class="modal-content">
                <div class="addLink-modal">
                    <h2 class="addLink-modal__header materials-modal-header">Добавить ссылку</h2>
                    <div class="addLink-modal__form">
                        <div class="addLink-modal__form-block">
                            <span class="materials-modal-small-header">Название:</span>
                            <input type="text" id="link-name" placeholder="Название материала" class="materials-modal-input">
                        </div>
                        <div class="addLink-modal__form-block">
                            <span class="materials-modal-small-header">Ссылка:</span>
                            <input type="text" id="link-url" placeholder="Ссылка..." class="materials-modal-input">
                        </div>
                        <div class="addLink-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <input  placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="addLink-modal-bottom materials-modal-bottom-btn">
                        <div onclick="addLink()" class="black-btn">Добавить</div>
                        <div onclick="$(function () {$('#addLinkModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="linkEditModal">
    <div id="editLinkModal" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog editLink-modal-label">
            <div class="modal-content">
                <div class="editLink-modal">
                    <h2 class="editLink-modal__header materials-modal-header">Редактировать ссылку</h2>
                    <div class="editLink-modal__form">
                        <div class="editLink-modal__form-block">
                            <span class="materials-modal-small-header">Название:</span>
                            <input type="text" id="link-edit-title" placeholder="Wikipedia" class="materials-modal-input">
                        </div>
                        <div class="editLink-modal__form-block">
                            <span class="materials-modal-small-header">Ссылка:</span>
                            <input type="text" id="link-edit-url" placeholder="ru.wikipedia.org" class="materials-modal-input">
                        </div>
                        <div class="editLink-modal__form-block">
                            <span class="materials-modal-small-header">Теги:</span>
                            <div class="tags">
                                <div class="modal-tags-field d-flex">
                                    <input  placeholder="Введите тег" class="materials-modal-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editLink-modal-bottom materials-modal-bottom-btn">
                        <div onclick="editLink()" class="black-btn">Сохранить</div>
                        <div onclick="$(function () {$('#editLinkModal').modal('hide')});" class="white-btn">Отмена</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="links-title heading">Ссылки</h3>

<div class="links-container d-flex">
    @foreach($links as $link)
    <div class="links-block white-block d-flex flex-jc-sb">
        <div class="links-block__text">
            <span class="links-block__text-header heading">"{{$link->name}}"</span>
            <a target="_blank" href="{{$link->link}}" class="links-block__text-details">{{$link->link}}</a>
        </div>
        <a id="{{$link->id}}" onclick="modalLinkShow(this, '{{$link->name}}', '{{$link->link}}')" class="links-block__settings">
            <img src="{{ asset('front/img/lk/gray_settings.svg') }}" alt="settings">
        </a>
    </div>
    @endforeach

    <a onclick="$(function () {$('#addLinkModal').modal('show')});" class="link-block-add d-flex">
        <div class="link-block-add-container">
            <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">
            <span class="heading">Добавить ссылку</span>
        </div>
    </a>
</div>
