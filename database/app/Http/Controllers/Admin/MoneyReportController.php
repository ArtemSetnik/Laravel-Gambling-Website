<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Models\Recharge;
use App\Models\Drawing;
use App\Models\Dividend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoneyReportController extends Controller{
    
    public function index(Request $request){
        $mod = new Member();
        $recharge = new Recharge();
        $drawing = new Drawing();
        $dividend = new Dividend();
        $dividend_bak = new Dividend();
        $member_list =$name = $start_at = $end_at ='';

        if($request->has('type')){
            if($request->get('type') == 0){
                $start_at = date('Y-m-d H:i:s',mktime(0,0,0,date('m'),date('d')-3,date('Y')));
            }elseif ($request->get('type') == 1) {
                $start_at = date('Y-m-d H:i:s',mktime(0,0,0,date('m'),date('d')-7,date('Y')));
            }           
            elseif ($request->get('type') == 2) {
                $start_at = date('Y-m-d H:i:s',mktime(0,0,0,date('m'),date('d')-15,date('Y')));
            }
            elseif ($request->get('type') == 3) {
                $start_at = date('Y-m-d H:i:s',mktime(0,0,0,date('m'),date('d')-30,date('Y')));
            }
            $end_at = date('Y-m-d H:i:s',mktime(0,0,0,date('m'),date('d'),date('Y')));
            //$mod = $mod->where('created_at', '>=', $start_at)->where('created_at', '<=',$end_at);
            $recharge = $recharge->where('created_at', '>=', $start_at)->where('created_at', '<=',$end_at);
            $drawing = $drawing->where('created_at', '>=', $start_at)->where('created_at', '<=',$end_at);
            $dividend = $dividend->where('created_at', '>=', $start_at)->where('created_at', '<=',$end_at);
            $dividend_bak = $dividend_bak->where('created_at', '>=', $start_at)->where('created_at', '<=',$end_at);
            //$a_list = $dividend->toSql();
            $member_list = $this->a_array_unique(array_merge($dividend->select(['member_id'])->get()->toArray(),$recharge->select(['member_id'])->get()->toArray(),$drawing->select(['member_id'])->get()->toArray()));
            
        }else{

            if ($request->has('name'))
            {
                $name = $request->get('name');
                //$mod = $mod->where('name', 'like', "%$name%");
                $recharge = $recharge->where('name', 'like', "%$name%");
                $drawing = $drawing->where('name', 'like', "%$name%");
                $m_list = Member::where('name', 'LIKE', "%$name%")->pluck('id');
                $dividend = $dividend->whereIn('member_id', $m_list);
                $dividend_bak = $dividend_bak->whereIn('member_id', $m_list);
            }
            if ($request->has('start_at'))
            {
                $start_at = $request->get('start_at');
                //$mod = $mod->where('created_at', '>=', $start_at);
                $recharge = $recharge->where('created_at', '>=', $start_at);
                $drawing = $drawing->where('created_at', '>=', $start_at);
                $dividend = $dividend->where('created_at', '>=', $start_at);
                $dividend_bak = $dividend_bak->where('created_at', '>=', $start_at);
            }
            if ($request->has('end_at'))
            {
                $end_at = $request->get('end_at');
                //$mod = $mod->where('created_at', '<=',$end_at);
                $recharge = $recharge->where('created_at', '<=',$end_at);
                $drawing = $drawing->where('created_at', '<=',$end_at);
                $dividend = $dividend->where('created_at', '<=',$end_at);
                $dividend_bak = $dividend_bak->where('created_at', '<=',$end_at);
            }
            $member_list = $this->a_array_unique(array_merge($dividend->select(['member_id'])->get()->toArray(),$recharge->select(['member_id'])->get()->toArray(),$drawing->select(['member_id'])->get()->toArray()));
        }
        $total_recharges = $recharge->where('status','=','2')->sum('money');
        $total_drawings = $drawing->where('status','=','2')->sum('money');
        $total_fs = $dividend->where('type','=','3')->sum('money');
        $total_dividend = $dividend_bak->whereIn('type',array(1,2,4))->sum('money');

        //$a_list = $dividend_bak->toSql();
        //$a_list = $dividend->whereIn('type',array(1,2,4))->toSql();
        $total_yinli = $total_recharges - $total_drawings - $total_fs - $total_dividend;

        $data = $mod->whereIn('id',$member_list)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        return View("admin.money_report.index",compact('data','name', 'start_at', 'end_at','total_recharges','total_drawings','total_fs','total_dividend','total_yinli'));
    }

    public function a_array_unique($array){
        $out = array();
        foreach ($array as $key=>$value) {
            if (!in_array($value, $out)){
                $out[$key] = $value;
            }
        }

        $out = array_values($out);
        return $out;
    }
}