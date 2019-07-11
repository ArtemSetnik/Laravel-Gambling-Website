<?php
namespace App\Services;

use App\Models\Api;
use App\Services\CurlService;
class SelfService{
    public $pre;   // 玩家前缀
    public  $domain;
    public  $comId;
    public $comKey;
    public $gamePlatform;
    public $debug;
    public $salt ;
    public $betLimitCode;
    public $currencyCode;
    public $isspeed;
    public $isdemo;
    public $api_code;

    public function __construct()
    {
        $mod = Api::where('api_name', 'SELF')->first();
        $this->pre = $mod->prefix;// 玩家前缀
        $this->domain = $mod->api_domain;
        $this->api_id = $mod->api_id;
        $this->api_key = $mod->api_key;
        $this->gamePlatform = $mod->api_name;
        $this->debug = 0;
        $this->salt = $this->salt(5);
        $this->betLimitCode = 'A';
        $this->currencyCode = 'CNY';
        $this->isspeed = 0;
        $this->isdemo = 0;
    }


    public function register($api_code, $username,$password,$is_test = 0){
        /*$post_data = array(
            'api_id'=>$this->api_id,
            'api_key'=>$this->api_key,
            'api_code' => $api_code,
            'username' => $username,
            'password'=>$password,
            'betLimitCode'=>$this->betLimitCode,
            'currencyCode'=>$this->currencyCode,
            'isSpeed'=>$this->isspeed,
            'is_test'=>$is_test,
            'method'=>'register'
        );*/

        $plat_type = strtolower($api_code);
        $code = md5($this->api_key.$this->api_id.$plat_type.$username);
        $post_data = [
            'username' => $username,
            'plat_type' =>$plat_type,
            'sign_key' => $this->api_key,
            'code' => $code
        ];
        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/user/register';
        }else{
            $url = 'http://'.$this->domain.'/v1/user/register';
        }

        $receive = $this->send_post($url,$post_data);

