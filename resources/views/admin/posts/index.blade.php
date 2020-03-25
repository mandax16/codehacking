@extends('layouts.admin')

@section('content')

	<h1>Posts</h1>

    <table class="table table-bordered">
    <thead>
      <tr>
          <th>Id</th>
          <th>Photo</th>
          <th>Written By</th>
          <th>Category</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created</th>
          <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
      <tr>
          <td>{{$post->id}}</td>
          <td><img height="64px" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
          <td>{{$post->user->name}}</td>
          <td>{{$post->category_id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at ? $post->created_at->diffForHumans() : 'No Date'}}</td>
          <td>{{$post->updated_at ? $post->updated_at->diffForHumans() : 'No Date'}}</td>

      </tr>
        @endforeach
    @endif
    </tbody>
    </table>
	@endsection