@extends('layouts.app_admin')

@section('title', '管理者ページ - News List')


@section('content')

@include('admin.header')

<main class="admin__main">
  <div class="admin__main__title">
    News List
  </div>

  <table>
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($news as $new)
      <tr>
        <td>
        <a href="{{route('news.edit', ['id'=> $new->id])}}" class="admin__main--img--link">
            {{ mb_strimwidth($new->title, 0, 30,'...') }}
          </a>
        </td>
        <td>
          {{ mb_strimwidth($new->description, 0, 40, '...') }}
        </td>
        <td>
          {{ $new->created_at->format('Y/m/d G:i') }}
        </td>
        <td>
          {{ $new->updated_at->format('Y/m/d G:i') }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</main>
@endsection