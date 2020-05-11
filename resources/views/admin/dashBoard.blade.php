@extends('layouts.app')

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
      <a href="#">New Post</a>
    </li>
    <li>
      <a href="#">News</a>
    </li>
  </ul>
</nav>

<main class="admin__main">
  <div class="admin__main__title">
    New Post
  </div>
  <form class="admin__main__form">
    <input type="file">
    <textarea rows="10" cols="40" class="admin__main__form--textArea">メッセージを入力してください</textarea>
    <input type="submit" value="Send" class="admin__main__form--submit">
  </form>
</main>
@endsection