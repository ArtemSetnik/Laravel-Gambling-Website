<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">NG</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('daili.index') }}"><i class="fa fa-dashboard"></i> <span>{{__('words.Agent_Home')}}</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>{{__('words.Click_to_view')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if($active_route == 'daili.member_daili') class="active" @endif><a href="{{ route('daili.member_daili') }}"><i class="fa fa-circle-o"></i> {{__('words.Promotion_URL')}}</a></li>
                    <li @if($active_route == 'daili.member_offline_sy') class="active" @endif><a href="{{ route('daili.member_offline_sy') }}"><i class="fa fa-circle-o"></i> {{__('words.Agent_report')}}</a></li>
                    <li @if($active_route == 'daili.member_offline') class="active" @endif><a href="{{ route('daili.member_offline') }}"><i class="fa fa-circle-o"></i> {{__('words.offline_member')}}</a></li>
                    <li @if($active_route == 'daili.member_offline_recharge') class="active" @endif><a href="{{ route('daili.member_offline_recharge') }}"><i class="fa fa-circle-o"></i> {{__('words.member_deposit_record')}}</a></li>
                    <li @if($active_route == 'daili.member_offline_drawing') class="active" @endif><a href="{{ route('daili.member_offline_drawing') }}"><i class="fa fa-circle-o"></i> {{__('words.member_withdrawal_record')}}</a></li>
                    <li @if($active_route == 'daili.member_offline_dividend') class="active" @endif><a href="{{ route('daili.member_offline_dividend') }}"><i class="fa fa-circle-o"></i> {{__('words.member_receives_bonus_record')}}</a></li>
                    <li @if($active_route == 'daili.member_offline_game_record') class="active" @endif><a href="{{ route('daili.member_offline_game_record') }}"><i class="fa fa-circle-o"></i> {{__('words.member_wins_losses_report')}}</a></li>
                    <li @if($active_route == 'daili.daili_money_log') class="active" @endif><a href="{{ route('daili.daili_money_log') }}"><i class="fa fa-circle-o"></i>{{__('words.commission_record')}} </a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>{{  trans('words.translate') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL('daili/lang/en') }}"><i class="fa fa-circle-o"></i>{{  trans('words.english') }}</a></li>
                    <li><a href="{{ URL('daili/lang/zh_cn') }}"><i class="fa fa-circle-o"></i>{{  trans('words.chinese') }}</a></li>
                    <li><a href="{{ URL('daili/lang/malaya') }}"><i class="fa fa-circle-o"></i>{{  trans('words.malay') }}</a></li>
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