@extends('admin.layouts.main')
@section('content')
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" @if($type == 5) class="active" @endif><a href="{{ route('apple.index') }}?type=5" >{{__('words.Interface_information')}}</a></li>
        </ul>
    </div>

    <div style="margin-top: 5px;">
        <form class="form-horizontal" id="form" action="{{ route('apple.update', ['id' => 250]) }}" method="post">
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="api_name" value="SELF">
            <input type="hidden" name="api_title" value="SELF">
            <input type="hidden" name="api_money" value="0">

        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <td style="width: 20%">API{{__('words.domain_name')}}</td>
                    {{--<td style="width: 10%">前缀</td>--}}
                    <td style="width: 30%">API{{__('words.Account')}}</td>
                    <td>API{{__('words.key')}}</td>
                    </tr>
            </thead>
            @foreach($data as $i)
                @if($i->api_name == 'SELF')
            <tr>
            <td>
                <input type="text" class="form-control" id="api_domain" name="api_domain" placeholder="{{__('words.test')}}例：api.888.com" value="{{ $i->api_domain }}" />
            </td>
            {{--<td>--}}
                {{--<input type="text" class="form-control" id="prefix" name="prefix" placeholder="{{__('words.test')}}例：9k" value="{{ $i->prefix }}" />--}}

            {{--</td>--}}
            <td>
                <input type="text" class="form-control" id="api_Id" name="api_Id" placeholder="" value="{{ $i->api_id }}" />

            </td>
            <td>
                <input type="text" class="form-control" id="api_Key" name="api_Key" placeholder="" value="{{ $i->api_key }}" />

            </td>
            <td>
                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
            </td>

            </tr>
                @endif
                @endforeach

        </table>
        </form>
    </div>



     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.interface_list')}}</h3>

             </div>
             <div class="panel-body"><b><font color="red">{{__('words.In_the_above_window_fill_in_the_base_domain_name')}}</font></b><br><br>
     {{--<b><font color="DarkRed">{{__('words.Contact_the_interface_to_open_an_account')}}：SKYPE-</font><font color="Green">aobet.cn</font>　　<a href="http://skype.gmw.cn/down/" target="_blank" >SKYPE官方下载地址</a></b>--}}
                 @include('admin.api.filter',['type' => $type])
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th>{{__('words.Platform_name')}}</th>
                         <th  style="width: 10%">{{__('words.show_name')}}</th>
                         <th  style="width: 10%">{{__('words.Balance')}}</th>
                         <th  style="width: 20%">{{__('words.Last_update_time')}}</th>
                         <th  style="width: 10%">{{__('words.Sort')}}</th>
                         <th  style="width: 20%">{{__('words.Online/offline')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         @if($item->api_name != 'SELF')
                         <tr>
                             <td>
                                 {{ $item->api_name }}
                             </td>
                             <td>
                                 {{ $item->api_title }}
                             </td>
                             <td>
                                 <span class="balance">{{ $item->api_money }}</span>
                                 <a class="refresh" href="javascript:void(0)"  data-uri="{{ route('api.credit') }}?api_name={{ $item->api_name }}"></a>

                             </td>
                             <td>
                                 {{ $item->updated_at }}
                             </td>
                             <td>
                                 {{ $item->sort }}
                             </td>
                             <td>
                                 
                                 @if(strpos(\App\Models\Base::$ON_LINE_HTML[$item->on_line], "上线") !== false)
                                    <span style="color:green">{{__('words.online')}}</span>
                                @else
                                    <span style="color:red">{{__('words.offline')}}</span>
                                @endif
                             </td>
                             <td>
                                 @if ($item->on_line == 0)
                                     <a href="{{ route('apple.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('<?php echo __('words.are_you_sure_offline') ?>')">{{__('words.Offline')}}</a>
                                 @elseif($item->on_line == 1)
                                     <a href="{{ route('apple.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('<?php echo __('words.are_you_sure_online') ?>')">{{__('words.online')}}</a>
                                 @endif
                                 <button type="button" class="btn btn-info btn-xs show-cate" data-uri="{{ route('apple.show', ['id' => $item->getKey()]) }}">{{__('words.View')}}</button>
                                 <a href="{{ route('apple.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('api.destroy', ['id' => $item->getKey()])}}"--}}
                                         {{--data-toggle="modal"--}}
                                         {{--data-target="#delete-modal"--}}
                                 {{-->--}}
                                     {{--删除--}}
                                 {{--</button>--}}
                             </td>
                         </tr>
                         @endif
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                     {!! $data->render() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
     <script>
         $(function(){
             $('.show-cate').click(function(){
                 var url = $(this).attr('data-uri');
                 layer.open({
                     type: 2,
                     title: '信息',
                     shadeClose: false,
                     shade: 0.8,
                     area: ['90%', '90%'],
                     content: url
                 });
             })

             $('.refresh').on('click',function(){
                 var _this=$(this);
                 var pos = _this.prev('span');
//                 var money_span = _this.parent('p').next().find('span');
                 _this.css({
                     'background':'url({{ asset("/web/images/h-u-loading2.gif") }}) no-repeat center center'
                 })
                 $.ajax({
                     type : 'GET',
                     url : _this.attr('data-uri'),
                     data : '',
                     contentType : "application/json; charset=utf-8",
                     success : function(data){

                         _this.css({
                             'background':'url({{ asset("/web/images/bg-ico.png") }}) no-repeat center center',
                             'background-position': '-80px -102px'
                         })
                         if (data.Code != 0)
                         {
                             alert(data.Message);
                             return ;
                         }
                         pos.html(data.Data+'元');
                     },
                     error: function (err, status) {
                         console.log(err)
                     }
                 })
             })
         });
     </script>
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个接口吗?'])
@endsection