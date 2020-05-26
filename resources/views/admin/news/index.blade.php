@extends('layouts.app_admin')

@section('title', '管理者ページ - News List')


@section('content')

@include('admin.header')

<main class="admin__main">
  <div class="admin__main__title">
    News List
  </div>
  <div>
    @foreach($news as $new)
    {{ $new->title }}
    {{ $new->description }}
    @endforeach
  </div>
</main>
@endsection