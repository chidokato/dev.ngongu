@extends('admin.layout.main')

@section('content')
@include('admin.alert')

<form method="post" action="{{route('district.update', [$id])}}">
@csrf
@method('PUT')
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="{{route('district.index')}}" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mobile-hide">
            <button type="reset" class="btn-danger mr-2 form-control"><i class="fas fa-sync"></i> Làm mới</button>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item">
            <button type="submit" class="btn-success form-control"><i class="far fa-save"></i> Lưu lại</button>
        </li>
    </ul>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-3 flex" style="height: 38px;">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Thêm mới</h2>
</div>

<div class="row">
    @foreach($district as $val)
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$val->locale}}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Name [{{$val->locale}}]</label>
                              <input value="{{$val->id}}" name="id[]" placeholder="..." type="hidden" class="form-control">
                              <input value="{{$val->name}}" name="name[]" placeholder="..." type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Province [{{$val->locale}}]</label>
                              <select name="province_id[]" class="form-control">
                                @foreach($provinces as $province)
                                @if($province->locale == $val->locale)
                                <option <?php if($val->province_id == $province->id){ echo "selected"; } ?> value="{{$province->id}}">{{$province->name}}</option>
                                @endif
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</form>
@endsection