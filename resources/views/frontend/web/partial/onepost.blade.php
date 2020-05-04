<div class="card mb-3">
    <img src="{{asset('upload/imgtasks/'.$post->img)}}" class="card-img-top" alt="">
    <div class="card-body">
        <hr>
        <p class="card-text">{{$post->body}}</p>
        <hr>
        <p class="card-text"><small class="text-muted">{{$post->created_at->format('d.m.Y')}}</small></p>
    </div>
</div>
