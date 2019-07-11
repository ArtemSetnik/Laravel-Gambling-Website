<!-- 底部 -->
<div id="hfooter">
    <!--footer start-->
    <div class="footer" style="clear: both;">
        <div class="w1000">
            <div style="float: left; width: 554px; margin-top: 20px;">
                {{--<img src="{{ asset('/web/images/b1.png') }}" style="display: inline-block">--}}
                <img src="{{ asset('/web/images/b2.png') }}" style="display: inline-block">
                <img src="{{ asset('/web/images/b3.png') }}" style="display: inline-block">
            </div>
            <div class="footright">
                <a href="javascript:;" class="aboutUs_modal">{{ __('ft.About_Us') }}</a> |
                <a href="javascript:;" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')">{{ __('ft.Contact_Us') }}</a> |
                <a href="javascript:;" class="daili_apply">{{ __('ft.Agency_cooperation') }}</a> |
                <a href="javascript:;" class="cunkuanHelp_modal">{{ __('ft.Deposit_Help') }}</a> |
                <a href="javascript:;" class="qukuanHelp_modal">{{ __('ft.Withdraw_Help') }}</a> |
                <a href="javascript:;" class="normalQues_modal">{{ __('ft.Common_Problem') }}</a>
                <br> Copyrights (c)
                {{ $_system_config->site_name }}
                24{{ __('ft.Hour_customer_service') }}QQ：{{ $_system_config->qq }}
            </div>
        </div>
    </div>
    <!--footer end-->
    <!--index footer start-->
    <div class="indexbottom">
        <div class="describe">
            <div class="desitem item1">
                <h1>{{ __('ft.information_Center') }}</h1>
                <h3>{{ __('ft.Promotions') }}</h3>
                <p>{{ $_system_config->site_name }}{{ __('ft.Members_can_enjoy_the_deposit_bonus_and_return_water') }}</p>
                <h3>{{ __('ft.Common_Problem') }}</h3>
                <p>{{ __('ft.Answer_your_questions_instantly_with_FAQs') }} {{ $_system_config->site_name }}{{ __('ft.Accounts_deposits_withdrawals_questions_about_betting_and_gameplay') }} </p>
                <h3>{{ __('ft.Contact_Us') }}</h3>
                <p>{{ __('ft.You_can_contact_us_through_7_24_hours_online_customer_service') }}</p>
                <h3>{{ __('ft.Partner') }}</h3>
                <p>{{ __('ft.Join') }}Sun Game{{ __('ft.Partners_you_can_use_your_network_to_easily_earn_high_commissions_every_month') }}</p>
                <h3>{{ __('ft.registered') }}</h3>
                <p>{{ __('ft.You_only_need_to_click_Open_an_account_now') }} {{ $_system_config->site_name }}{{ __('ft.Personal_account') }} </p>
                <h3>{{ __('ft.Deposit_and_withdrawal') }}</h3>
                <p>{{ __('ft.You_can_easily_make_deposits_and_withdrawals') }}</p>
            </div>

            <div class="desitem item2">
                <h1>{{ __('ft.product') }}</h1>
                <h3>{{ __('ft.Sports_betting') }}</h3>
                <p>{{ $_system_config->site_name }}{{ __('ft.A_variety_of_sports_events_are_available') }}{{ $_system_config->site_name }}{{ __('ft.There_are_many_outlets_high_water_odds') }}</p>
                <h3>{{ __('ft.Sports_betting_project') }}</h3>
                <p>{{ __('ft.Categories_include_football_tennis_basketball') }}</p>
                <h3>{{ __('ft.Rolling_ball') }}</h3>
                <p>{{ __('ft.After_launching_the_new_sports_betting_page') }}</p>
                <h3>{{ __('ft.Live_Casino') }}</h3>
                <p>{{ __('ft.Has_many_of_the_most_popular_live_casino_systems') }}{{ $_system_config->site_name }}{{ __('ft.The_casino_includes_games_such_as_live_baccarat') }}</p>
                <h3>{{ __('ft.Slot_machines_and_video_games') }}</h3>
                <p>{{ __('ft.A_variety_of_traditional_folk_themed_slot_machines') }}</p>
                <h3>{{ __('ft.Poker_King_game') }}</h3>
                <p>{{ $_system_config->site_name }}{{ __('ft.Sincerely_the_Poker_Hall_is_designed_for_Texas_Hold') }}</p>
            </div>

            <div class="desitem item3">
                <h1>{{ __('ft.Betting_information') }}</h1>
                <h3>{{ __('ft.Promotions') }}</h3>
                <p>{{ __('ft.Instantly_understand') }}{{ $_system_config->site_name }}{{ __('ft.Instant_and_final_results_of_all_sports_events') }}</p>
                <h3>{{ __('ft.Sports_betting_rules') }}</h3>
                <p>{{ __('ft.All_in') }}{{ $_system_config->site_name }}{{ __('ft.All_sports_betting_bets_are_subject') }}</p>
                <h3>{{ __('ft.Live_Casino_Game_Introduction') }}</h3>
                <p>{{ __('ft.Provide_detailed_game_introductions_for_various_casino_venues') }}</p>
                <h3>{{ __('ft.Poker_rules') }}</h3>
                <p>{{ __('ft.All_in') }}{{ $_system_config->site_name }}{{ __('ft.All_poker_game_bets_made_must_comply') }}</p>
                <h3>{{ __('ft.betting_record') }}</h3>
                <p>{{ __('ft.Through_the_game_system_or_user_center') }}</p>
                <h3>{{ __('ft.Responsible_betting') }}</h3>
                <p>{{ __('ft.We_actively_promote_responsible_gambling_and_strongly') }}</p>
            </div>

        </div>

    </div>
    <!--index footer end-->

