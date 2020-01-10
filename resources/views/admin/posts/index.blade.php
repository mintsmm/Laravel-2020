@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <a href="{{url('/posts/create')}}" class="btn btn-laravel">Create Post</a>
@endsection
