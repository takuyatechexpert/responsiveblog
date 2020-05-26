@section('header')
    
@endsection
<header class="admin__header">
  <ul class="admin__header__list">
    <li class="admin__header__list--title">
    Dash Board
    </li>
    <li class="admin__header__list--user">
      {{ Auth::user()->name }}
    </li>
  </ul>
</header>

<nav class="admin__nav">
  <ul>
    <li>
      <a href="{{ route('admin.home')}}">New Post</a>
    </li>
    <li>
      <a href="{{ route('news.create')}}">News Post</a>
    </li>
    <li>
      <a href="{{ route('post.index')}}">Posts List</a>
    </li>
    <li>
      <a href="{{ route('news.index')}}">News List</a>
    </li>
  </ul>
</nav>
