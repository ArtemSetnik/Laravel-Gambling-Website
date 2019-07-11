<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banners;
use App\Models\SystemConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
class SystemConfigController extends Controller
{
    public function index()
    {
        $data = SystemConfig::findOrFail(1);

        $banners = Banners::all();

        //dump($data->toArray());
        return view('admin.system_config.index', compact('data', 'banners'));
    }

    public function update(Request $request, $id)
    {
        $mod = SystemConfig::findOrFail($id);
        $alipay_qrcode = $request->get('alipay_qrcode');
        if($alipay_qrcode){
            $alipay_qrcode = implode(',',$alipay_qrcode);
        }
        $wechat_qrcode = $request->get('wechat_qrcode');
        if($wechat_qrcode){
            $wechat_qrcode = implode(',',$wechat_qrcode);
        }
        $qq_qrcode = $request->get('qq_qrcode');
        if($qq_qrcode){
            $qq_qrcode = implode(',',$qq_qrcode);
        }
        $data = $request->all();

        if($alipay_qrcode){
            $data['alipay_qrcode'] = $alipay_qrcode;
        }
        if($wechat_qrcode){
            $data['wechat_qrcode'] = $wechat_qrcode;
        }
        if($qq_qrcode) {
            $data['qq_qrcode'] = $qq_qrcode;
        }

        $mod->update($data);

        if ($request->get('u'))
            return responseSuccess('', '', $request->get('u'));

        return responseSuccess('', '', route('system_config.index'));
    }
}
