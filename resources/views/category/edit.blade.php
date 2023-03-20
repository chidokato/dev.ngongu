@extends('welcome')

@section('content')
<h4>Sửa danh mục</h4>
<form method="post" action="{{route('category.update', [$category->id])}}">
  @method('PUT')
	@csrf
  	<div class="form-group">
    	<label>Tên danh mục</label>
    	<input type="text" name='title' value="{{$category->title}}" class="form-control"  placeholder="Tên danh mục">
  	</div>
  	<div class="form-group">
    	<label>Mô tả danh mục</label>
    	<input type="text" name='description' value="{{$category->description}}" class="form-control"  placeholder="Mô tả danh mục">
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection