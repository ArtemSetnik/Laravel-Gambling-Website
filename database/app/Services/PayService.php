<?php
namespace App\Services;
/* *
 * 功能：支付接口类
 * 版本：1.0
 * 日期：2017.1.15
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码。
 */

class PayService {
    private $Key;
    public $Url;


    /**
     * 签名初始化
     * @param url		请求的URL
     */

    public function __construct($pKey, $pUrl="") {
        $this->Key = $pKey;
        $this->Url = $pUrl;
    }


    /**
     * @name	准备签名/验签字符串
     */
    //merchParam   expireTime   tradeSummary  expireTime  clientIp
    /**
     * @param $data
     * @return string
     */

    public function prepareSign($data) {
        //1网银支付
        if($data['service'] == 'TRADE.B2C') {

            $result = sprintf(
                "service=%s&version=%s&merId=%s&tradeNo=%s&tradeDate=%s&amount=%s&notifyUrl=%s&extra=%s&summary=%s&expireTime=%s&clientIp=%s&bankId=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['amount'],
                $data['notifyUrl'],
                $data['extra'],
                $data['summary'],
                $data['expireTime'],
                $data['clientIp'],
                $data['bankId']
            );


            return $result;
            //2扫码支付
        }else if($data['service'] == 'TRADE.SCANPAY'){

            $result = sprintf(
                "service=%s&version=%s&merId=%s&typeId=%s&tradeNo=%s&tradeDate=%s&amount=%s&notifyUrl=%s&extra=%s&summary=%s&expireTime=%s&clientIp=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['typeId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['amount'],
                $data['notifyUrl'],
                $data['extra'],
                $data['summary'],
                $data['expireTime'],
                $data['clientIp']

            );

            return $result;

            //3支付订单查询
        }else if($data['service'] == 'TRADE.QUERY'){
            $result = sprintf(
                "service=%s&version=%s&merId=%s&tradeNo=%s&tradeDate=%s&amount=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['amount']
            );

            return $result;
            //4退款申请
        }else if($data['service'] == 'TRADE.REFUND'){
            $result = sprintf(
                "service=%s&version=%s&merId=%s&tradeNo=%s&tradeDate=%s&amount=%s&summary=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['amount'],
                $data['summary']
            );
            return $result;
            //5单笔委托结算
        }else if($data['service'] == 'TRADE.SETTLE'){


            $result = sprintf(
                "service=%s&version=%s&merId=%s&tradeNo=%s&tradeDate=%s&notifyUrl=%s&extra=%s&bankCardNo=%s&bankCardName=%s&bankId=%s&bankName=%s&amount=%s&summary=%s&purpose=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['notifyUrl'],
                $data['extra'],
                $data['bankCardNo'],
                $data['bankCardName'],
                $data['bankId'],
                $data['bankName'],
                $data['amount'],
                $data['summary'],
                $data['purpose']

            );

            return $result;

            //6单笔委托结算查询
        }else if($data['service'] == 'TRADE.SETTLE.QUERY'){
            $result = sprintf(
                "service=%s&version=%s&merId=%s&tradeNo=%s&tradeDate=%s",
                $data['service'],
                $data['version'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate']
            );
            return $result;
        }else if($data['service'] == 'TRADE.NOTIFY'){
            $result = sprintf(
                "service=%s&merId=%s&tradeNo=%s&tradeDate=%s&opeNo=%s&opeDate=%s&amount=%s&status=%s&extra=%s&payTime=%s",
                $data['service'],
                $data['merId'],
                $data['tradeNo'],
                $data['tradeDate'],
                $data['opeNo'],
                $data['opeDate'],
                $data['amount'],
                $data['status'],
                $data['extra'],
                $data['payTime']
            );
            return $result;
        }


    }

    /**
     * @name	生成签名
     * @param	sourceData
     * @return	签名数据
     */
    public function sign($data) {

        $signature=md5($data.$this->Key);


        return $signature;


    }


    /**
     * 创建表单
     * @data		表单内容
     * @gateway 支付网关地址
     */
    function buildForm($data, $gateway) {
        $sHtml = "<form id='paysubmit' name='bankPaySubmit' action='".$gateway."' method='post'>";
        while (list ($key, $val) = each ($data)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }
        $sHtml.= "</form>";
        $sHtml.= "<script>document.forms['bankPaySubmit'].submit();</script>";

        return $sHtml;
    }





    /*
     * @name	准备带有签名的request字符串
     * @desc	merge signature and request data
     * @param	request字符串
     * @param	签名数据
     * @return
     */
    public function prepareRequest($string, $signature) {
        return $string.'&sign='.$signature;
    }

    /*
     * @name	请求接口
     * @desc	request api
     * @param	curl,sock
     */
    public function request($data, $method='curl') {
        # TODO:	当前只有curl方式，以后支持fsocket等方式
        $curl = curl_init();
        $curlData = array();
        $curlData[CURLOPT_POST] = true;
        $curlData[CURLOPT_URL] = $this->Url;
        $curlData[CURLOPT_RETURNTRANSFER] = true;
        $curlData[CURLOPT_TIMEOUT] = 120;
        #CURLOPT_FOLLOWLOCATION
        $curlData[CURLOPT_POSTFIELDS] = $data;
        curl_setopt_array($curl, $curlData);

        curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $result = curl_exec($curl);

        if (!$result)
        {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
        //echo $result;
        return $result;
    }

    /*
     * @name	准备获取验签数据
     * @desc	extract signature and string to verify from response result
     */
    public function prepareVerify($result) {

        preg_match('{<detail>(.*?)</detail>}', $result, $match);
        $srcData = $match[0];
        preg_match('{<sign>(.*?)</sign>}', $result, $match);

        $signature = $match[1];
        $signature = str_replace('%2B', '+', $signature);
        return array($srcData, $signature);
    }

    /*
     * @name	验证签名
     * @param	signData 签名数据
     * @param	sourceData 原数据
     * @return
     */
    public function verify($data, $signature) {
        $mySign = $this->sign($data);
        if (strcasecmp($mySign, $signature) == 0) {
            return true;
        } else {
            return false;
        }

    }

    /*
     * @name 查询请求交易
     * @desc
     */
    public function payTranQuery($data) {
        $str_to_sign = $this->prepareSign($data);
        $sign = $this->sign($str_to_sign);
        $to_request = $this->prepareRequest($str_to_sign, $sign);
        $result = $this->request($to_request);

        $to_verify = $this->prepareVerify($result);

        if ($this->verify($to_verify[0], $to_verify[1]) ) {
            return $result;
        } else{
            //echo "verify error";
            return false;
        }
    }

    /*
     * @name	退款请求交易
     * @desc
     */
    public function payTranReturn($data) {
        $str_to_sign = $this->prepareSign($data);
        $sign = $this->sign($str_to_sign);
        $to_requset = $this->prepareRequest($str_to_sign, $sign);
        $result = $this->request($to_requset);
        $to_verify = $this->prepareVerify($result);
        if ($this->verify($to_verify[0], $to_verify[1]) ) {
            return $result;
        } else {
            return false;
        }
    }

    /*
     * @name	组装请求的交易数据
     * @desc
     */
    public function getTradeMsg($data) {
        if($data['summary']){
            $data['summary'] = urlencode($data['summary']);
        }
        return $this->prepareSign($data);
    }
    /*
     * @name	支付请求交易
     * @desc
     */
    public function payOrder($data) {
        $str_to_sign = $this->prepareSign($data);
        $sign = $this->sign($str_to_sign);
        $sign = urlencode($sign);
        $to_request = $this->prepareRequest($this->getTradeMsg($data), $sign);
        $url = $this->Url . '?' . $to_request;
        if($data['bankId']){
            $url = $url . '&bankId='.$data['bankId'];
        }
        $this->redirect($url);
    }
}
