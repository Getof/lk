@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Редактирование слайда</h2>
        <hr>

        <form action="{{route('admin.tasks.update', $task->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('backend.web.layout.partial.tsformup')
        </form>



    </div>


@endsection
