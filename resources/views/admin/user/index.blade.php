@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Administrator_list')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.user.filter', ['excel' => true])

                <table class="table table-hover">
                    <tr class="row">
                        <th class="col-lg-1 text-center">ID</th>
                        <th class="text-center">{{__('words.Name')}}</th>
                        <th class="col-lg-2 text-center">{{__('words.Management_group')}}</th>
                        <th class="col-lg-2 text-center">{{__('words.email')}}</th>
                        <th class="col-lg-2 text-center">{{__('words.operating')}}</th>
                    </tr>
                    @foreach($data as $item)
                        <tr class="row text-center">
                            <td class="col-lg-1">
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->role->name }}
                            </td>
                            <td class="col-lg-2">
                                {{ $item->email }}
                            </td>
                            <td class="col-lg-2">
                                <a href="{{ route('user.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                @if($_user->is_super_admin == 1)
                                    | <button class="btn btn-danger btn-xs"
                                              data-url="{{route('user.destroy', ['id' => $item->getKey()])}}"
                                              data-toggle="modal"
                                              data-target="#delete-modal"
                                    >
                                       {{__('words.delete')}} 
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                    <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['name' => $name, 'role_id' => $role_id])->links() !!}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->

     <!-- Main content -->
     {{--<section class="content">--}}
         {{--<div class="row">--}}
             {{--<div class="col-md-12">--}}
                 {{--<div class="box">--}}
                     {{--<!--内容头部-->--}}
                     {{--@include('admin.user.filter', ['excel' => true])--}}
                             {{--<!--内容主体-->--}}
                     {{--<div class="box-body">--}}
                         {{--<table class="table table-hover">--}}
                             {{--<tr class="row">--}}
                                 {{--<th class="col-lg-1 text-center">ID</th>--}}
                                 {{--<th class="text-center">姓名</th>--}}
                                 {{--<th class="col-lg-2 text-center">email</th>--}}
                                 {{--<th class="col-lg-2 text-center">操作</th>--}}
                             {{--</tr>--}}
                             {{--@foreach($data as $item)--}}
                                 {{--<tr class="row text-center">--}}
                                     {{--<td class="col-lg-1">--}}
                                         {{--{{ $item->id }}--}}
                                     {{--</td>--}}
                                     {{--<td>--}}
                                         {{--{{ $item->name }}--}}
                                     {{--</td>--}}
                                     {{--<td class="col-lg-2">--}}
                                         {{--{{ $item->email }}--}}
                                     {{--</td>--}}
                                     {{--<td class="col-lg-2">--}}
                                         {{--<a href="{{ route('user.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">修改</a>--}}
                                         {{--@if($_user->is_super_admin == 1)--}}
                                          {{--| <button class="btn btn-danger btn-xs"--}}
                                                 {{--data-url="{{route('user.destroy', ['id' => $item->getKey()])}}"--}}
                                                 {{--data-toggle="modal"--}}
                                                 {{--data-target="#delete-modal"--}}
                                         {{-->--}}
                                             {{--删除--}}
                                         {{--</button>--}}
                                             {{--@endif--}}
                                     {{--</td>--}}
                                 {{--</tr>--}}
                             {{--@endforeach--}}
                         {{--</table>--}}
                         {{--<div class="clearfix">--}}
                             {{--<div class="pull-left" style="margin: 0;">--}}
                                 {{--<p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>--}}
                             {{--</div>--}}
                             {{--<div class="pull-right" style="margin: 0;">--}}
                                 {{--{!! $data->appends(['name' => $name])->links() !!}--}}
                             {{--</div>--}}
                         {{--</div>--}}
                     {{--</div><!-- /.box-body -->--}}
                 {{--</div>--}}
             {{--</div>--}}
         {{--</div>--}}

     {{--</section><!-- /.content -->--}}
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个用户吗?'])
@endsection