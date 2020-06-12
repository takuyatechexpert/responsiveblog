@extends('layouts.app_admin')

@section('title', '管理者ページ - Posts Edit')


@section('content')

@include('header')

<main class="admin__main">
  <div class="admin__main__title">
    Post Edit

    
    
  </div>
  <form method="POST" action="{{route("post.update", ['id'=> $post->id])}}" class="admin__main__form" enctype="multipart/form-data">
    {{-- enctype="multipart/form-data"の記述が重要だった
    これがないと画像がアップロードできない --}}

    {{-- エラーメッセージ --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

    @csrf
    {{-- fileのnameがcontroller側で重要になる --}}
    <input type="file" name="file" class="admin__main__form--file">
    {{-- @if(file.empty) --}}
        
    {{-- @endempty) --}}
    <input type="text" name="title" class="admin__main__form--title" value="{{$post->title}}">
    <textarea rows="10" cols="40"  name="description" class="admin__main__form--textArea" placeholder="メッセージを入力してください">{{$post->description}}</textarea>
    <input type="submit" value="Send" class="admin__main__form--submit">
  </form>
</main>
@endsection