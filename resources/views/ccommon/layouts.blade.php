<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>LARAVEL - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    @section('style')

    @show
</head>
<body>
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>轻松学会Laravel</h2>

            <p>玩转laravel</p>
        </div>
    </div>
@show
<div class="container">
    <div class="row">

        <div class="col-md-3">
            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('student/index')}}" class="list-group-item
                {{Request::getPathInfo() != '/student/create' ? 'active': ''}}
                        ">学生列表</a>
                    <a href="{{url('student/create')}}" class="list-group-item
                 {{Request::getPathInfo() == '/student/create' ? 'active': ''}}
                        ">新增学生</a>
                </div>
            @show
        </div>

        <div class="col-md-9">

            @yield('content')

        </div>
    </div>
</div>

@section('footer')
    <div class="jumbotron" style="margin: 0">
        <div class="container">
            <span>@2020 xiaojuju</span>
        </div>
    </div>
@show
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
@section('javascript')

@show
</body>
</html>
