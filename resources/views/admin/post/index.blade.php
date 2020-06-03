@extends('layouts.app_admin')

@section('title', '管理者ページ - Posts List')


@section('content')

@include('admin.header')


<main class="admin__main">
  <div class="admin__main__title">
    Posts List
  </div>

  {{--成功時のメッセージ--}}
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table>
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>
          <img  src="{{ asset('storage/' . $post->image) }}" class="admin__main--img" alt="投稿画像">
        </td>
        <td>
        <a href="{{route('post.edit', ['id'=>$post->id])}}" class="admin__main--img--link">
            {{ mb_strimwidth($post->title, 0, 30,'...') }}
          </a>
        </td>
        <td>
          {{ mb_strimwidth($post->description, 0, 40, '...') }}
        </td>
        <td>
          {{ $post->created_at->format('Y/m/d G:i') }}
        </td>
        <td>
          {{ $post->updated_at->format('Y/m/d G:i') }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection