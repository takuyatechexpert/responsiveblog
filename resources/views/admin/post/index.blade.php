@extends('layouts.app_admin')

@section('title', '管理者ページ - Posts List')


@section('content')

@include('admin.header')


<main class="admin__main">
  <div class="admin__main__title">
    Posts List
  </div>
  <div>
    @foreach($posts as $post)
    {{ $post->title }}
    <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
    {{ $post->description }}
    @endforeach
  </div>
</main>
@endsection