        return $receive;
    }

    /**
     * @param $api_code 平台类型
     * @param $username 用户名
     * @param $password
     * @param $gameType 游戏代码
     * @param string $gameName
     * @param int $is_Mobile
     * @param string $gameId
     * @return int|string
     */
    public function login($api_code,$username,$password,$gameType,$gameName = '',$is_Mobile = 0,$lott_type='',$lang='en-us'){
        /*$post_data = array(
            'api_id'=>$this->api_id,
            'api_key'=>$this->api_key,
            'api_code' => $api_code,
            'username' => $username,
            'password'=>$password,
            'betLimitCode'=>$this->betLimitCode,
            'currencyCode'=>$this->currencyCode,
            'isSpeed'=>$this->isspeed,
            'isDemo'=>$this->isdemo,
            'method'=>'login',
            'gameType' => $gameType,
            'gameId' => $gameId,
            'gameName' => $gameName,
            'isMobile' => $is_Mobile
        );*/
        $plat_type = strtolower($api_code);
        $code = md5($this->api_key.$this->api_id.$username.$plat_type.$is_Mobile);
        $post_data = array(
            'username' => $username,
            'plat_type' => $plat_type,
            'game_type' => $gameType,
            'game_code' => $gameName,
            'sign_key' => $this->api_key,
            'is_mobile_url' => $is_Mobile,
            'lott_type' => $lott_type,
			'lang' => $lang,
            'code' => $code,
        );

        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/user/login';
        }else{
            $url = 'http://'.$this->domain.'/v1/user/login';
        }

        $receive = $this->send_post($url,$post_data);
        //dd($receive);
        return $receive;
    }

    /*
     * 额度转换
     * 存款 http://<domain>/api/ag/deposit.ashx
     */
    public function transfer($api_code,$username,$password,$amount,$type = 1){
        $transSN = date("YmdHms").mt_rand(100,999);//交易编号
        $post_data = array(
            'api_id'=>$this->api_id,
            'api_key'=>$this->api_key,
            'api_code' => $api_code,
            'username' => $username,
            'password'=>$password,
            'amount' => $amount,
            'type' => $type,
            'billno' => $transSN,
            'method'=>'transfer');

        $receive = $this->send_post('http://'.$this->domain,$post_data);
        return $receive;
    }

    /**
     * 中心钱包
     * @param $username
     * @param $money
     * @return int|string
     */
    public function trans($username,$money)
    {
        $client_transfer_id = date("YmdHms").mt_rand(100,999);//交易编号
        $code = md5($this->api_key.$this->api_id.$username.$money.$client_transfer_id);
        $post_data = [
            'username'=> $username,
            'sign_key' => $this->api_key,
            'money' => $money,
            'client_transfer_id' => $client_transfer_id,
            'code' => $code
        ];
        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/wallet/trans';
        }else{
            $url = 'http://'.$this->domain.'/v1/wallet/trans';
        }
        $receive = $this->send_post($url,$post_data);
        return $receive;
    }

    /**
     * 会员查询中心钱包余额
     * @param $username
     * @return int|string
     */
    public function wallet_balance($username)
    {
        $code = md5($this->api_key.$this->api_id.$username);
        $post_data = [
            'username'=> $username,
            'sign_key' => $this->api_key,
            'code' => $code
        ];
        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/wallet/balance';
        }else{
            $url = 'http://'.$this->domain.'/v1/wallet/balance';
        }
        $receive = $this->send_post($url,$post_data);
        return $receive;
    }
    /*
     * 会员获取游戏频台余额
     */
    public function balance($api_code,$username,$password){

        /*$post_data = array(
            'api_id'=>$this->api_id,
            'api_key'=>$this->api_key,
            'api_code' => $api_code,
            'username' => $username,
            'password'=>$password,
            'betLimitCode'=>$this->betLimitCode,
            'currencyCode'=>$this->currencyCode,
            'isSpeed'=>$this->isspeed,
            'isDemo'=>$this->isdemo,
            'method'=>'balance'
        );*/

        $plat_type = strtolower($api_code);
        $code = md5($this->api_key.$this->api_id.$username.$plat_type);
        $post_data = [
            'username'=>$username,
            'sign_key' => $this->api_key,
            'plat_type' => $plat_type,
            'code' => $code
        ];

        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/user/balance';
        }else{
            $url = 'http://'.$this->domain.'/v1/user/balance';
        }
        $receive = $this->send_post($url,$post_data);
        return $receive;
    }


    /*
     *新游戏记录api
     *获取全部游戏
    * 游戏记录 http://<domain>/api/ag/betrecord.ashx
    */
    public function betrecord($startDate,$endDate,$page,$limit,$plat_type='',$game_type='',$username='',$idStr='',$timeType=''){
        $plat_type = strtolower($plat_type);
        $code = md5($this->api_key.$this->api_id.$startDate.$endDate);
        $post_data = [
            'plat_type' => $plat_type,
            'game_type' => $game_type,
            'username' => $username,
            'idStr' => $idStr,
            'sign_key' => $this->api_key,
            'startTime' => $startDate,
            'endTime' => $endDate,
            'page' => $page,
            'limit' => $limit,
            'code' => $code,
            'timeType' => $timeType
        ];
        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/user/record-all';
        }else{
            $url = 'http://'.$this->domain.'/v1/user/record-all';
        }
        //dd($post_data);
        $receive = $this->send_post($url,$post_data);
        return $receive;
    }

    public function record($startTime,$endTime,$page=1,$limit=15,$username = '',$platformCode,$game_type_game){
        $url=$this->domain."/v1/user/record";
        $code = md5($this->api_key.$this->api_id.$platformCode.$startTime.$endTime);
        $data = [
            "plat_type"=>$platformCode,
            "page"=>$page,
            "limit"=>$limit,
            "startTime"=>$startTime,
            "endTime"=>$endTime,
            "username"=>$username,
            "game_type"=>$game_type_game,
            "sign_key"=>$this->api_key,
            "code"=>$code
        ];

        $res = $this->send_post($url, $data);
        return $res;
    }
    public function game_list()
    {
        $post_data = array('api_id'=>$this->api_id,'api_key'=>$this->api_key,'api_code' => 'tcg','method'=>'gamelist');

        $receive = $this->send_post('http://'.$this->domain,$post_data);
        return $receive;
    }

    /*
    * 商户余额查询
    */
    public function credit($api_code){
        /*$post_data = array(
            'api_id'=>$this->api_id,
            'api_key'=>$this->api_key,
            'api_code' => $api_code,
            'method'=>'credit'
        );*/
        $plat_type = strtolower($api_code);
        $code  = md5($this->api_key.$this->api_id.$plat_type);
        $post_data = [
            'plat_type' => $plat_type,
            'sign_key' => $this->api_key,
            'code' =>$code
        ];

        if(preg_match('/^http(s)?:\\/\\/.+/',$this->domain)){
            $url = $this->domain.'/v1/user/credit';
        }else{
            $url = 'http://'.$this->domain.'/v1/user/credit';
        }
        $receive = $this->send_post($url,$post_data);
        return $receive;
    }

    protected function send_post($url,$post_data) {
        $result = (new CurlService())->post($url, $post_data);

        return $result;
    }

    protected function salt($length)
    {
        $key="";
        $pattern='1234567890abcdefghijklmnopqrstuvwxyz';
        for($i=0;$i<$length;$i++)
        {
            $key .= $pattern{mt_rand(0,35)};
        }
        return $key;
    }
}