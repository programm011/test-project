<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('auth.login.login')}}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/">{{config('app.name')}}</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <form action="{{route('login')}}" method="post">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <input type="text" name="login" class="form-control" required
                           placeholder="{{__('auth.login.login')}}" value="{{old('login')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-sign-in-alt"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password"
                           placeholder="{{__('auth.login.password')}}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <x-show-errors/>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-lock"></i>
                    {{__('auth.login.enter')}}
                </button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
</body>
</html>
