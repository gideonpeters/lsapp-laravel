@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-dark m-1">Go Back</a>
<h1 class="mt-4"> {{$post->title}}</h1>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

@endsection