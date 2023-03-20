@extends('welcome')

@section('content')
<h4>Liệt kê danh mục</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Locale</th>
      <th scope="col">Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $val)
    <tr>
      <th scope="row">1</th>
      <td>{{$val->title}}</td>
      <td>{{$val->locale}}</td>
      <td>{{$val->description}}</td>
      <td><a href="{{route('category.edit', [$val->id])}}">Edit</a></td>
      <td>
        <form action="{{route('category.destroy', [$val->id])}}" method="POST">
          @method('DELETE')
          @csrf
          <button onclick="return confirm('xác nhận')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection