@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h2 class="mb-3">{{ $post->title }}</h2>

        <article>
          
          <h5> <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

          @if ($post->image)
            <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid"alt="{{ $post->category->name }}">
            </div>
          @else
            <img src="/img/{{ $post->category->slug }}.jpg" class="card-img-top img-fluid" style="height: 400px" alt="{{ $post->category->name }}">
          @endif

          <article class="my-3 fs-5">
            {!! $post->body !!}
          </article>
        
        </article>
      
        <a href="/posts" class="d-block mt-3">Back to Post</a>
      </div>
    </div>
  </div>
  
@endsection