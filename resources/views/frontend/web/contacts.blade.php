@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/contacts.css') }}">
@endsection

@section('main')

<main class="main">
    <div class="container">
        <div class="main-contacts">
            <h2 class="main-contacts__header">Контакты</h2>
            <div class="main-contacts__blocks d-flex flex-jc-sb">
                <div class="contacts-service__block d-flex ">
                    <div class="contacts-service__block-image">
                        <img src="{{ asset('front/img/contacts/tel.svg') }}" alt="tel">
                    </div>
                    <div class="contacts-service__block-info">
                        <span class="block-info__header">Телефон:</span>
                        <span class="block-info__text">
								+7 (999) 123 45 67
							</span>
                    </div>
                </div>
                <div class="contacts-service__block d-flex">
                    <div class="contacts-service__block-image">
                        <img src="{{ asset('front/img/contacts/email.svg') }}" alt="tel">
                    </div>
                    <div class="contacts-service__block-info">
                        <span class="block-info__header">Email:</span>
                        <span class="block-info__text">
								Info@Tutors.com
							</span>
                    </div>
                </div>
                <div class="contacts-service__block d-flex">
                    <div class="contacts-service__block-image">
                        <img src="{{ asset('front/img/contacts/skype.svg') }}" alt="tel">
                    </div>
                    <div class="contacts-service__block-info">
                        <span class="block-info__header">Skype:</span>
                        <span class="block-info__text">
								Info@Tutors.com
							</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-contact-form">
            <div class="main-contact-form__header">Задать вопрос</div>
            <div class="main-contact-form__inputs">
                <form class="question-form d-flex flex-jc-sb" id="contactform">
                    @csrf

                    <input type="text" class="question-form__name" name="name" placeholder="Имя" required>
                    <input type="tel" class="question-form__tel" name="tel" placeholder="+7 (___) ___-__-__" required>
                    <textarea class="question-form__textarea" name="question" placeholder="Задайте вопрос..."></textarea>
                    <div class="question-form__submit-container">
                        <input type="submit" class="question-form__submit" value="Отправить">
                    </div>
                </form>
            </div>
            <div id="sendmessage">
                Ваше сообщение отправлено!
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#contactform').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '{{route('contacts.store')}}',
                    data: $('#contactform').serialize(),
                    success: function (data) {
                        console.log(data.result);
                        if (data.result) {
                            $('#senderror').hide();
                            $('#sendmessage').show();
                        } else {
                            $('#senderror').show();
                            $('#sendmessage').hide();
                        }

                    },
                    error: function () {

                    }
                });
            });
        });
    </script>
@endsection
