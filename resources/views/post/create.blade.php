@extends('welcome')

@section('content')
<h4>Thêm danh mục</h4>
<form method="post" action="{{route('post.store')}}">
	@csrf
    <div class="form-group">
      <label>Danh mục</label>
      <select name="category_id" class="form-control">
        @foreach($category as $val)
        <option>{{$val->title}}</option>
        @endforeach
      </select>
    </div>
  	<div class="form-group">
    	<label>Tiêu đề vi</label>
    	<input type="text" name='title:vi' class="form-control"  placeholder="...">
  	</div>
  	<div class="form-group">
    	<label>Nội dung vi</label>
      <textarea name='content:vi' rows="4" class="form-control"></textarea>
  	</div>

  	<div class="form-group">
    	<label>Tiêu đề en</label>
    	<input type="text" name='title:en' class="form-control"  placeholder="...">
  	</div>
  	<div class="form-group">
    	<label>Nội dung en</label>
    	<textarea name='content:en' rows="4" class="form-control"></textarea>
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