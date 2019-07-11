@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="{{ route('wap.agent') }}"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--<span>下线会员提款记录</span>--}}
                {{--<a class="f_r" href="{{ route('wap.agent') }}" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--</div>--}}
                {{--@include('wap.layouts.aside')--}}
                {{--<div id="type" style="display: none">--}}
                {{--<ul class="g_type">--}}
                {{--<li>--}}
                {{--@include('wap.layouts.aside_game_list')--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
                    下线会员提款记录
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap userInfo">
                    <!--            --><!--?php //include_once("moneysubmenu.php"); ?-->
                    <form id="form1" name="form1" action="" method="get">
                        <table cellspacing="0" cellpadding="0" border="0" class="tab1">
                            <tr>
                                <td class="bg" align="right">会员名：</td>
                                <td>
                                    <input type="text" class="input_150"
                                           style="cursor: pointer; margin-bottom: 5px" name="name" value="{{ $name }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg" align="right">开始日期：</td>
                                <td>
                                    <input name="cn_begin" type="text" id="cn_begin" class="input_150 laydate-icon"
                                           readonly="readonly" value="<?=$cn_begin?>" onclick="laydate();"
                                           style="cursor: pointer; margin-bottom: 5px"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg" align="right">结束日期：</td>
                                <td>
                                    <input name="cn_end" type="text" id="cn_end" class="input_150 laydate-icon"
                                           readonly="readonly" value="<?=$cn_end?>" onclick="laydate();"
                                           style="cursor: pointer; margin-bottom: 5px"/>

                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="submit_btn">查　询</button>
                    </form>
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 mt10 text-center">
                        <tr class="tic">
                            <td width="33.33%">用户名</td>
                            <td width="33.33%">金额</td>
                            <td width="33.33%">提款时间</td>
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->member->name }}</td>
                                    <td>{{ $item->money }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>成功</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">暂无提款记录！</td>
                            </tr>
                        @endif
                    </table>
                    <table border="0" cellspacing="0" cellpadding="0" class="page">
                        {!! $data->appends(['cn_begin' => $cn_begin, 'cn_end' => $cn_end, 'name' => $name])->links() !!}
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('after.js')
    <script type="text/javascript" src="{{ asset('/wap/js/laydate.js') }}"></script>
@endsection