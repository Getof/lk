@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Редактирование слайда</h2>
        <hr>

        <form action="{{route('admin.slides.update', $slide->id)}}" method="post">
            @method('PUT')
            @csrf
            @include('backend.web.layout.partial.formup')
        </form>



    </div>


@endsection
