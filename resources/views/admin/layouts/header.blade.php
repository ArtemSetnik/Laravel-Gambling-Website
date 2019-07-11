<header class="main-header">

    <!-- Logo -->
    <a href="javascript:;" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>管理</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ $_system_config->site_name }} {{  __('words.management_background')}}</b></span>
    </a>


    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                {{--<li class="dropdown messages-menu">--}}
                    {{--<!-- Menu toggle button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-envelope-o"></i>--}}
                        {{--<span class="label label-success">4</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">You have 4 messages</li>--}}
                        {{--<li>--}}
                            {{--<!-- inner menu: contains the messages -->--}}
                            {{--<ul class="menu">--}}
                                {{--<li><!-- start message -->--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="pull-left">--}}
                                            {{--<!-- User Image -->--}}
                                            {{--<img src="{{ asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">--}}
                                        {{--</div>--}}
                                        {{--<!-- Message title and timestamp -->--}}
                                        {{--<h4>--}}
                                            {{--Support Team--}}
                                            {{--<small><i class="fa fa-clock-o"></i> 5 mins</small>--}}
                                        {{--</h4>--}}
                                        {{--<!-- The message -->--}}
                                        {{--<p>Why not buy a new awesome theme?</p>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end message -->--}}
                            {{--</ul>--}}
                            {{--<!-- /.menu -->--}}
                        {{--</li>--}}
                        {{--<li class="footer"><a href="#">See All Messages</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- /.messages-menu -->--}}

                {{--<!-- Notifications Menu -->--}}
                {{--<li class="dropdown notifications-menu">--}}
                    {{--<!-- Menu toggle button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-bell-o"></i>--}}
                        {{--<span class="label label-warning">10</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">You have 10 notifications</li>--}}
                        {{--<li>--}}
                            {{--<!-- Inner Menu: contains the notifications -->--}}
                            {{--<ul class="menu">--}}
                                {{--<li><!-- start notification -->--}}
                                    {{--<a href="#">--}}
                                        {{--<i class="fa fa-users text-aqua"></i> 5 new members joined today--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end notification -->--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- Tasks Menu -->--}}
                {{--<li class="dropdown tasks-menu">--}}
                    {{--<!-- Menu Toggle Button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-flag-o"></i>--}}
                        {{--<span class="label label-danger">9</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">You have 9 tasks</li>--}}
                        {{--<li>--}}
                            {{--<!-- Inner menu: contains the tasks -->--}}
                            {{--<ul class="menu">--}}
                                {{--<li><!-- Task item -->--}}
                                    {{--<a href="#">--}}
                                        {{--<!-- Task title and progress text -->--}}
                                        {{--<h3>--}}
                                            {{--Design some buttons--}}
                                            {{--<small class="pull-right">20%</small>--}}
                                        {{--</h3>--}}
                                        {{--<!-- The progress bar -->--}}
                                        {{--<div class="progress xs">--}}
                                            {{--<!-- Change the css width attribute to simulate progress -->--}}
                                            {{--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                {{--<span class="sr-only">20% Complete</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end task item -->--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="footer">--}}
                            {{--<a href="#">View all tasks</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ $_user->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                            <p>
                                {{ $_user->name }} - @if($_user->is_super_admin == 1){{__('words.super_administrator')}}@else{{ $_user->role->name }}@endif
                                <small>{{ $_user->created_at }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        {{--<li class="user-body">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /.row -->--}}
                        {{--</li>--}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.personal') }}" class="btn btn-default btn-flat">{{__('words.personal_information')}}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.login.out') }}" class="btn btn-default btn-flat">{{__('words.retreat_safely')}}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                {{--<li>--}}
                    {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </nav>
</header>

<audio id="sk" src="{{ asset('/backstage/audio/hk_notice.mp3') }}"></audio>
<audio id="tk" src="{{ asset('/backstage/audio/tk_notice.mp3') }}"></audio>
<audio id="tips" src="{{ asset('/backstage/audio/on_line_tips.mp3') }}"></audio>
<audio id="fs" src="{{ asset('/backstage/audio/fs.mp3') }}"></audio>
<script>
    var hk_url = "{{ route('admin.hk_notice') }}";
    var tk_url = "{{ route('admin.tk_notice') }}";
    var tips_url = "{{ route('admin.tips_on') }}";
    var fs_url = "{{route('admin.fs_notice')}}"
    $(function(){
        var fs_timer = setInterval(function(){
            $.ajax({
                url:fs_url,
                data:'',
                dataType:'json',
                type:'get',
                success:function(data){
                    var myDate = new Date();
                    var h = myDate.getHours();
                    var m =myDate.getMinutes();
                    var h_m = h+':'+m;
                    if(data.fs_time == h_m){
                        document.getElementById('fs').play();
                    }
                }
            })
        },20000);

        var sk_timer=setInterval(function(){
            $.ajax({
                url:hk_url,
                data:'',
                dataType:'json',
                type:'get',
                success:function(data){
                    if(data.status == 1){
                        $('#money').find('.tip_msg').text('new');
                        var rs = $('#money').find('.treeview-menu').find('li');
                        $(rs[0]).find('.tip_msg_sk').text('new');
                        document.getElementById('sk').play();

                        /*var rs = $('#money').find('.treeview-menu');
                        console.log(rs);*/
                    }
                }
            })
        },10000);
        var tk_timer=setInterval(function(){
            $.ajax({
                url:tk_url,
                data:'',
                dataType:'json',
                type:'get',
                success:function(data){
                    if(data.status == 1){
                        $('#money').find('.tip_msg').text('new');
                        var rs = $('#money').find('.treeview-menu').find('li');
                        $(rs[1]).find('.tip_msg_sk').text('new');
                        document.getElementById('tk').play();
                    }
                }
            })
        },10000);

        var tips=setInterval(function(){
            $.ajax({
                url:tips_url,
                data:'',
                dataType:'json',
                type:'get',
                success:function(data){
                    if(data.status == 1){
                        document.getElementById('tips').play();
                    }
                }
            })
        },10000);
    });
</script>