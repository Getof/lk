@extends('lk.layouts.lk')

@section('main')
<main class="main">
    <div class="main-container">
        <section class="content">
            <div class="materials">
                @include('lk.custom.materials.mat-links')
                <div class="matrials-container">
{{--                    <div class="courses">--}}
{{--                        <div class="courseModal">--}}
{{--                            <div tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true" class="modal fade">--}}
{{--                                <div role="document" class="modal-dialog addCourse-modal-label">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="addCourse-modal">--}}
{{--                                            <h2 class="addCourse-modal__header materials-modal-header">Создать курс</h2>--}}
{{--                                            <div class="addCourse-modal__form">--}}
{{--                                                <div class="addCourse-modal__form-block">--}}
{{--                                                    <span class="materials-modal-small-header">Название:</span>--}}
{{--                                                    <input type="text" id="course-title" placeholder="Название курса" class="materials-modal-input">--}}
{{--                                                </div>--}}
{{--                                                <div class="addPicture-modal__form-block">--}}
{{--                                                    <span class="materials-modal-small-header">Описание:</span>--}}
{{--                                                    <textarea type="text" id="picture-desc" placeholder="Описание курса" class="materials-modal-textarea">--}}
{{--                                                    </textarea>--}}
{{--                                                </div>--}}
{{--                                                <div class="addCourse-modal__form-block">--}}
{{--                                                    <span class="materials-modal-small-header">Теги:</span>--}}
{{--                                                    <div class="tags">--}}
{{--                                                        <div class="modal-tags-field d-flex">--}}
{{--                                                            <input placeholder="Введите тег" class="materials-modal-input">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="addCourse-modal-graph">--}}
{{--                                                <div class="graph">--}}
{{--                                                    <div class="graph-object">--}}
{{--                                                        <div id="graph-container" class="d-flex" style="flex-wrap: wrap;">--}}
{{--                                                            <div id="graph-parent-block" style="display: none;">--}}
{{--                                                                <div id="graph" class="graph-block white-block d-flex flex-jc-sb">--}}
{{--                                                                    <div id="draggable" class="graph-block__text">--}}
{{--                                                                        <span class="graph-block__text-header heading"></span>--}}
{{--                                                                        <a href="" class="graph-block__text-details">Подробнее</a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a href="#" class="graph-block__settings">--}}
{{--                                                                        <img src="/images/gray_settings.svg?377155e4dd1e96bca803d4b20416029f" alt="settings">--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="addCourse-modal-footer">--}}
{{--                                                <div class="modal-footer__container d-flex flex-jc-sb">--}}
{{--                                                    <div class="footer-block">--}}
{{--                                                        <img src="/images/calendar&amp;timer.svg?cc01e223943832a4d391430aa243a1b0">--}}
{{--                                                        <span class="heading">Заданий: 2</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="footer-block">--}}
{{--                                                        <img src="/images/book.svg?52105a925d38a97afccc1f8f19f59af7">--}}
{{--                                                        <span class="heading">Занятий: 2</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="footer-block">--}}
{{--                                                        <img src="/images/timer.svg?b43dfe42871e3f7bbac42fc0da8be56d">--}}
{{--                                                        <span class="heading">Времени: 2</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="addCourse-modal-bottom materials-modal-bottom-btn">--}}
{{--                                                <div class="black-btn">Добавить</div>--}}
{{--                                                <div onclick="$(function () {$('#addCourseModal').modal('hide')});" class="white-btn">Отмена</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-title heading">Курсы</h3>--}}
{{--                        <div class="courses-container d-flex">--}}
{{--                            <a data-v-3b1c1c67="" class="course-block-add">--}}
{{--                                <img src="{{ asset('front/img/lk/plus.svg') }}" alt="plus">--}}
{{--                                <span class="heading">Добавить курс</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="files">--}}

{{--                    </div>--}}
                </div>
            </div>
        </section>
    </div>
</main>
@endsection

@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var id_file = '';
        var nm_file = '';
        var nm_desc = '';
        var id_pict = '';
        var nm_pict = '';
        var pict_desc = '';
        var id_link = '';
        var nm_link = '';
        var url_link = '';
        $(document).ready(function () {
            $('.matrials-container').html('');

            $('.flow_links-menu__btn').click(function () {
                $('.flow_links-menu__btn').removeClass('flow_links-menu__btn-active');
                $(this).addClass('flow_links-menu__btn-active');
                linksMat = $(this).attr('id');

                $.ajax({
                    type: 'GET',
                    url: 'material/'+linksMat,
                    data: '',
                    cache: false,
                    success: function (data) {
                        $('.matrials-container').html(data);
                    }
                });

            });

            // $('.flow_links').draggable({
            //     axis: "x",
            //     stop: function() {
            //         if($(this).position().left > 1 || $(this).position().left < -800)
            //             $(this).css("left", "10px");
            //     }
            // });

        });

        function modalShow(param, nm, desc){
            nm_file = nm;
            nm_desc = desc;
            id_file = $(param).attr('id');
            $('#editFileModal').modal('show');
            $('#editFileModal').on('shown.bs.modal', function (e) {
                var modal = $(this);
                modal.find('#file-edit-title').val(nm_file);
                modal.find('#file-edit-desc').val(nm_desc);
            });
        }


        function addFile(){
            let nameF = document.getElementById('file-name').value;
            let pathF = document.getElementById('file-path');
            var formData = new FormData();
            formData.append('name',nameF);
            formData.append('file', pathF.files[0]);
                $.ajax({
                    type: "post",
                    url: 'material/files/add', // need to create this post route
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('#addFileModal').modal('hide');
                        $('#addFileModal').on('hidden.bs.modal', function (e) {
                            $('.matrials-container').html(data);
                        });

                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                    }
                });
        }

        function editFile() {
            let idF = id_file;
            let nameF = document.getElementById('file-edit-title').value;
            let descF = document.getElementById('file-edit-desc').value;
            var formData = new FormData();
            formData.append('id', idF);
            formData.append('name', nameF);
            formData.append('desc', descF);
            $.ajax({
                type: "post",
                url: 'material/files/edit', // need to create this post route
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#editFileModal').modal('hide');
                    $('#editFileModal').on('hidden.bs.modal', function (e) {
                        $('.matrials-container').html(data);
                    });

                },
                error: function (jqXHR, status, err) {
                },
                complete: function () {
                }
            });
        }

        function modalEditShow(param, nm, desc){
            nm_pict = nm;
            pict_desc = desc;
            id_pict = $(param).attr('id');
            $('#editPictureModal').modal('show');
            $('#editPictureModal').on('shown.bs.modal', function (e) {
                var modal = $(this);
                modal.find('#picture-edit-title').val(nm_pict);
                modal.find('#picture-edit-desc').val(pict_desc);
            });
        }

        function showPicture(param, title) {
            let url = $(param).attr('src');
            $('#showPictureModal img').attr('src', url);
            $('#showPictureModal').modal('show');
            $('#showPictureModal').on('shown.bs.modal', function (e) {
                var modal = $(this);
                modal.find('#title').text(title);
            });
        }

        function addPicture(){
            let nameF = document.getElementById('picture-title').value;
            let descF = document.getElementById('picture-desc').value;
            let pathF = document.getElementById('picture-file');
            var formData = new FormData();
            formData.append('name',nameF);
            formData.append('desc',descF);
            formData.append('file', pathF.files[0]);
            $.ajax({
                type: "post",
                url: 'material/pictures/add', // need to create this post route
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#addPictureModal').modal('hide');
                    $('#addPictureModal').on('hidden.bs.modal', function (e) {
                        $('.matrials-container').html(data);
                    });

                },
                error: function (jqXHR, status, err) {
                },
                complete: function () {
                }
            });
        }

        function editPict() {
            let idP = id_pict;
            let nameP = document.getElementById('picture-edit-title').value;
            let descP = document.getElementById('picture-edit-desc').value;
            var formData = new FormData();
            formData.append('id', idP);
            formData.append('name', nameP);
            formData.append('desc', descP);
            $.ajax({
                type: "post",
                url: 'material/pictures/edit', // need to create this post route
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#editPictureModal').modal('hide');
                    $('#editPictureModal').on('hidden.bs.modal', function (e) {
                        $('.matrials-container').html(data);
                    });

                },
                error: function (jqXHR, status, err) {
                },
                complete: function () {
                }
            });
        }

        function modalLinkShow(param, nm, lnk){
            nm_link = nm;
            url_link = lnk;
            id_link = $(param).attr('id');
            $('#editLinkModal').modal('show');
            $('#editLinkModal').on('shown.bs.modal', function (e) {
                var modal = $(this);
                modal.find('#link-edit-title').val(nm_link);
                modal.find('#link-edit-url').val(url_link);
            });
        }

        function addLink() {
            let nameL = document.getElementById('link-name').value;
            let urlL = document.getElementById('link-url').value;
            var formData = new FormData();
            formData.append('name',nameL);
            formData.append('link',urlL);
            $.ajax({
                type: "post",
                url: 'material/links/add', // need to create this post route
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#addLinkModal').modal('hide');
                    $('#addLinkModal').on('hidden.bs.modal', function (e) {
                        $('.matrials-container').html(data);
                    });

                },
                error: function (jqXHR, status, err) {
                },
                complete: function () {
                }
            });

        }

        function editLink() {
            let idL = id_link;
            let nameL = document.getElementById('link-edit-title').value;
            let urlL = document.getElementById('link-edit-url').value;
            var formData = new FormData();
            formData.append('id', idL);
            formData.append('name', nameL);
            formData.append('link', urlL);
            $.ajax({
                type: "post",
                url: 'material/links/edit', // need to create this post route
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#editLinkModal').modal('hide');
                    $('#editLinkModal').on('hidden.bs.modal', function (e) {
                        $('.matrials-container').html(data);
                    });

                },
                error: function (jqXHR, status, err) {
                },
                complete: function () {
                }
            });
        }
    </script>
@endsection

