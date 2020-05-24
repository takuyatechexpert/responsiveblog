@extends('layouts.app')

@section('content')
{{-- container --}}
<div class="container">
</div>
  
  {{-- header --}}
  <header>
    <div class="header__top">
      <h1>
        ResponsiveBlog
      </h1>
      <ul class="s_nav">
        <li>contact</li>
      </ul>
    </div>
    <img src="{{ asset('/images/header.jpg') }}" alt="header">
  </header>
  
  {{-- global nav --}}
  <nav>
    <ul>
    <li>プログラミング</li>
    <li>genre1</li>
    <li>genre2</li>
    <li>genre3</li>
    <li>genre4</li>
    <li>genre5</li>
  </ul>
</nav>

{{-- contents --}}
<div class="contents">
  
    {{-- main --}}
    <main>
      {{-- article --}}
      <article class="contents__item">
        @foreach ($posts as $post)
          <h2>{{$post->title}}</h2>
          <div class="contents__item__box">
            {{-- public/imageに格納したアプリに必要な画像を取り出す方法 --}}
            {{-- <img src="{{ asset('/images/sample.jpg') }}" alt="イメージ写真"> --}}

            {{-- 投稿した画像を取り出す方法 storage/publicにアクセスしている --}}
            <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
            <p>
              {{$post->description}}
              
            </p>
          </div>
        @endforeach
      </article>
    </main>
    
    {{-- aside --}}
    <aside>
      {{-- information --}}
      <section class="info">
        <ul class="info__sns">
          <li class="fab fa-twitter fa-3x"></li>
          <li class="fab fa-facebook-f fa-3x"></li>
          <li class="fab fa-line fa-3x"></li>
        </ul>

        <ul class="info__guide">
          @foreach ($posts as $post)
            <li>
              <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
              <div class="info__guide__text">
                <p>{{$post->title}}</p>
              </div>
            </li>
          @endforeach
        </ul>
      </section>
      
      {{-- topics --}}
      <section class="topics">
        <h3>Topics</h3>
        <ul class="topics__diary">
          <li>
            更新日
          </li>
          <li>
            更新日
          </li>
          <li>
            更新日
          </li>
        </ul>
      </section>
    </aside>
    
    {{-- news --}}
    <section class="news">
      <h2>News</h2>
      @foreach($news as $new)
        <article class="news__item">
          <h3>{{ $new->title }}</h3>
          <p>{{ $new->updated_at->format('Y/m/d G:i') }}</p>
          {{-- 日付表示を変更している --}}
          <p>{{ $new->description }}</p>
        </article>
      @endforeach
    </section>
  </div>
  
{{-- footer --}}
<footer>
  Copyright &copy; 2020 ResponsiveBlog All Rights Reserved.
</footer>

@endsection