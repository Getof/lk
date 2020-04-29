@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Список статей блога</h2>
        <hr>
        <a href="{{ route('admin.tasks.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Создать статью</a>
        <table class="table table-striped">
            <thead>
            <th>Заголовок</th>
            <th>Текст статьи</th>
            <th>Изображение</th>
            <th>Действие</th>
            </thead>
            <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td class="text-primary">{{$task->title}}</td>
                    <td>{{$task->body}}</td>
                    <td></td>
                    <td class="text-right">
                        <form onsubmit="if (confirm('Удалить?')){return true}else{return false} " action="{{route('admin.tasks.destroy', $task->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-default" href="{{route('admin.tasks.edit', $task->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination pull-right">
                        {{$tasks->links()}}

                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>


    </div>


@endsection
