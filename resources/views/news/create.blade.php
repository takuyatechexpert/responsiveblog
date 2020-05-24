@extends('layouts.app_admin');

@section('content')
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