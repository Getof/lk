<div class="form-group">
    <label for="title">Заголовок</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$task->title}}" required>
</div>
<div class="form-group">
    <label for="body">Текст статьи</label>
    <input type="text" class="form-control" id="body" name="body" value="{{$task->body}}" required>
</div>
<div class="form-group">
    <label for="img">Изображение</label>
    <input type="file" class="form-control-file" id="img" name="img" value="{{$task->img}}">
    <hr>
    <img src="{{asset('upload/imgtasks/'.$task->img)}}" alt="" class="img-thumbnail" width="20%">
</div>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
