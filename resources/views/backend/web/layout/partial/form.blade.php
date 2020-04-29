<div class="form-group">
    <label for="title">Заголовок</label>
    @if (isset($slider->id))
        <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}" required>
    @else
        <input type="text" class="form-control" id="title" name="title" value="" required>
    @endif
</div>
<div class="form-group">
    <label for="body">Текс слайда</label>
    @if (isset($slider->id))
        <input type="text" class="form-control" id="body" name="body" value="{{$slider->body}}" required>
    @else
        <input type="text" class="form-control" id="body" name="body" value="" required>
    @endif

</div>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>

