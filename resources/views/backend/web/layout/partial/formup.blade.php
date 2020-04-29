<div class="form-group">
    <label for="title">Заголовок</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$slide->title}}" required>
</div>
<div class="form-group">
    <label for="body">Текс слайда</label>
        <input type="text" class="form-control" id="body" name="body" value="{{$slide->body}}" required>
</div>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
