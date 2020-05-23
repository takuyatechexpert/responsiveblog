@extends('layouts.app');

@section('content')
<header class="admin__header">
  <ul class="admin__header__list">
    <li class="admin__header__list--title">
    Dash Board
    </li>
    <li class="admin__header__list--user">
      user name
    </li>
  </ul>
</header>

<nav class="admin__nav">
  <ul>
    <li>
      <a href="{{ route('admin.home')}}">New Post</a>
    </li>
    <li>
      <a href="#">News Post</a>
    </li>
    <li>
      <a href="#">Posts List</a>
    </li>
    <li>
      <a href="#">News List</a>
    </li>
  </ul>
</nav>

<main class="admin__main">
  <div class="admin__main__title">
    News Post
  </div>
  <form method="POST" action="{{route("news.store")}}" class="admin__main__form" enctype="multipart/form-data">
    {{-- enctype="multipart/form-data"の記述が重要だった
    これがないと画像がアップロードできない --}}
    @csrf
    {{-- fileのnameがcontroller側で重要になる --}}
    <input type="text" name="title" class="admin__main__form--title" placeholder="タイトルを入力してください">
    <textarea rows="10" cols="40"  name="description" class="admin__main__form--textArea" placeholder="メッセージを入力してください"></textarea>
    <input type="submit" value="Send" class="admin__main__form--submit">
  </form>
</main>
@endsection