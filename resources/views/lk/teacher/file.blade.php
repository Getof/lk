@extends('lk.layouts.lk')

@section('main')
    <main class="main">
        <div class="main-container">
            <section class="content">
                <div  class="materials">
                    <div  class="materials-links">
                        <div  data-v-1149683b="" class="flow_links">
                            <div  class="flow_links-menu white-block">
                                <a href="#/materials/courses" class="flow_links-menu__btn black-btn">
                                    <span class="flow_links-menu__btn-text">Курсы (0)</span>
                                </a>
                                <a
                                    data-v-5e47088c="" href="#/materials/topics" class="flow_links-menu__btn black-btn"><span
                                        data-v-5e47088c="" class="flow_links-menu__btn-text">Темы (1)</span></a><a
                                    data-v-5e47088c="" href="#/materials/classes"
                                    class="flow_links-menu__btn black-btn"><span data-v-5e47088c=""
                                                                                 class="flow_links-menu__btn-text">Занятия (11)</span></a><a
                                    data-v-5e47088c="" href="#/materials/tasks"
                                    class="flow_links-menu__btn black-btn"><span data-v-5e47088c=""
                                                                                 class="flow_links-menu__btn-text">Задания (26)</span></a><a
                                    data-v-5e47088c="" href="#/materials/links"
                                    class="flow_links-menu__btn black-btn"><span data-v-5e47088c=""
                                                                                 class="flow_links-menu__btn-text">Ссылки (6)</span></a><a
                                    data-v-5e47088c="" href="#/materials/pictures"
                                    class="flow_links-menu__btn black-btn"><span data-v-5e47088c=""
                                                                                 class="flow_links-menu__btn-text">Картинки (13)</span></a><a
                                    data-v-5e47088c="" href="#/materials/files"
                                    class="flow_links-menu__btn black-btn router-link-exact-active flow_links-menu__btn-active"><span
                                        data-v-5e47088c="" class="flow_links-menu__btn-text">Файлы (32)</span></a></div>
                        </div>
                    </div>
                    <div data-v-1149683b="" class="matrials-container">
                        <div data-v-70c9d566="" data-v-1149683b="" class="files">
                            <div data-v-b2c97660="" data-v-70c9d566="" class="fileModal">
                                <div data-v-b2c97660="" id="addFileModal" tabindex="-1" role="dialog"
                                     aria-labelledby="addFileModalLabel" class="modal fade" style="display: none;"
                                     aria-hidden="true">
                                    <div data-v-b2c97660="" role="document" class="modal-dialog addFile-modal-label">
                                        <div data-v-b2c97660="" class="modal-content">
                                            <div data-v-b2c97660="" class="addFile-modal"><h2 data-v-b2c97660=""
                                                                                              class="addFile-modal__header materials-modal-header">
                                                    Добавить файл</h2>
                                                <div data-v-b2c97660="" class="addFile-modal__form">
                                                    <div data-v-b2c97660="" class="addFile-modal__form-block"><span
                                                            data-v-b2c97660="" class="materials-modal-small-header">Название:</span>
                                                        <input data-v-b2c97660="" type="text" id="file-name"
                                                               placeholder="Название материала"
                                                               class="materials-modal-input"></div>
                                                    <div data-v-b2c97660="" class="addFile-modal__form-block"><span
                                                            data-v-b2c97660="" class="materials-modal-small-header">Файл:</span>
                                                        <input data-v-b2c97660="" type="file"
                                                               class="materials-modal-file"></div>
                                                    <div data-v-b2c97660="" class="addFile-modal__form-block"><span
                                                            data-v-b2c97660="" class="materials-modal-small-header">Теги:</span>
                                                        <div data-v-4784386d="" data-v-b2c97660="" class="tags">
                                                            <div data-v-4784386d="" class="modal-tags-field d-flex">
                                                                <div data-v-4784386d="">
                                                                    <div data-v-4784386d="" class="tag d-flex"><span
                                                                            data-v-4784386d="" class="text">лор</span>
                                                                        <span data-v-4784386d="" class="remove">X</span>
                                                                    </div>
                                                                </div>
                                                                <div data-v-4784386d="">
                                                                    <div data-v-4784386d="" class="tag d-flex"><span
                                                                            data-v-4784386d="" class="text">ор</span>
                                                                        <span data-v-4784386d="" class="remove">X</span>
                                                                    </div>
                                                                </div>
                                                                <div data-v-4784386d="">
                                                                    <div data-v-4784386d="" class="tag d-flex"><span
                                                                            data-v-4784386d="" class="text">ло</span>
                                                                        <span data-v-4784386d="" class="remove">X</span>
                                                                    </div>
                                                                </div>
                                                                <input data-v-4784386d="" placeholder="Введите тег"
                                                                       class="materials-modal-input"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-b2c97660=""
                                                     class="addFile-modal-bottom materials-modal-bottom-btn">
                                                    <div data-v-b2c97660="" class="black-btn">Добавить</div>
                                                    <div data-v-b2c97660=""
                                                         onclick="$(function () {$('#addFileModal').modal('hide')});"
                                                         class="white-btn">Отмена
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-248a8f74="" data-v-70c9d566="" class="fileEditModal">
                                <div data-v-248a8f74="" id="editFileModal" tabindex="-1" role="dialog"
                                     aria-labelledby="editFileModalLabel" class="modal fade" style="display: none;"
                                     aria-hidden="true">
                                    <div data-v-248a8f74="" role="document" class="modal-dialog editFile-modal-label">
                                        <div data-v-248a8f74="" class="modal-content">
                                            <div data-v-248a8f74="" class="editFile-modal"><h2 data-v-248a8f74=""
                                                                                               class="editFile-modal__header materials-modal-header">
                                                    Редактировать файл</h2>
                                                <div data-v-248a8f74="" class="editFile-modal__form">
                                                    <div data-v-248a8f74="" class="editFile-modal__form-block"><span
                                                            data-v-248a8f74="" class="materials-modal-small-header">Название:</span>
                                                        <input data-v-248a8f74="" type="text" id="file-edit-title"
                                                               placeholder="Инструкция.pdf"
                                                               class="materials-modal-input"></div>
                                                    <div data-v-248a8f74="" class="editFile-modal__form-block"><span
                                                            data-v-248a8f74="" class="materials-modal-small-header">Описание:</span>
                                                        <textarea data-v-248a8f74="" type="text" id="file-edit-desc"
                                                                  placeholder="Инструкция"
                                                                  class="materials-modal-textarea"></textarea></div>
                                                    <div data-v-248a8f74="" class="editFile-modal__form-block"><span
                                                            data-v-248a8f74="" class="materials-modal-small-header">Теги:</span>
                                                        <div data-v-4784386d="" data-v-248a8f74="" class="tags">
                                                            <div data-v-4784386d="" class="modal-tags-field d-flex">
                                                                <div data-v-4784386d="">
                                                                    <div data-v-4784386d="" class="tag d-flex"><span
                                                                            data-v-4784386d=""
                                                                            class="text">8.5.2020</span> <span
                                                                            data-v-4784386d="" class="remove">X</span>
                                                                    </div>
                                                                </div>
                                                                <input data-v-4784386d="" placeholder="Введите тег"
                                                                       class="materials-modal-input"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-248a8f74=""
                                                     class="editFile-modal-bottom materials-modal-bottom-btn">
                                                    <div data-v-248a8f74="" class="black-btn">Сохранить</div>
                                                    <div data-v-248a8f74=""
                                                         onclick="$(function () {$('#editFileModal').modal('hide')});"
                                                         class="white-btn">Отмена
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 data-v-70c9d566="" class="files-title heading">Файлы</h3>
                            <div data-v-70c9d566="" class="files-container d-flex">
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Тестовый файл</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Тест</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">fff</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">tetst</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">tetst</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">ffff</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">testff</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">test</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">test</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efef</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efef</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">ddd</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">d</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">d</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">f</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">ff</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">d</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                15.030 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">в</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Тест отчёт</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                15.030 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">уауа</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">dd</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Тест файл</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                15.293 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">ww</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">wdwdaw</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/txt.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">wdwdaw</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                0.865 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efe</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                14.145 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efe</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                14.145 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efe</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                14.145 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/docx.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">efe</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                14.145 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/doc.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Test2</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                425.142 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/doc.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566="" class="text-header heading">Test2</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                425.142 кб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <div data-v-70c9d566="" class="files-block white-block d-flex flex-jc-sb">
                                    <div data-v-70c9d566="" class="files-block__text d-flex"><img data-v-70c9d566=""
                                                                                                  src="http://macfort-test.ru/storage/files/types/pdf.svg"
                                                                                                  alt="file_type"
                                                                                                  class="files-block__text-img heading">
                                        <div data-v-70c9d566="" class="file-block__text-container"><span
                                                data-v-70c9d566=""
                                                class="text-header heading">Тестовый файл.pdf</span><br
                                                data-v-70c9d566=""> <a data-v-70c9d566="" href="" class="text-details">Размер:
                                                953.674 мб</a></div>
                                    </div>
                                    <a data-v-70c9d566="" class="files-block__settings"><img data-v-70c9d566=""
                                                                                             src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f"
                                                                                             alt="settings"></a></div>
                                <a data-v-70c9d566="" class="course-block-add"><img data-v-70c9d566=""
                                                                                    src="/images/plus.svg?a98786dd2df5b30fb79d14b527a32d93"
                                                                                    alt="plus"> <span data-v-70c9d566=""
                                                                                                      class="heading">Добавить файл</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>








@endsection
