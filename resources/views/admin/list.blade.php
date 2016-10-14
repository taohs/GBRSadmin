@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">管理员列表</div>

                @foreach ($users as $user)
                <div class="panel-body">
                    <div class="col-xs-1 penel-body">{{ $user->id }}</div>
                    <div class="col-xs-3 penel-body">{{ $user->name }}</div>
                    <div class="col-xs-4 penel-body">{{ $user->email }}</div>
                    <div class="col-xs-3 col-xs-offset-1 penel-body">
                        <a href="/admin/item/{{$user->id}}" class="btn  btn-primary btn-sm">修改</a>
                        <a href="/admin/view/{{$user->id}}" class="btn  btn-info btn-sm">查看</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
