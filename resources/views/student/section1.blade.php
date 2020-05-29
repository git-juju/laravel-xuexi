@extends('layouts')


@section('header')
    @parent
    你好
    @stop
@section('sidebar')
    @parent
    你好
@stop
@section('content')
    content
{{--    <p>{{ $name }}</p>--}}
{{--<!--    //  输出变量-->--}}
{{--<!--  调用php代码  -->--}}
{{--    <p>{{ isset($name)? $name : 'default' }}</p>--}}
{{--    <p>{{ $name ||'default' }}</p>--}}
{{--    <!--  原样输出  -->--}}
{{--    <p>@{{ $name }}</p>--}}
{{-- 4 模版注视  --}}
{{--  5  引入子试图 include--}}
{{--@include('student.common1',['message'=>'我是你','age'=> 18])--}}
<br>
    @if($name =='juju')
     jujussssss
    @elseif($name == 'jjj')
    jjj
    @else
    jjjj
    @endif
{{--@if(in_array($name,$arr))--}}
{{--    treu--}}
{{--    @else--}}
{{--    false--}}
{{--    @endif--}}
    <br>
    @unless($name != 'juju')
    jujujuuuuuuu
    @endunless
{{--    @for($i=0;$i<10;$i++)--}}
{{--    <p>{{$i}}</p>--}}
{{--    @endfor--}}
{{--    @foreach($students as $student)--}}
{{--    <p>{{ $students->name }}</p>--}}
{{--    @endforeach--}}

<a href="{{url('url')}}">url</a>
    <br>
    <a href="{{route('ff ff')}}">
        route
    </a>
    <br>
@stop
