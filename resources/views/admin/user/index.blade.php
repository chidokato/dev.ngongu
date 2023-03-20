<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="frontend/login/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/login/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="inner-pages">
        <div class="custom-form">
            <div class="close"><a href="{{asset('')}}"><i class="fa fa-times"></i></a></div>
            <div class="img"> <a href="{{asset('')}}"><img src="data/themes/"></a> </div>
            <form id="validateForm" action="login" method="post" name="registerform">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>Địa chỉ email <span class="colored">*</span></label>
                    <input name="email" type="text" placeholder="Nhập địa chỉ email">
                </div>
                <div class="form-group">
                    <label>Mật khẩu <span class="colored">*</span></label>
                    <input name="password" type="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="lost_password tabs-menu">
                    <a href="resetpassword">Lấy lại mật khẩu?</a>
                </div>
                <div id="alert"></div>
                @if(session('Alerts')) <div id="hidden" class="colored"> {{session('Alerts')}} ! </div> @endif
                @if(session('Success')) <div id="hidden"> {{session('Success')}} ! </div> @endif
                @if(count($errors) > 0)
                    @foreach($errors->all() as $err)
                    <div class="colored">{{$err}}</div>
                    @endforeach
                @endif
                <div class="submit"><button type="submit" class="log-submit-btn"><span>Đăng nhập</span></button></div>
            </form>
            <div class="clearfix"></div>
            <div class="mt-4">
                Bạn chưa có tài khoản? <a href="signup">Đăng ký ngay</a>
            </div>
        </div>
    </section>

    <script src="frontend/js/jquery-3.5.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="admin_asset/js/validate.js"></script>
</body>
</html>