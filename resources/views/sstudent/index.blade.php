
@extends('ccommon.layouts')
@section('content')
    @include('ccommon.message')
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
           @foreach($sstudents as $sstudent)
                <tr>
                    <th scope="row">{{$sstudent->id}}</th>
                    <td>{{$sstudent->name}}</td>
                    <td>{{$sstudent->age}}</td>
                    <td>{{$sstudent->sex($sstudent->sex)}}</td>
                    <td>{{$sstudent->created_at }}</td>
{{--                    <td>--}}
{{--                        <a href="{{url('sstudent/detail',['id'=>$sstudent->id])}}">详情</a>--}}
{{--                        <a href="{{url('sstudent/update',['id'=>$sstudent->id])}}">修改</a>--}}
{{--                        <a href="{{url('sstudent/delete',['id'=>$sstudent->id])}}"--}}
{{--                           onclick="if (confirm('确定要删除吗？') == false) return false;">删除</a>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <div class="pull-right">
            {{$sstudents->render()}}
        </div>

    </div>


@stop
