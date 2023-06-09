@extends('admin.layout.main')

@section('content')
@include('admin.alert')

<form method="post" action="{{route('district.store')}}">
@csrf
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
  <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tiếng Việt</h6>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Name [vi]</label>
                              <input name="name:vi" placeholder="..." type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Province [vi]</label>
                              <select name="province_id:vi" class="form-control">
                                @foreach($province as $val)
                                @if($val->locale == 'vi')
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                @endif
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tiếng Anh</h6>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Name [en]</label>
                              <input name="name:en" placeholder="..." type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Province [en]</label>
                              <select name="province_id:en" class="form-control">
                                @foreach($province as $val)
                                @if($val->locale == 'en')
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                @endif
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tiếng Trung</h6>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Name [cn]</label>
                              <input name="name:cn" placeholder="..." type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Province [cn]</label>
                              <select name="province_id:cn" class="form-control">
                                @foreach($province as $val)
                                @if($val->locale == 'cn')
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                @endif
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    
</div>
</form>
@endsection