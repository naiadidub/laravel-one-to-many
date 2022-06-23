@extends('layouts.admin')

@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width: 360px; height: 360px;" src="{{$post->image}}" alt="{{$post->title}}" />
    @if($post->category)
        <h2>{{$post->category->name}}</h2>
    @endif
    <small>{{$post->created_at}}</small>
    <p>{{$post->content}}</p>

    <h5>{{$post->published ? 'Published' : 'Unpublished'}}</h5>
    <a href="admin/posts"><button type="button" class="btn btn-primary">Vai ai post</button></a>
@endsection