</div>


<div id="dailiModal" class="modal modal-login modal-daili">
    <div class="modal-content">
        <form method="POST" action="{{ route('member.post_agent_apply') }}">
            <a href="" class="close bg-icon"></a>
            <div class="modal-login_form">
                <h2>{{ __('ft.Agent_application') }}</h2>
                <div class="modal-login_line">
                    <input type="text" placeholder="Email" required name="qq">
                </div>
                <div class="modal-login_line">
                    <input type="text" placeholder="{{ __('ft.contact_number') }}" required name="phone">
                </div>
                <div class="modal-login_line" style="height: auto;margin-bottom: 15px">
                    <textarea name="about" placeholder="{{ __('ft.Fill_in_the_application') }}"></textarea>
                </div>
                <div class="modal-login_line">
                    <button class="modal-login_submit ajax-submit-btn" type="button">{{ __('ft.determine') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    var m = "{{ $_member }}";
    var u = "{{ route('web.login') }}";
    (function($){
        $(function(){
            $('.daili_apply').on('click',function(){
                if (!m)
                {
                    location.href=u
                }else{
                    $('#dailiModal').modal();
                }
            })
        })
    })(jQuery)
</script>



<div id="aboutUs" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">{{ __('ft.determine') }}</a>
        </div>
    </div>
</div>
<div id="cunkuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">{{ __('ft.determine') }}</a>
        </div>
    </div>
</div>
<div id="qukuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">{{ __('ft.determine') }}</a>
        </div>
    </div>
</div>
<div id="normalQues" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">{{ __('ft.determine') }}</a>
        </div>
    </div>
</div>
<div class="yk_backdrop"></div>

<script>
    (function($){
        $(function(){
            $('.aboutUs_modal').on('click',function(){
                $('#aboutUs').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'关于我们',
                    content:'{!! $about1->content !!}'
                });
            });
            $('.cunkuanHelp_modal').on('click',function(){
                $('#cunkuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'存款帮助',
                    content:'{!! $about2->content !!}'
                });
            });
            $('.qukuanHelp_modal').on('click',function(){
                $('#qukuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'取款帮助',
                    content:'{!! $about3->content !!}'
                });
            });
            $('.normalQues_modal').on('click',function(){
                $('#normalQues').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'常见问题',
                    content:'{!! $about4->content !!}'
                });
            });
        });
    })(jQuery);
</script>