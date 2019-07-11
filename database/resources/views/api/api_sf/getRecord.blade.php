<?php
header('Content-Type:text/html; charset=utf-8');
function SaveTime($jsonDate){
    preg_match('/\d{10}/',$jsonDate,$matches);
    return (date('Y-m-d H:i:s',$matches[0]));
}
set_time_limit(0);
$end_date = date('Y-m-d H:i:s');

$start_time = isset($start) && $start ?$start:date('Y-m-d H:i:s', strtotime('-2 hour'));
$page = 1;
$pagesize = 2000;
$service = new \App\Services\SelfService();
$api_mod = \App\Models\Api::where('api_name', 'SELF')->where('type', 5)->first();

if(isset($_GET['st']) && isset($_GET['et'])){
    $start_time = date('Y-m-d H:i:s',$_GET['st']);
    $end_date = date('Y-m-d H:i:s',$_GET['et']);
}

$res = json_decode($service->betrecord( $start_time, $end_date,$page, $pagesize), TRUE);
$TotalNumber = 0;
if ($res['statusCode'] == 01)
{
    if ($res['data'])
    {
        $data = $res['data']['record'];
        $Page        = $res['data']["currentPage"];
        //$PageLimit   = $res['data']["pageSize"];
        $TotalNumber = $res['data']["countNum"];
        $TotalPage   = $res['data']["totalPage"];

        if (count($data) > 0)
        {
            foreach($data as $value)
            {
                $a = \App\Models\Api::where('api_name', strtoupper($value['platType']))->first();
                if ($a)
                {
                    $mod = \App\Models\GameRecord::where('billNo', $value["betId"])->where('api_type', $a->id)->first();

                    if ($mod)
                    {
                        $a = $mod->update([
                            'billNo' => isset($value['betId']) ? $value['betId'] : '',
                            'rowid' => isset($value['id']) ? $value['id'] : '',
                            'betAmount' => isset($value['betAmount']) ? $value['betAmount'] : 0,
                            'validBetAmount' => isset($value['validAmount']) ? $value['validAmount'] : 0,
                            'netAmount' => isset($value['winLoss']) ? $value['winLoss'] : 0,
                            'betTime' => isset($value['betTime']) ? $value['betTime'] : '',
                            'gameCode' => isset($value['gameName']) ? $value['gameName'] : '',
                            'gameType' => isset($value['gameType']) ? $value['gameType'] : '',
                            'api_type' => $a->id,
                            'xzhm' => isset($value['betContent']) ? $value['betContent'] : '',
                            'remark' => isset($value['awardResult']) ? $value['awardResult'] : '',
                            'flag' => isset($value["status"])?$value["status"]:'',
                            'result' => json_encode($value)

                        ]);
                        //dump($a);
                    } else {
                        $l = strlen($api_mod->prefix);
                        $PlayerName = $value["username"];
                        $name = $PlayerName;
                        $m = \App\Models\Member::where('name', $name)->first();
                        //dump($m);
                        if ($m)
                        {
                            $rs = \App\Models\GameRecord::create([
                                'billNo' => isset($value['betId']) ? $value['betId'] : '',
                                'rowid' => isset($value['id']) ? $value['id'] : '',
                                'playerName' => $PlayerName,
                                'gameCode' => isset($value["gameName"])?$value["gameName"]:'',
                                'netAmount' => isset($value['winLoss']) ? $value['winLoss'] : 0,
                                'betTime' => isset($value['betTime']) ? $value['betTime'] : '',
                                'gameType' => isset($value['gameType']) ? $value['gameType'] : '',
                                'betAmount' => isset($value['betAmount']) ? $value['betAmount'] : 0,
                                'validBetAmount' => isset($value['validAmount']) ? $value['validAmount'] : 0,
                                'flag' => isset($value["status"])?$value["status"]:'',
                                'remark' => isset($value['awardResult']) ? $value['awardResult'] : '',
                                'xzhm' => isset($value['betContent']) ? $value['betContent'] : '',
                                'api_type' => $a->id,
                                'name' => $name,
                                'member_id' => $m->id,
                                'result' => json_encode($value)
                            ]);
                            //dump($rs);
                        }

                    }
                }


            }

        }
//die;
        //第二页
        if ($TotalPage > 1)
        {
            for ($i=2;$i<=$TotalPage;$i++)
            {
                $res = json_decode($service->betrecord( $start_time, $end_date,$page, $pagesize), TRUE);
                if ($res['statusCode'] == 01)
                {
                    if($res['data'])
                    {
                        $data = $res['data']['record'];
                        $Page        = $res['data']["currentPage"];
                        //$PageLimit   = $res['data']["pageSize"];
                        $TotalNumber = $res['data']["countNum"];
                        $TotalPage   = $res['data']["totalPage"];

                        if (count($data) > 0)
                        {
                            foreach($data as $value)
                            {
                                $a = \App\Models\Api::where('api_name', strtoupper($value['platType']))->first();
                                if ($a)
                                {
                                    $mod = \App\Models\GameRecord::where('billNo', $value["betId"])->where('api_type', $a->id)->first();

                                    if ($mod)
                                    {
                                        $a = $mod->update([
                                            'billNo' => isset($value['betId']) ? $value['betId'] : '',
                                            'rowid' => isset($value['id']) ? $value['id'] : '',
                                            'betAmount' => isset($value['betAmount']) ? $value['betAmount'] : 0,
                                            'validBetAmount' => isset($value['validAmount']) ? $value['validAmount'] : 0,
                                            'netAmount' => isset($value['winLoss']) ? $value['winLoss'] : 0,
                                            'betTime' => isset($value['betTime']) ? $value['betTime'] : '',
                                            'gameCode' => isset($value['gameName']) ? $value['gameName'] : '',
                                            'gameType' => isset($value['gameType']) ? $value['gameType'] : '',
                                            'api_type' => $a->id,
                                            'xzhm' => isset($value['betContent']) ? $value['betContent'] : '',
                                            'remark' => isset($value['awardResult']) ? $value['awardResult'] : '',
                                            'flag' => isset($value["status"])?$value["status"]:'',
                                            'result' => json_encode($value)

                                        ]);
                                    } else {
                                        $l = strlen($api_mod->prefix);
                                        $PlayerName = $value["username"];
                                        $name = $PlayerName;
                                        $m = \App\Models\Member::where('name', $name)->first();
                                        //dump($m);
                                        if ($m)
                                        {
                                            $rs = \App\Models\GameRecord::create([
                                                'billNo' => isset($value['betId']) ? $value['betId'] : '',
                                                'rowid' => isset($value['id']) ? $value['id'] : '',
                                                'playerName' => $PlayerName,
                                                'gameCode' => isset($value["gameName"])?$value["gameName"]:'',
                                                'netAmount' => isset($value['winLoss']) ? $value['winLoss'] : 0,
                                                'betTime' => isset($value['betTime']) ? $value['betTime'] : '',
                                                'gameType' => isset($value['gameType']) ? $value['gameType'] : '',
                                                'betAmount' => isset($value['betAmount']) ? $value['betAmount'] : 0,
                                                'validBetAmount' => isset($value['validAmount']) ? $value['validAmount'] : 0,
                                                'flag' => isset($value["status"])?$value["status"]:'',
                                                'remark' => isset($value['awardResult']) ? $value['awardResult'] : '',
                                                'xzhm' => isset($value['betContent']) ? $value['betContent'] : '',
                                                'api_type' => $a->id,
                                                'name' => $name,
                                                'member_id' => $m->id,
                                                'result' => json_encode($value)
                                            ]);
                                            //dump($rs);
                                        }

                                    }
                                }

                            }

                        }
                    }

                }
            }
        }
    }


}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NG游戏记录获取页面</title>
    <style type="text/css">
        body,td,th {
            font-size: 12px;
        }
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
<script>
    var limit="120"
    if (document.images){
        var parselimit=limit
    }
    function beginrefresh(){
        if (!document.images)
            return
        if (parselimit==1)
            window.location.reload()
        else{
            parselimit-=1
            curmin=Math.floor(parselimit)
            if (curmin!=0)
                curtime=curmin+"秒后自动获取!"
            else
                curtime=cursec+"秒后自动获取!"
            timeinfo.innerText=curtime
            setTimeout("beginrefresh()",1000)
        }
    }

    window. onload=beginrefresh
</script>
<table width="100%"border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="left">
            <input type=button name=button value="刷新" onClick="window.location.reload()">
            <input type=button name=button value="补采集" onClick="bu(window.location)">
            NG游戏:成功采集到<?=$TotalNumber ? $TotalNumber : 0?>条数据
            <span id="timeinfo"></span>
        </td>
        <td>开始时间：<?php echo $start_time;?>------ <?php echo $end_date;?></td>
    </tr>
</table>
<script>
    function bu(url) {
        var tmp = Date.parse( new Date() ).toString();
        var st = tmp.substr(0,10) - 24 * 60 * 60;
        var et = tmp.substr(0,10);
        var url = url + '?st='+st + '&et='+et;
        window.open (url) ;
    }
</script>
</body>
</html>
