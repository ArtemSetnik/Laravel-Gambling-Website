@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/pocker.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/js/jquery.sweet-modal.min.css') }}" />
    <script src="{{ asset('/web/js/jquery.sweet-modal.min.js') }}"></script>
    <div class="notice-row" style="top: 49px;">
        <div class="noticeBox">
            <div class="w">
                <div class="title">
                    {{ __('ft.Latest_Announcement') }}：
                </div>
                <div class="bd2">
                    <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                        <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()"
                                 onmouseover="this.stop()">
                            @foreach($_system_notices as $v)
                                <div class="module" style="display: inline-block;">
                                    <span>~{{ $v->title }}~</span>
                                    <span>{{ $v->content }}</span>
                                </div>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container" id="background">
            <div class="row gamerow">
                <div class="col-md-6">
                    <img src="{{asset('/web/images/poker/kiss.png')}}">
                </div>
                <div class="col-md-6 input_set">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id1" value="{{$member->game_id1}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass1" value="{{$member->game_pass1}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" id="balance1" class="balance" value="{{$member->game_balance1}}" readonly>

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" style="margin-left: 20px" onclick="deposit(1)">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" style="margin-left: 10px" onclick="withdraw(1)">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>
            </div>
            <div class="hr_cls" style="padding: 0px 28px;">
                <hr style="border-width: 1px; border-color: #2e2e2e">
            </div>

            <div class="row gamerow">
                <div class="col-md-6">
                    <img src="{{asset('/web/images/poker/newtown.png')}}">
                </div>
                <div class="col-md-6 input_set">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id2" value="{{$member->game_id2}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass2" value="{{$member->game_pass2}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" class="balance" id="game_balance2" value="{{$member->game_balance2}}" readonly>

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(2)" style="margin-left: 20px">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(2)" style="margin-left: 10px">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>
            </div>
            <div class="hr_cls" style="padding: 0px 28px;">
                <hr style="border-width: 1px; border-color: #2e2e2e">
            </div>

            <div class="row gamerow">
                <div class="col-md-6">
                    <img src="{{asset('/web/images/poker/joker.png')}}">
                </div>
                <div class="col-md-6 input_set">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id3" value="{{$member->game_id3}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass3" value="{{$member->game_pass3}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" class="balance" id="game_balance3" value="{{$member->game_balance3}}" readonly>

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(3)" style="margin-left: 20px">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(3)" style="margin-left: 10px">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>
            </div>
            <div class="hr_cls" style="padding: 0px 28px;">
                <hr style="border-width: 1px; border-color: #2e2e2e">
            </div>
            <div class="row gamerow">
                <div class="col-md-6">
                    <img src="{{asset('/web/images/poker/mega.png')}}">
                </div>
                <div class="col-md-6 input_set">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id4" value="{{$member->game_id4}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass4" value="{{$member->game_pass4}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" class="balance" id="game_balance4" value="{{$member->game_balance4}}" readonly>

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(4)"  style="margin-left: 20px">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(4)" style="margin-left: 10px">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>
            </div>
            <div class="hr_cls" style="padding: 0px 28px;">
                <hr style="border-width: 1px; border-color: #2e2e2e">
            </div>
            <div class="row gamerow">
                <div class="col-md-6">
                    <img src="{{asset('/web/images/poker/rollex.png')}}">
                </div>
                <div class="col-md-6 input_set">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id5" value="{{$member->game_id5}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass5" value="{{$member->game_pass5}}" readonly>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" class="balance" id="game_balance5" value="{{$member->game_balance5}}" readonly>

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(5)" style="margin-left: 20px">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(5)" style="margin-left: 10px">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>
            </div>
        </div>



        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
            </section>
        </div>

    </div>
    <script>
        $(function () {
            $('.en-gamelist li').click(function () {
                $(this).addClass('active');
                $(this).siblings('li').removeClass('active');
            })
        })
        function getGameList(plat_type) {
            var url = "{{route('ng.playGame')}}?plat_type=" + plat_type + "&game_type=7";
            $("#gameFrame").attr("src", url);//
        }

        function deposit(api_id) {
            var balance = $("#game_balance"+api_id).val();
            var money = $(".yellowCr").text();


            $.sweetModal.prompt('Do you want to deposit ?', null, null, function(score) {
                if(isNaN(score) || score == ""){
                    $.sweetModal({
                        content: 'Type Correct Score!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(score) <= 0){
                    $.sweetModal({
                        content: 'the score should be big than 0 !',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(money) < parseInt(score)){
                    $.sweetModal({
                        content: 'you don\'t have enough money!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }

                setscore(api_id,score,0);
            });

        }

        function withdraw(api_id) {
            var balance = $("#game_balance"+api_id).val();

            $.sweetModal.prompt('Do you want to withdraw ?', null, null, function(score) {
                if(isNaN(score) || score == ""){
                    $.sweetModal({
                        content: 'Type Correct Score!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(score) <= 0){
                    $.sweetModal({
                        content: 'the score should be big than 0 !',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                var bal = parseFloat(balance);

                if( balance == "" || parseInt(bal) < parseInt(score)){
                    $.sweetModal({
                        content: 'you don\'t have enough balance !',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                setscore(api_id,score,1);
            });

        }

        function setscore(api_id,score,mode) {
            var game_id = $("#game_id"+api_id).val();
            var game_pass = $("#game_pass"+api_id).val();
            var detailLoad = layer.load(2, {
                shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
                //shade:false
            });

            $.ajax({
                type: "GET",
                url: "{{route('web.setscore')}}",
                data: {api_id:api_id,game_id: game_id,game_pass:game_pass, score: score,mode:mode},
                success: function (data) {
                    layer.close(detailLoad);
                    if(data == "error"){
                        $.sweetModal({
                            content: 'unfortunately failed !',
                            title: 'Oh noes…',
                            icon: $.sweetModal.ICON_ERROR,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });

                    }else if(data.indexOf("@@") != -1){
                        data = data.replace("@@","");
                        $.sweetModal({
                            content: data,
                            title: 'Oh noes…',
                            icon: $.sweetModal.ICON_ERROR,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });
                    }else{
                        $("#balance"+api_id).val(data);
                        $.sweetModal({
                            content: 'Successfully set!',
                            title: 'success',
                            icon: $.sweetModal.ICON_SUCCESS,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });
                        location.reload(true);
                    }

                }
            });


        }
    </script>

@endsection