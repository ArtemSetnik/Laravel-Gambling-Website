<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Api;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use App\Services\SelfService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Auth;
use App\Models\Member;
use Session;
use App\Models\MemberLoginLog;
class ViewServiceProvider extends ServiceProvider
{
    protected $auth_user,$admin_aside,$admin,$auth_member,$web,$web_header,$auth_daili,$daili_aside,$wap,$system_notice,$web_footer;

    public function __construct()
    {
        $this->auth_user = [
            'admin.layouts.header',
            'admin.layouts.aside',
            'admin.user.*',
            'admin.index',
        ];
        $this->auth_member = [
            'web.*',
            'member.layouts.header',
            'member.*',
        ];

        $this->auth_daili = [
            'daili.*',
        ];

        $this->daili_aside = [
            'daili.layouts.aside',
        ];

        $this->admin_aside = [
            'admin.layouts.aside'
        ];

        $this->admin = [
            'admin.*'
        ];

        $this->web = [
            'web.*',
            'member.*'
        ];

        $this->wap = [
            'wap.*',
        ];

        $this->web_header = [
            'web.*',
            'member.*'
        ];

        $this->system_notice = [
            'web.*',
            'web.layouts.header',
            'wap.index'
        ];

        $this->web_footer = [
            'web.layouts.footer',
            'member.layouts.footer'
        ];
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer($this->auth_user, function ($view) {
            $_user = Auth::user();
            $view->with(compact('_user'));
        });

        view()->composer($this->system_notice, function ($view) {
            $_system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
            $view->with(compact('_system_notices'));
        });

        view()->composer('*', function ($view) {
            $_system_config= SystemConfig::find(1);
            $_api_list = Api::where('on_line', 0)->orderBy('created_at', 'desc')->pluck('api_name', 'id')->toArray();
            $view->with(compact('_system_config', '_api_list'));
        });

        view()->composer($this->auth_daili, function ($view) {
            $mod = Session::get('daili_login_info');
            $_daili = $mod ? Member::findOrFail($mod->id):'';
            $view->with(compact('_daili'));
        });

        view()->composer($this->daili_aside,function($view){

            $active_route = Route::currentRouteName();
            $view->with(compact('active_route'));
        });

        view()->composer($this->admin_aside,function($view){

            $active_route = Route::currentRouteName();
            $user = Auth::user();
            $_user_routers = $user->is_super_admin == 1?[]:Auth::user()->role->routers()->pluck('router')->toArray();
            $view->with(compact('active_route', '_user_routers'));
        });

        view()->composer($this->admin, function ($view) {
            $_daili_list = Member::where('is_daili', 1)->pluck('name', 'id');
            $_online_member_array = array_unique(MemberLoginLog::where('created_at', '>=', date('Y-m-d H:i:s', strtotime('-3 hours')))->pluck('member_id')->toArray());
            $view->with(compact('_daili_list', '_online_member_array'));
        });

        view()->composer($this->web, function ($view) {

            $web_route = Route::currentRouteName();
            $_member = auth('member')->user();
//            $center_res = json_decode((new SelfService())->wallet_balance($_member->name),true);
//            $center_money = $center_res['data'];
//
//            $_member->all_money= sprintf('%.2f',$_member->money + $center_money);

            //dd($_member->toArray());
            $view->with(compact('web_route', '_member'));
        });

        view()->composer($this->wap, function ($view) {
            $_member = auth('member')->user()?:'';
            $_wap_router = Route::currentRouteName();
            $view->with(compact( '_member','_wap_router'));
        });

        view()->composer($this->web_header, function ($view) {
            $member = auth('member')->user();
            $_not_read_message_num = $member?$member->messages()->where('is_read', 0)->count():0;
            $view->with(compact('_not_read_message_num'));
        });

        view()->composer($this->web_footer, function ($view) {
            $about1 = About::where('type', 1)->first();
            $about2= About::where('type', 2)->first();
            $about3 = About::where('type', 3)->first();
            $about4 = About::where('type', 4)->first();
            $about5 = About::where('type', 5)->first();
            $about6 = About::where('type', 6)->first();
            $view->with(compact('about1','about2','about3','about4','about5','about6'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
