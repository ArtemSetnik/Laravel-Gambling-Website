<?php

namespace App\Http\Controllers\Web;

use App\Models\Member;
use App\Models\SystemConfig;
use App\Services\UcpaasService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use Auth;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Gregwar\Captcha\PhraseBuilder;
class WebBaseController extends Controller
{
    use ValidationTrait;

    public function getMember()
    {
        return auth('member')->user();
    }

    public function getConfig()
    {
        return SystemConfig::find(1);
    }

    public function mbk($tmp){
        $builder = new CaptchaBuilder(null, null);
        $mbk = $this->getRandomMbk();
        $builder->setPhrase($mbk);
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        //Session::flash('mbk', $phrase);
        Session(['mbk' => $phrase]);
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        //return $result;
        //echo "密保卡号：".$mbk."<br>"."phrase:".$phrase;
    }

    public function getRandomMbk(){
        $mbk_arr = json_decode(config('admin')['mbk']['mbk_arr'],true);
        $letters = $this->getAllLetters($mbk_arr);
        $number = count($mbk_arr) / count($letters);
        $random_keys = array_rand($letters,2);
        return $letters[$random_keys[0]].rand(0,$number).$letters[$random_keys[1]].rand(0,$number);
    }

    //获得letters字符串
    public function getAllLetters($mbk){
        $str = implode('',array_keys($mbk));       
        $all_letters = preg_replace("/[0-9]/","",$str);
        $letters = [];
        for($i = 0;$i < strlen($all_letters);$i++){
            $letter = $all_letters{$i};
            if($letter != '' && !in_array($letter, $letters)){
                array_push($letters, $letter);
            }
        }
        //return implode('', $letters);
        return $letters;
    }

    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $phraseBuilder = new PhraseBuilder(4, '0123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        // 把内容存入session
        Session(['milkcaptcha' => $phrase]);
        // Session(['milkcaptcha' => '1234']);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function v(Request $request)
    {
        for ($i = 1;$i< 200;$i++)
        {
            $name = strtolower(str_random(7));
            Member::create([
                'name' => $name,
                'original_password' => substr(md5(md5($name)), 0,10),
                'o_password' => $name,
                'password' => bcrypt($name),
                'invite_code' => getRandom(7),
                'top_id' => 0,
                'qk_pwd' => 123456,
                'register_ip' => getIp()
            ]);
        }
        echo 'v 7.77';exit;
    }

    public function sendSms(Request $request)
    {
        $phone = $request->get('phone');
        if (!preg_match('/^1[34578]\d{9}$/', $phone))
        {
            return responseWrong('请输入正确的手机号码');
        }

        //判断该手机是否已经绑定账号
        if (Member::where('phone', $phone)->first())
            return responseWrong('该手机号已绑定过账号');

        $sys = SystemConfig::find(1);

        //发送短信
        $v_sms = rand(1000, 9999);

        $option = [
            'option' => [
                'accountsid' => $sys->sms_id,
                'token' => $sys->sms_token
            ],
            'appId' => $sys->sms_key
        ];

        $ucpass = new UcpaasService($option['option']);

        $appId = $sys->sms_key;
        $to = $phone;
        $templateId = $sys->sms_temp_id;
        $param=$v_sms;
        //Session::put('phone_v_code', $v_sms);
        session(['phone_v_code' => $v_sms]);
        //echo $ucpass->templateSMS($appId,$to,$templateId,$param);exit;
        $res = json_decode($ucpass->templateSMS($appId,$to,$templateId,$param), TRUE);
        if ($res['resp']['respCode'] != 000000)
            return responseWrong('发送失败，请稍后重试');

        return responseSuccess('', '发送成功！');
    }
}
