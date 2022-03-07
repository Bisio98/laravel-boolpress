@extends('layouts.dashboard')

@section('content')
    <h2>{{$post->title}}</h2>

    <div class="mt-3">Slug-> {{$post->slug}}</div>
    
    @if ($post->category)
        <div class="mt-3">Category-> {{$post->category->name}}</div>
    @endif

    @if ($post->tags)
        <div class="mt-3">Tags->
            @forelse ($post->tags as $tag)
                {{ $tag->name}}{{ $loop->last ? '' : ',' }}
            @empty
                nessuno
            @endforelse
        </div>
    @endif
    
    <div>
        @if($post->cover)
            <img src="{{ asset('storage/' . $post->cover ) }}" alt="">
        @endif
    </div>

    <p>{{$post->content}}</p>

    <div>
        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica post</a>
    </div>

    <div>
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger">Cancella</button>
        </form>
    </div>
@endsection