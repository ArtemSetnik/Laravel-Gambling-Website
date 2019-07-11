<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="{{ asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>Alexander Pierce</p>--}}
                {{--<!-- Status -->--}}
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
              {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">NG.</li>
            <!-- Optionally, you can add icons to the links -->
            <li @if($active_route == 'admin.index') class="active" @endif><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> <span>{{  trans('words.background_home') }}</span></a></li>
            @foreach(config('admin_menu') as $k => $item)
                    @if ($item['is_hide'] == 1)
                    <li class="treeview" id="{{$k}}">
                        <a @if($item['router']) href="{{ route($item['router']) }}" @else href="#" @endif>
                            <i class="{{ $item['icon'] }}"></i>
                            <span>{{ trans($item['name']) }}</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                                <small class="label pull-right bg-green tip_msg"></small>
                            </span>
                            {{--<span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>--}}
                        </a>

                        @if(count($item['submenus']) > 0)
                            <ul class="treeview-menu">
                                @foreach($item['submenus'] as $v)
                                    @if($v['router'] == 'ctr.index')
                                        <li ><a @if($v['router']) class="disabled ctr-l" href="javascript:;" @else href="javascript:;" @endif><i class="fa fa-circle-o"></i> {{ $v['title'] }}</a></li>
                                    @elseif (($_user->is_super_admin || in_array($v['router'], $_user_routers)))
                                    <li @if($active_route == $v['router']) class="active" @endif><a @if($v['router']) href="{{ route($v['router']) }}" @else href="javascript:;" @endif><i class="fa fa-circle-o"></i> {{ trans($v['title']) }}
                                            <span class="pull-right-container">
                  <span class="label bg-green pull-right tip_msg_sk"></span>
                </span>
                                        </a>

                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    @endif
            @endforeach
            <script>
                $(function(){
                    $('.ctr-l').click(function(){
                        layer.alert('请联系销售人员开通');
                    })

                })
            </script>


            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>微信管理</span>--}}
            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{ route('weixin.menu.index') }}"><i class="fa fa-circle-o"></i>微信菜单</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>{{  trans('words.translate') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL('admin/lang/en') }}"><i class="fa fa-circle-o"></i>{{  trans('words.english') }}</a></li>
                    <li><a href="{{ URL('admin/lang/zh_cn') }}"><i class="fa fa-circle-o"></i>{{  trans('words.chinese') }}</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<script>
    $(function(){
        $('.treeview').each(function(e){
            var li_a_num = $(this).find('.active').length
            if (li_a_num > 0)
                $(this).addClass('active')
        })
    })
</script>