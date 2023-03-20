@extends('welcome')

@section('content')
<h4>Thêm danh mục</h4>
<form method="post" action="{{route('category.store')}}">
	@csrf
  	<div class="form-group">
    	<label>Tên danh mục vi</label>
    	<input type="text" name='title:vi' class="form-control"  placeholder="Tên danh mục">
  	</div>
  	<div class="form-group">
    	<label>Mô tả danh mục vi</label>
    	<input type="text" name='description:vi' class="form-control"  placeholder="Mô tả danh mục">
  	</div>

  	<div class="form-group">
    	<label>Tên danh mục en</label>
    	<input type="text" name='title:en' class="form-control"  placeholder="Tên danh mục">
  	</div>
  	<div class="form-group">
    	<label>Mô tả danh mục en</label>
    	<input type="text" name='description:en' class="form-control"  placeholder="Mô tả danh mục">
  	</div>
  
  	<div class="form-group" >
    	<select name='status'>
    		<option value="1">hiển thị</option>
    		<option value="0">ẩn</option>
    	</select>
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection