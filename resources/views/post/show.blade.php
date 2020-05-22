@extends('layouts.app')

@section('content')
  <p>
    show page
  </p>
  <p>
    {{ $post->title}}
    <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
    {{ $post->description}}
  </p>
@endsection