<?php

namespace App\Http\Controllers\Daili;

use App\Models\Dividend;
use App\Models\Drawing;
use App\Models\Recharge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use App\Models\Member;
use session;
class MemberDailiController extends DailiBaseController
{
    use ValidationTrait;
    public function index(Request $request)
    {
        $mod = new Member();

        $data = $mod->where('is_daili', 1)->where('id', $this->getDaili()->id)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('daili.member_daili.index', compact('data', 'name'));
    }

    public function member_offline_sy(Request $request)
    {
        $start_at = $end_at =  '';

        $m_list = Member::where('top_id', $this->getDaili()->id)->pluck('id');
        $recharge_mod = new Recharge();
        $drawing_mod = new Drawing();
        $dividend_mod = new Dividend();

        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $recharge_mod = $recharge_mod->where('created_at', '>=', $start_at);
            $drawing_mod = $drawing_mod->where('created_at', '>=', $start_at);
            $dividend_mod = $dividend_mod->where('created_at', '>=', $start_at);
        }

        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $recharge_mod = $recharge_mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($end_at)));
            $drawing_mod = $drawing_mod->where('created_at', '>=', date('Y-m-d 23:59:59', strtotime($end_at)));
            $dividend_mod = $dividend_mod->where('created_at', '>=', date('Y-m-d 23:59:59', strtotime($end_at)));
        }

        $total_recharge = $recharge_mod->where('status', 2)->whereIn('member_id', $m_list)->sum('money');
        $recharge_count = $recharge_mod->where('status', 2)->whereIn('member_id', $m_list)->count();

        $total_drawing = $drawing_mod->where('status', 2)->whereIn('member_id', $m_list)->sum('money');
        $drawing_count = $drawing_mod->where('status', 2)->whereIn('member_id', $m_list)->count();

        $total_dividend = $dividend_mod->whereIn('member_id', $m_list)->sum('money');
        $dividend_count = $dividend_mod->whereIn('member_id', $m_list)->count();


        return view('daili.member_daili.member_offline_sy', compact('start_at', 'end_at', 'total_recharge', 'recharge_count', 'total_drawing', 'drawing_count', 'total_dividend', 'dividend_count'));
    }

    /**
     *
     * 编辑
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data= Member::findOrFail($id);

        return view('admin.member_daili.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $member= Member::findOrFail($id);

        $member->update($request->all());

        return responseSuccess('','', route('member_daili.index'));
    }
    public function translate($locale) {
        if (!in_array($locale, ['en', 'zh_cn','malaya'])){
            $locale = 'zh_cn';
        }
        Session::put('locale', $locale);
        return redirect()->back();
        
    }
}
