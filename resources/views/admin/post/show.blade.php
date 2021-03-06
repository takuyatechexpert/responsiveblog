@extends('layouts.app')

@section('title', 'Responsivelog')

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
          <h2>{{ $post->title}}</h2>

          <div class="contents__item--image">
            <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
          </div>

          <div class="contents__item--text">
            {{ $post->description}}
          </div>
        </article>
      </main>
      
      {{-- aside --}}
      {{-- <aside> --}}
        {{-- information --}}
        {{-- <section class="info">
          <ul class="info__sns">
            <li class="fab fa-twitter fa-3x"></li>
            <li class="fab fa-facebook-f fa-3x"></li>
            <li class="fab fa-line fa-3x"></li>
          </ul>

          <ul class="info__guide">
            @foreach ($posts as $post)
              @if ($loop->index < 5)
                <li>
                  <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
                  <div class="info__guide__text">
                    <p>{{$post->title}}</p>
                  </div>
                </li>
              @endif
            @endforeach
          </ul>
        </section> --}}
        
        {{-- topics --}}
        {{-- <section class="topics">
          <h3>Topics</h3>
          <ul class="topics__diary">
            @foreach($posts as $post)
              @if ($loop->index < 8)
                <li>
                  <a href="#">
                    {{ $post->title }}
                    {{ $post->updated_at->format('Y/m/d') }}
                  </a>
                </li>
              @endif
            @endforeach
          </ul>
        </section>
      </aside> --}}

  </div>
    
  {{-- footer --}}
  <footer>
    Copyright &copy; 2020 ResponsiveBlog All Rights Reserved.
  </footer>
@endsection