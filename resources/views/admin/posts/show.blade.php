@extends('layouts.dashboard')

@section('content')
    <h2>{{$post->title}}</h2>

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