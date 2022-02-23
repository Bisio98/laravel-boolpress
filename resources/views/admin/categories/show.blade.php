@extends('layouts.dashboard')

@section('content')
    <section>
       <h2>{{$category->name}}</h2>

       @forelse ($posts as $post)
       <div class="row row-cols-3">
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
        </div>
       @empty
           <div>Nessun Post Trovato</div>
       @endforelse
    
    </section>
@endsection