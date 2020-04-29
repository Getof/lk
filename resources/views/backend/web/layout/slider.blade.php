@extends('backend.admin')

@section('content')

    <div class="container-fluid">
        <h2>Список слайдов</h2>
        <hr>
        <a href="{{ route('admin.slides.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Создать слайд</a>
        <table class="table table-striped">
            <thead>
                <th>Заголовок</th>
                <th>Текст слайда</th>
                <th>Действие</th>
            </thead>
            <tbody>
                @forelse($sliders as $slider)
                    <tr>
                        <td class="text-primary">{{$slider->title}}</td>
                        <td>{{$slider->body}}</td>
                        <td class="text-left">
                            <form onsubmit="if (confirm('Удалить?')){return true}else{return false} " action="{{route('admin.slides.destroy', $slider->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-default" href="{{route('admin.slides.edit', $slider->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$sliders->links()}}

                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>


    </div>


@endsection
