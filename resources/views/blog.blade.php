@extends('layout')



@section('title', "Blog")

@section('content')
<img src="image/blog.PNG" class="img-fluid" alt="Responsive image">


@foreach($posts->chunk(3) as $postChunk)
<div class="row">
@foreach($postChunk as $post)
<div class="card bg-light mb-3 card" style="max-width: 18rem; margin:50px 0 0 100px; float:left;">
        <div class="card-header"><h5>{{ $post->title }}</h5></div>
        <div class="card-body">
          <p class="card-title" style="text-align:center; font-size:12px; font-style:italic;">{{ $post->updated_at}}</p>
          <p class="card-text">{{ $post->text }}</p>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach

    



@endsection

