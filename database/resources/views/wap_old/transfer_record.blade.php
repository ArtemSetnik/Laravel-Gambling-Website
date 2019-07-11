@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                    {{--<a class="f_l" href="#u_nav"><img src="{{ asset('/wap/images/user_menu.png') }}" alt=""></a>--}}
                    {{--<span>额度转换记录</span>--}}
                    {{--<a class="f_r" href="#type"><img src="{{ asset('/wap/images/user_game.png') }}" alt=""></a>--}}
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
                    额度转换记录
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap userInfo">
                    <!--            --><!--?php //include_once("moneysubmenu.php"); ?-->
                    <form id="form1" name="form1" action="" method="get">
                        <table cellspacing="0" cellpadding="0" border="0" class="tab1">
                            <!--                    <tr>-->
                            <!--                        <td class="bg" align="right">转账类型：</td>-->
                            <!--                        <td>-->
                            <!--                            <select name="zz_type" id="zz_type">-->
                            <!--                                <option value="" <?//=$zz_type==""?"selected":""?><!全部</option>-->
                            <!--                            </select>-->
                            <!--                        </td>-->
                            <!--                    </tr>-->
                            <tr>
                                <td class="bg" align="right">开始日期：</td>
                                <td>
                                    <input name="cn_begin" type="text" id="cn_begin" class="input_150 laydate-icon"
                                           readonly="readonly" value="<?=$cn_begin?>" onclick="laydate();"
                                           style="cursor: pointer; margin-bottom: 5px"/>
                                    <div>
                                        <select name="s_begin_h" id="s_begin_h" style="width: 70px">
                                            <?php
                                            for($bh_i = 0;$bh_i < 24;$bh_i++){
                                            $b_h_value = $bh_i < 10 ? "0" . $bh_i : $bh_i;
                                            ?>
                                            <option value="<?=$b_h_value?>" <?=$s_begin_h == $b_h_value ? "selected" : ""?>><?=$b_h_value?></option>
                                            <?php } ?>
                                        </select> 时
                                        <select name="s_begin_i" id="s_begin_i" style="width: 70px">
                                            <?php
                                            for($bh_j = 0;$bh_j < 60;$bh_j++){
                                            $b_i_value = $bh_j < 10 ? "0" . $bh_j : $bh_j;
                                            ?>
                                            <option value="<?=$b_i_value?>" <?=$s_begin_i == $b_i_value ? "selected" : ""?>><?=$b_i_value?></option>
                                            <?php } ?>
                                        </select> 分
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg" align="right">结束日期：</td>
                                <td>
                                    <input name="cn_end" type="text" id="cn_end" class="input_150 laydate-icon"
                                           readonly="readonly" value="<?=$cn_end?>" onclick="laydate();"
                                           style="cursor: pointer; margin-bottom: 5px"/>
                                    <div>
                                        <select name="s_end_h" id="s_end_h" style="width: 70px">
                                            <?php
                                            for($eh_i = 0;$eh_i < 24;$eh_i++){
                                            $e_h_value = $eh_i < 10 ? "0" . $eh_i : $eh_i;
                                            ?>
                                            <option value="<?=$e_h_value?>" <?=$s_end_h == $e_h_value ? "selected" : ""?>><?=$e_h_value?></option>
                                            <?php } ?>
                                        </select> 时
                                        <select name="s_end_i" id="s_end_i" style="width: 70px">
                                            <?php
                                            for($eh_j = 0;$eh_j < 60;$eh_j++){
                                            $e_i_value = $eh_j < 10 ? "0" . $eh_j : $eh_j;
                                            ?>
                                            <option value="<?=$e_i_value?>" <?=$s_end_i == $e_i_value ? "selected" : ""?>><?=$e_i_value?></option>
                                            <?php } ?>
                                        </select> 分
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="submit_btn">查　询</button>
                    </form>
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 mt10 text-center">
                        <tr class="tic">
                            <td width="25%">转账时间</td>
                            <td width="25%">金额</td>
                            <td width="30%">转出/转入</td>
                            <td width="20%">状态</td>
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->money }}</td>
                                    <td>{{ $item->transfer_out_account }}/{{ $item->transfer_in_account }}</td>
                                    <td>成功</td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="4">暂无转账记录！</td>
                            </tr>
                        @endif
                    </table>
                    <table border="0" cellspacing="0" cellpadding="0" class="page">
                        {!! $data->appends(['cn_begin' => $cn_begin, 'cn_end' => $cn_end, 's_begin_h' => $s_begin_h, 's_begin_i' => $s_begin_i, 's_end_h' => $s_end_h, 's_end_i' => $s_end_i])->links() !!}
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('after.js')
    <script type="text/javascript" src="{{ asset('/wap/js/laydate.js') }}"></script>
@endsection