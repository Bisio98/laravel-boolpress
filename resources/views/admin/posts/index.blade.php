@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Lista dei Post</h2>

        <div class="row row-cols-3">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card mt-3">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{ Str::substr($post->content,0,50)}}</p>
                            <a href="{{route('admin.posts.show',['post'=>$post->id])}}" class="btn btn-primary">Leggi il Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>   
@endsection