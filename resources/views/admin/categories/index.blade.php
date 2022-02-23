@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Category List</h2>

        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item"><a href="{{route('admin.category_info',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
    </section>
@endsection