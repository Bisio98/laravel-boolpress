@extends('layouts.dashboard')

@section('content')
    <section>
        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
              <label class="form-label" for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}">
            </div>
            <div class="form-group">
              <label class="form-label" for="category_id">Category</label>
              <select id="category_id" name="category_id" class="form-select">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="content">Content</label>
              <textarea  class="form-control" name="content" id="content" cols="30" rows="10" value="{{old('content')}}"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection