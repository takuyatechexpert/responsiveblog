@section('header')
    
@endsection
<header class="admin__header">
  <ul class="admin__header__list">
    <li class="admin__header__list--title">
    Dash Board
    </li>
    <li class="admin__header__list--user">
      <a id="navbarDropdown" class="nav-link dropdown-toggle admin__header__list--user--link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
      </div>
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
