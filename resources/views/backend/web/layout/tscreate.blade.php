@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Создание статьи</h2>
        <hr>
        <form action="{{route('admin.tasks.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('backend.web.layout.partial.tsform')
        </form>
    </div>


@endsection
