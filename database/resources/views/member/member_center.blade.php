@extends('member.layouts.main')
@section('content')
    <!--修改银行信息提示框-->
    <div  class="modal modal-login bank-modal">
        <div class="modal-content">
    <span class="close_wrap">
      <a href="" class="close bg-icon"></a>
    </span>
            <div class="modal-login_form">
                <h2>提款提示</h2>
                <div class="bank_modal_con">
                    <div class="left">
                        <img src="{{ asset('/web/images/U-Prot-Ask.png') }}">
                    </div>
                    <div class="right">
                        <h4>未设置手机验证</h4>
                        <p>请您先去设置手机验证，再进行修改银行账号操作！</p>
                    </div>
                    <div class="set_now">
                        <a href="javascript:void(0)">前往设置</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--安全验证-->
    <div  class="modal modal-login safemodify-modal">
        <div class="modal-content">
    <span class="close_wrap">
      <a href="" class="close bg-icon"></a>
    </span>
            <div class="modal-login_form">
                <h2>邮箱验证</h2>
                <div class="modify-modal-con">
                    <p class="tips">请填写注册时的邮箱，如需更改请联系 <a class="service" href="">在线客服</a></p>
                    <input class="inp" type="text">
                    <input class="sub emailsub" type="submit" value="邮箱验证">
                </div>
            </div>
        </div>
    </div>

    <!--安全验证 验证码-->
    <div  class="modal modal-login ecodemodify-modal">
        <div class="modal-content">
    <span class="close_wrap">
      <a href="" class="close bg-icon"></a>
    </span>
            <div class="modal-login_form">
                <h2>邮箱验证</h2>
                <div class="ecode-modal-con">
                    <div class="line">
                        <span class="tit">邮箱验证</span>
                        23435@qq.com
                    </div>
                    <div class="line">
                        <span class="tit">验证码</span>
                        <input class="inp" type="text">
                        <button class="send" href="javascript:void(0)">发送验证码</button>
                    </div>
                    <div class="line">
                        <span class="tit"></span>
                        <input class="sub" type="submit" value="确 定">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loading_shadow hide">
        <div class="shadow"></div>
        <img src="{{ asset('/web/images/loading-win8.gif') }}" class="loading_win">
    </div>
    <div class="container user_con">
        <div class="user_left fl">
            <ul>
                <li class="active">
                    <a href="{{ route('member.userCenter') }}"><i class="iconfont">&#xe639;</i>个人资料</a>
                </li>
                <li>
                    <a href="{{ route('sync.tpl', ['name' => 'safe_manage']) }}"><i class="iconfont">&#xe639;</i>安全管理</a>
                </li>
                <li>
                    <a href="{{ route('sync.tpl', ['name' => 'finance_center']) }}"><i class="iconfont">&#xe639;</i>财务中心</a>
                </li>
                <li>
                    <a href="{{ route('sync.tpl', ['name' => 'customer_report']) }}"><i class="iconfont">&#xe639;</i>客户报表</a>
                </li>
                <li>
                    <a href="{{ route('sync.tpl', ['name' => 'service_center']) }}"><i class="iconfont">&#xe639;</i>服务中心</a>
                </li>
                <li>
                    <a href="{{ route('sync.tpl', ['name' => 'selfhelp_discount']) }}"><i class="iconfont">&#xe639;</i>自助优惠</a>
                </li>
            </ul>
        </div>
        <div class="user_right ">
            @include('member.single_info')
        </div>
    </div>
    <script>
        (function ($) {
            $(function () {
//                $('.flexslider').flexslider({
//                    animation: 'fade',
//                    directionNav: false
//                });
//                $('.level').each(function(){
//                    var levelNum=$(this).attr('levelNum');
//                    $(this).animate({
//                        'width':levelNum
//                    },800)
//                })
//
//                $('.menuBox').on('click', 'li', function () {
//                    var index = $(this).index();
//                    var $contentBox_item=$(this).closest('.menuBox').next('.contentBox').find('.contentBox_item');
//                    $(this).addClass('active').siblings('li').removeClass('active');
//                    $contentBox_item.removeClass('active').eq(index).addClass('active');
//                });
                /*
                 $('.set_now').on('click','a',function(){

                 })*/

//                $('.user_right').load('indoor_transfer.html',function(){  //默认load页面
//                    $('.level').each(function(){
//                        var levelNum=$(this).attr('levelNum');
//                        $(this).animate({
//                            'width':levelNum
//                        },800)
//                    })
//                });

                //left nava
//                $('.user_con').on('click','.user_left a',function(){
//                    var loadUrl=$(this).attr('_href');
//                    $('.loading_shadow').show();
//                    $('.user_right').load(loadUrl,function(responseTxt,statusTxt,xhr){
//                        if(statusTxt=="success"){
//                            $('.loading_shadow').hide();
//                            $('.level').each(function(){
//                                var levelNum=$(this).attr('levelNum');
//                                $(this).animate({
//                                    'width':levelNum
//                                },800)
//                            });
//                            //会员存款
//                            $('.bankchoose_list li:gt(5)').hide();
//                        }
//                        if(statusTxt=="error"){
//                            alert("Error: "+xhr.status+": "+xhr.statusText);
//                            $('.loading_shadow').hide();
//                        }
//
//                    })
//                })

                //基本信息 刷新账号
                $('.user_con').on('click','.gameroom_list .refresh',function(){
                    var _this=$(this);
                    _this.css({
                        'background':'url({{ asset('/web/images/h-u-loading2.gif') }}) no-repeat center center'
                    })
                    $.ajax({
                        type : 'POST',
                        url : 'http://219.140.116.128:10000/interfaceservice/info/getInfo',
                        data : '{"method":"getNotificationList","params":{"token":"F4D27E195FAD795C05666200794F7208","startNum":"1","rowNum":100}}',
                        contentType : "application/json; charset=utf-8",
                        success : function(data){
                            _this.css({
                                'background':'url({{ asset('/web/images/bg-ico.png') }}) no-repeat center center',
                                'background-position': '-80px -102px'
                            })
                        },
                        error: function (err, status) {
                            console.log(err)
                        }
                    })
                })



            })
        })(jQuery)
    </script>
@endsection
@section('after.js')
    <script src="{{ asset('/web/js/common.js') }}"></script>
@endsection