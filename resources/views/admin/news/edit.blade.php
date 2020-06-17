@extends('layouts.app_admin')

@section('title', '管理ページ - News Post')

@section('content')

@include('admin.header')

<main class="admin__main">
  <div class="admin__main__title">
    News Edit
  </div>
  <form method="POST" action="{{route('news.update', ['id'=> $news->id])}}" class="admin__main__form" enctype="multipart/form-data">
    {{-- enctype="multipart/form-data"の記述が重要だった
    これがないと画像がアップロードできない --}}
    @csrf
    {{-- fileのnameがcontroller側で重要になる --}}
  <input type="text" name="title" class="admin__main__form--title" placeholder="タイトルを入力してください" value="{{$news->title}}">
  <textarea rows="10" cols="40"  name="description" class="admin__main__form--textArea" placeholder="メッセージを入力してください">{{$news->description}}</textarea>
    <input type="submit" value="Send" class="admin__main__form--submit">
  </form>

  {{-- 削除用 --}}
  <form method="post" action="{{route('news.destroy', ['id'=>$news->id])}}" class="admin__main__form__delete">
    @csrf
    <input type="submit" value="Delete" class="admin__main__form__delete--submit btn btn-danger">

  </form>
</main>
@endsection