@extends('layouts.app_admin')

@section('title', '管理ページ - Add Genre')

@section('content')

@include('admin.header')

<main class="admin__main">
  <div class="admin__main__title">
    Add Genre
  </div>
  <form method="POST" action="#" class="admin__main__form">
    @csrf
    {{-- fileのnameがcontroller側で重要になる --}}
    <input type="text" name="title" class="admin__main__form--title" placeholder="ジャンルを入力してください">
    <input type="submit" value="Send" class="admin__main__form--submit">
  </form>
</main>
@endsection