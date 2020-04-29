@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Создание слайда</h2>
        <hr>
        <form action="{{route('admin.slides.store')}}" method="post">
            {{csrf_field()}}
            @include('backend.web.layout.partial.form')
        </form>
    </div>


@endsection
