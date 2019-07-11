<?php
// header('Content-Type:text/html; charset=utf-8');
function SaveTime($jsonDate){
    preg_match('/\d{10}/',$jsonDate,$matches);
    return (date('Y-m-d H:i:s',$matches[0]));
}

$time=time();


// $S_time=1524931200;
// $E_time='1525017599';
$PageIndex=1;

$limit=1000;
$S_time=$time-3600*24;
$E_time=$time;


switch ($game_type){
    case 1:
    case 2:
    case 6:
    case 7:
        $S_time = $time - 60 * 60;
        $E_time = $time;
        break;
    case 3:
        $S_time = $time - 12 * 60 * 60;
        $E_time = $time;
        break;
    case 4:
    case 5:
        $S_time = $time - 24 * 60 * 60;
        $E_time = $time;
        break;
}



if(isset($_GET['st']) && isset($_GET['et'])){
    $S_time = $_GET['st'];
    $E_time = $_GET['et'];
}
$api_mod = \App\Models\Api::where('api_name', strtoupper($plat_type))->where('type', 5)->first();


$api=new \App\Http\Controllers\Api\SelfController();


$infos=$api->getGameRecord($plat_type, date('Y-m-d H:i:s',$S_time), date('Y-m-d H:i:s',$E_time), $PageIndex, $limit, $time,$game_type);

$gs=var_export($infos,true);
file_put_contents($_SERVER['DOCUMENT_ROOT']."/".$plat_type."--".$game_type.".txt",$gs.date('Y-m-d H:i:s').PHP_EOL,FILE_APPEND);

$count=0;
$infos = json_decode($infos,true);
//print_r($infos);
//获取到记录
if($infos['statusCode'] == 01){
    if(!empty($infos['data']['record'])){
    $count=$infos['data']['countNum'];
    $data =$infos['data']['record'];
    $currentPage=$infos['data']['currentPage'];
    $totalPage=$infos['data']['totalPage'];
    $data =array_reverse($data);
    foreach($data as $k=>$v){
        $flag=0;
        $xzhm = '';
        $l = $api_mod->prefix;
        if($plat_type=='ag'){
            $PlayerName = $v["loginId"];
            $gamecode=$v['gameType'];
            if ($game_type == 2) {//电子
                $xzhm = $v['gameTypeDesc'] ? $v['gameTypeDesc'] : '';
            }
            if($game_type == 1) {//真人
                $xzhm = $v['playTypeDesc'] ? $v['playTypeDesc'] : '';
            }
            if($game_type == 4) {//体育
                $betorderid=$v['billNo'];
                $betAmount=$v['betAmount'];
                $netAmount=$v['netAmount'];
                $validBetAmount=$v['validBetAmount'];
                $ctime=$v['betTime'];
            }else{
                $betorderid=$v['betId'];
                $betAmount=$v['betAmount'];
                $validBetAmount=$v['validBetAmount'];
                $ctime=$v['betTimeBj'];
                $netAmount=$v['payOut'];
            }

        }else if($plat_type=='bbin'){
            if(!$v['Payoff']){
                $v['Payoff']='0';
            }
            //$netAmount=$v['Payoff']+$v['BetAmount'];
            $netAmount=$v['Payoff'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['BetAmount'];
            $betorderid=$v['WagersID'];
            $gamecode=$v['GameType'];
            if($game_type == '1'){//视讯
                $validBetAmount=$v['Commissionable'];
                $xzhm = $v['WagerDetail'];
            }else if($game_type == '2'){//老虎机
                // $netAmount=$v['Payoff'];
                $validBetAmount=$v['Commissionable'];
            }else if($game_type == '3'){//彩票
                $validBetAmount=$v['BetAmount'];
            }else if($game_type == '4'){//体育
                $validBetAmount=$v['Commissionable'];
            }else if($game_type == '6'){//捕鱼
                $validBetAmount=$v['Commissionable'];
            }

        }else if($plat_type== 'newbb'){
            $netAmount=$v['Payoff'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['BetAmount'];
            $betorderid=$v['WagersID'];
            $ctime=$v['beijing_bet_time'];
            $gamecode=$v['GameType'];
            $validBetAmount=$v['Commissionable'];
        }else if($plat_type=='bg'){
            $betorderid=$v['orderId'];
            if(!$v['aAmount']){
                $v['aAmount']=0;
            }
            $netAmount=$v['aAmount'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bAmount'];
            // $betAmount=str_replace("-", "", $v['bAmount']);
            $validBetAmount=$v['validBet'];
            $gamecode=$v['gameName'];
            $xzhm = $v['playName'];
        }else if($plat_type=='allbet'){
            $betorderid=$v['betNum'];
            $netAmount=$v['winOrLoss'];
            $ctime=$v['bjbetTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['validAmount'];
            $gamecode=$v['gameTypeDesc'];
            $xzhm = $v['betTypeDesc'];
        }else if($plat_type == 'og'){
            $betorderid=$v['betId'];
            $PlayerName = $v["loginId"];
            $gamecode=$v['gameType'];
            $netAmount=$v['payOut'];
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['validAmount'];
            $ctime=$v['beijing_bet_time'];
            $xzhm = $v['betDetail'];
        }else if($plat_type=='mg'){
            $betorderid = $v['rowId'];
            $gamecode=$v['displayName'];
            $PlayerName = $v["loginId"];
            $ctime=$v['gameEndTime'];
            $betAmount=$v['totalWager'];
            $validBetAmount=$v['validBetAmount'];
            $netAmount = $v['totalPayout'];
        }else if($plat_type == 'pt'){
            $betorderid=$v['rNum'];
            $gamecode=$v['gameCode'];
            $PlayerName = $v["loginId"];
            $ctime=$v['bjgameDate'];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $netAmount = $v['win'];
            $xzhm = $v['gameName'];
        }else if ($plat_type == 'lebo'){
            $betorderid=$v['betId'];
            $gamecode=$v['gameId'];
            $PlayerName = $v["loginId"];
            $ctime=$v['beijing_bet_time'];
            if($v['isRevocation'] == 1) {//作废
                $betAmount=0;
                $validBetAmount=0;
                $netAmount = 0;
            }
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['validBetAmount'];
            $netAmount = $v['payOut'];
        }else if($plat_type=='sunbet'){
            $betorderid=$v['betId'];
            $netAmount=$v['winAmount'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=str_replace("-", "", $v['riskAmount']);
            $validBetAmount=$betAmount;
            $gamecode=$v['gameId'];
        }else if($plat_type=='mg'){
            $betorderid=$v['rowId'];
            $netAmount=$v['totalPayout'];
            $ctime=$v['bjgameEndTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['totalWager'];
            $validBetAmount=$v['validBetAmount'];
            $gamecode=$v['displayName'];
        }else if($plat_type=='lebo'){
            $betorderid=$v['betId'];
            $netAmount=$v['payAmount'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['validBetAmount'];
            $gamecode=$v['gameId'];
        }else if($plat_type=='gd'){
            $betorderid=$v['betId'];
            $netAmount=$v['betAmount']+$v['winLoss'];
            $ctime=$v['bjbetTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['validBetAmount'];
            $gamecode=$v['productId'];
        }else if($plat_type=='dg'){
            $betorderid=$v['betId'];
            $gamecode=$v['gameName'];
            $ctime=$v['bjBettime'];
            $PlayerName = $v["loginId"];
            if($v['isRevocation'] == 2){
                $betAmount=$v['betPoints'];
                $validBetAmount=0;
                $netAmount=0;
            }
            $betAmount=$v['betPoints'];
            $validBetAmount=$v['availableBet'];
            $netAmount=$v['winOrLoss'];
            $xzhm = $v['betDetail'];

        }else if($plat_type=='gpi'){
            $betorderid=$v['operationCode'];
            $netAmount=$v['changes'];
            $ctime=$v['bjChangeTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['valid_bet'];
            $gamecode=$v['gameName'];
        }else if($plat_type=='sg'){
            $betorderid=$v['betId'];
            $netAmount=$v['win'];
            $ctime=$v['gameDate'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['gameNameCn'];
        }else if($plat_type=='pp'){
            $betorderid=$v['betId'];
            $netAmount=$v['win'];
            $ctime=$v['gameDate'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['gameNameCn'];
        }else if($plat_type=='qt'){
            $betorderid=$v['betId'];
            $netAmount=$v['totalPayout'];
            $ctime=$v['initiated'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['totalBet'];
            $validBetAmount=$v['totalBet'];
            $gamecode=$v['gameNameCN'];
        }else if($plat_type == 'mw'){
            $betorderid=$v['gameNum'];
            $netAmount=$v['winMoney'];
            $ctime=$v['logDate'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['playMoney'];
            $validBetAmount=$v['playMoney'];
            $gamecode=$v['gameName'];
        }else if($plat_type=='cq9'){
            $betorderid=$v['round'];
            $netAmount=$v['win'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['game_name'];
        }elseif($plat_type == 'sunbet'){
            $betorderid=$v['betId'];
            $netAmount=$v['lossAmount'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['riskAmount'];
            $validBetAmount=$v['winAmount'];
            $gamecode=$v['gameName'];
        }else if($plat_type=='sa'){
            $betorderid=$v['BetID'];
            $netAmount=$v['ResultAmount'];
            $ctime=$v['BetTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['BetAmount'];
            $validBetAmount=$v['BetAmount'];
            $gamecode=$v['GameType'];
        }else if($plat_type == 'jdb'){
            $betorderid=$v['seqNo'];
            $netAmount=$v['total'];
            $ctime=$v['gameDate'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['GameName'];
        }else if($plat_type == 'fg'){
            /*$betorderid=$v['betId'];
            $PlayerName = $v["loginId"];
            $gamecode=$v['game_name'];
            $ctime=$v['time'];
            $betAmount=$v['all_bets'];
            $validBetAmount=$v['all_bets'];
            $netAmount=$v['result'];
            if($game_type == 6) {
                $ctime=$v['start_time'];
                $betAmount = $v['bullet_chips'];
                $validBetAmount=$v['bullet_chips'];
                $netAmount=$v['result'];
            }*/

            $betorderid=$v['betId'];
            $PlayerName = $v["loginId"];

            $gamecode=$v['game_name'];
            if($game_type == 2) {//电子
                $betAmount = $v['all_bets'];
                $validBetAmount=$v['all_bets'];
                $netAmount=$v['result'];
                $ctime=$v['time'];
            }elseif ($game_type == 6) {//捕鱼
                $ctime=$v['start_time'];
                $betAmount = $v['bullet_chips'];
                $validBetAmount=$v['bullet_chips'];
                $netAmount=$v['result'];
            }elseif ($game_type == 7) {//棋牌
                $ctime=$v['time'];
                $betAmount = $v['all_bets'];
                $validBetAmount=$v['all_bets'];
                $netAmount=$v['result'];
            }
        }else if($plat_type=='ibc'){
            $betorderid=$v['TransId'];
            $netAmount=$v['win'];
            $ctime=$v['TransactionTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['sport_type'];
        }else if($plat_type=='ss'){
            $betorderid=$v['transaction_id'];
            if(!$v['win_amt']){
                $v['win_amt']=0;
            }
            $PlayerName = $v["loginId"];
            $ctime=$v['beijing_bet_time'];
            $gamecode=$v['play_type'];
            $betAmount=$v['wager_stake'];
            $validBetAmount=$v['final_stake'];
            $netAmount=$v['win_amt'];
        }else if($plat_type=='gj'){
            $betorderid=$v['billNo'];
            $PlayerName = $v["loginId"];
            $gamecode=$v['gameName'];
            $ctime=$v['createDate'];
            if($v['winStatus'] =='0'){
                $netAmount=0;
                $flag=1;
            }else{
                $netAmount=$v['award'];
            }
            if($v['winStatus'] !='0'){
                $flag=0;
            }
            // var_dump($betorderid);
            $betAmount=$v['amount'];
            $validBetAmount=$v['amount'];
            $xzhm = $v['gamePlayName'] ? $v['gamePlayName'] : '';

        }else if($plat_type=='ky'){
            $betorderid=$v['GameID'];
            $netAmount=$v['Profit'];
            $ctime=$v['GameStartTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['CellScore'];
            $validBetAmount=$v['CellScore'];
            $gamecode=$v['KindID'];
            $xzhm = $v['GameName'] ? $v['GameName'] : '';
        }else if ($plat_type == 'mt'){
            $betorderid=$v['rowID'];
            $netAmount=$v['income'];
            $ctime=$v['gameDate'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betAmount'];
            $validBetAmount=$v['commissionable'];
            $gamecode=$v['gameCode'];
            $xzhm = $v['GameName'] ? $v['GameName'] : '';
        }else if ( $plat_type == 'vg'){
            $betorderid=$v['betId'];
            $netAmount=$v['money'];
            $ctime=$v['createtime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betamount'];
            $validBetAmount=$v['validbetamount'];
            $gamecode=$v['gametype'];
        }else if($plat_type == 'leg'){
            $betorderid=$v['GameID'];
            $netAmount=$v['Profit'];
            $ctime=$v['GameStartTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['AllBet'];
            $validBetAmount=$v['CellScore'];
            $gamecode=$v['GameName'];
        }else if ($plat_type == 'vr') {
            $betorderid=$v['serialNumber'];
            $ctime=$v['beijing_bet_time'];
            $PlayerName = $v["loginId"];
            $gamecode=$v['channelName'];
            $betAmount=$v['cost'];
            $validBetAmount=$v['cost'];
            $netAmount = $v['playerPrize'];
            $xzhm = $v['position'];
        } else if ($plat_type == 'ig'){
            $betorderid=$v['BetId'];
            $ctime=$v['BetDate'];
            $PlayerName = $v["loginId"];
            $gamecode=$v['GameName'];
            $betAmount=$v['BetAmount'];
            $validBetAmount=$v['ValidBet'];
            $netAmount = $v['WinLoss'];
            $xzhm = $v['BetType'] ? $v['BetType'] : '';
        }else if($plat_type=='eg'){
            $betorderid=$v['order_num'];
            $netAmount=$v['result'];
            $ctime=$v['add_time'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['valid_bet'];
            $gamecode=$v['fc_name'];
            $xzhm = $v['play_details'];
        }else if ( $plat_type == 'ng'){
            $betorderid=$v['OrderID'];
            $netAmount=$v['IncomeMoney'];
            $ctime=$v['BetTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['BetMoney'];
            $validBetAmount=$v['BetMoney'];
            $gamecode=$v['TypeName'];
            if($v['BetStatus'] == 3){
                $betAmount=$v['BetMoney'];
                $validBetAmount=0;
                $netAmount=0;
            }
            $xzhm = $v['BetBall'] ? $v['BetBall'] : '';
        }else if($plat_type == 'esb') {
            $betorderid=$v['BetId'];
            $netAmount=$v['WinLoss'];
            $ctime=$v['WagerCreationDateTime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['StakeAmount'];
            $validBetAmount=$v['StakeAmount'];
            $DetailItems = json_decode($v['DetailItems'],true);

            $gamecode=$DetailItems[0]['EventName'];
            if($v['IsCancelled'] == 1){
                $validBetAmount=0;
                $netAmount=0;
            }
        }else if ($plat_type == 'hc'){
            $betorderid=$v['bet_id'];
            $ctime=$v['bettime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['betamount'];
            $validBetAmount=$v['betamount'];
            $gamecode=$v['game_name'];
            $netAmount=$v['payoffamount'];
            if($v['status2'] == 51 || $v['status2'] == 55){
                $validBetAmount=0;
                $netAmount= 0 ;
            }
            $xzhm = $v['han_info'] ? $v['han_info'] : '';
        }else if ($plat_type == 'avia'){
            $betorderid=$v['OrderID'];
            $ctime=$v['CreateAt'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['BetAmount'];
            $validBetAmount=$v['BetMoney'];
            $gamecode=$v['Category'];
            $netAmount=$v['Money'];
            if($v['Status'] == 'Cancel'){
                $validBetAmount=0;
                $netAmount=0;
            }
            $xzhm = $v['Content'];
        }else if($plat_type == 'sw'){
            $betorderid=$v['roundId'];
            $ctime=$v['firstTs'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['GameName'];
            $netAmount=$v['payOff'];
        }else if($plat_type == 'bng'){
            $betorderid=$v['transaction_id'];
            $ctime=$v['c_at'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['bet'];
            $validBetAmount=$v['bet'];
            $gamecode=$v['game_name_cn'];
            $netAmount=$v['payOff'];
        }else if($plat_type == 'ap'){
            $betorderid=$v['betId'];
            $ctime=$v['stime'];
            $PlayerName = $v["loginId"];
            $betAmount=$v['allput'];
            $validBetAmount=$v['realput'];
            $gamecode=$v['GameName'];
            $netAmount=$v['chg'];
        }else if($plat_type == 'dt'){
            $betorderid = $v['betId'];
            $ctime = $v['createTime'];
            $PlayerName = $v['loginId'];
            $betAmount=$v['betPrice'];
            $validBetAmount=$v['betPrice'];
            $netAmount=$v['prizeWins'];
            $gamecode = $v['gameName'];
        }else if($plat_type == 'pg'){
            $betorderid = $v['recordID'];
            $ctime = $v['bdate'];
            $PlayerName = $v['loginId'];
            $betAmount = $v['bet'];
            $validBetAmount = $v['bet'];
            $gamecode = $v['GameName'];
            $netAmount = $v['winlose'];
        }else if($plat_type == 'gti'){
            $betorderid = $v['betId'];
            $ctime = $v['betTime'];
            $PlayerName = $v['loginId'];
            $betAmount = $v['betAmount'];
            $validBetAmount = $v['validAmount'];
            $gamecode = $v['GameName'];
            $netAmount = $v['payOff'];
        }else if($plat_type == 'png'){
            $betorderid = $v['RoundId'];
            $ctime = $v['Time'];
            $PlayerName = $v['loginId'];
            $betAmount = $v['Amount'];
            $validBetAmount = $v['Amount'];
            $gamecode = $v['GameName'];
            $netAmount = $v['PayOff'];
        }
        if(empty($v['playType'])){
            $v['playType']='';
        }
        $r_mod = \App\Models\GameRecord::where('billNo', $betorderid)->where('api_type', $api_mod->id)->first();

        if($r_mod){
            if($plat_type=='gj'){
                if($flag =='0'){
                    $r_mod->update([
                        'netAmount' => $netAmount,
                        'flag'=>'0'
                    ]);
                }

            }else{
                if($r_mod->netAmount != $netAmount){

                    $r_mod->update([
                        'netAmount' => $netAmount,

                    ]);
                }
                if($r_mod ->validBetAmount != $validBetAmount ){
                    $r_mod->update([
                        'validBetAmount' => $validBetAmount,

                    ]);
                }
                if($r_mod->xzhm != $xzhm){
                    $r_mod->update([
                        'xzhm' => $xzhm,

                    ]);
                }
            }

        }else{

            // $ctime = SaveTime($v['betTime']);

            $name = substr($PlayerName, strlen($l));
            $m = \App\Models\Member::where('name', $name)->first();


// if($netAmount){
            \App\Models\GameRecord::create([
                'billNo' => $betorderid,
                'playerName' => $PlayerName,
                'betAmount' => $betAmount,
                'validBetAmount' => $validBetAmount,
                'netAmount' => $netAmount,
                'reAmount' => $netAmount,
                'betTime' => $ctime,
                'gameCode' => $gamecode,
                'playType' => $v['playType'],
                'gameType' => $game_type,
                'flag'=>$flag,
                'api_type' => $api_mod->id,
                'name' => $name,
                'member_id' => $m?$m->id:0,
                'result' => json_encode($v),
                'xzhm' => $xzhm ? $xzhm : ''
            ]);
// }


        }

    }

    if ($totalPage > 1)
    {
        //currentPage
// totalPage
        for ($i=2;$i <= $totalPage;$i++)
        {
            $p=$i;

            // $time = time();
            $time=$E_time;
            // $time="1524931199";
            $infoss=$api->getGameRecord($plat_type, date('Y-m-d H:i:s',$S_time), date('Y-m-d H:i:s',$time), $p, $limit, $time,$game_type);
            //echo '正在采集第'.$p.'页';
            //print_r($infoss);
            // $data=$api->getGameRecord($plat_type,$S_time,$E_time,$p,$limit,$time);
            $infoss = json_decode($infoss,true);
            if (!empty($infoss['data']['record']))
            {
                $data =$infoss['data']['record'];
                foreach($data as $k=>$v){
                    $flag=0;
                    $xzhm = '';
                    $l = $api_mod->prefix;
                    if($plat_type=='ag'){
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['gameType'];
                        if ($game_type == 2) {//电子
                            $xzhm = $v['gameTypeDesc'] ? $v['gameTypeDesc'] : '';
                        }
                        if($game_type == 1) {//真人
                            $xzhm = $v['playTypeDesc'] ? $v['playTypeDesc'] : '';
                        }
                        if($game_type == 4) {//体育
                            $betorderid=$v['billNo'];
                            $betAmount=$v['betAmount'];
                            $netAmount=$v['netAmount'];
                            $validBetAmount=$v['validBetAmount'];
                            $ctime=$v['betTime'];
                        }else{
                            $betorderid=$v['betId'];
                            $betAmount=$v['betAmount'];
                            $validBetAmount=$v['validBetAmount'];
                            $ctime=$v['betTimeBj'];
                            $netAmount=$v['payOut'];
                            $xzhm = $v['playTypeDesc'] ? $v['playTypeDesc'] : '';
                        }

                    }else if($plat_type=='bbin'){
                        if(!$v['Payoff']){
                            $v['Payoff']='0';
                        }
                        //$netAmount=$v['Payoff']+$v['BetAmount'];
                        $netAmount=$v['Payoff'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['BetAmount'];
                        $betorderid=$v['WagersID'];
                        $gamecode=$v['GameType'];
                        if($game_type == '1'){//视讯
                            $validBetAmount=$v['Commissionable'];
                            $xzhm = $v['WagerDetail'];
                        }else if($game_type == '2'){//老虎机
                            // $netAmount=$v['Payoff'];
                            $validBetAmount=$v['Commissionable'];
                        }else if($game_type == '3'){//彩票
                            $validBetAmount=$v['BetAmount'];
                        }else if($game_type == '4'){//体育
                            $validBetAmount=$v['Commissionable'];
                        }else if($game_type == '6'){//捕鱼
                            $validBetAmount=$v['Commissionable'];
                        }

                    }else if($plat_type== 'newbb'){
                        $netAmount=$v['Payoff'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['BetAmount'];
                        $betorderid=$v['WagersID'];
                        $ctime=$v['beijing_bet_time'];
                        $gamecode=$v['GameType'];
                        $validBetAmount=$v['Commissionable'];
                    }else if($plat_type=='bg'){
                        $betorderid=$v['orderId'];
                        if(!$v['aAmount']){
                            $v['aAmount']=0;
                        }
                        $netAmount=$v['aAmount'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bAmount'];
                        // $betAmount=str_replace("-", "", $v['bAmount']);
                        $validBetAmount=$v['validBet'];
                        $gamecode=$v['gameName'];
                        $xzhm = $v['playName'];
                    }else if($plat_type=='allbet'){
                        $betorderid=$v['betNum'];
                        $netAmount=$v['winOrLoss'];
                        $ctime=$v['bjbetTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['validAmount'];
                        $gamecode=$v['gameTypeDesc'];
                        $xzhm = $v['betTypeDesc'];
                    }else if($plat_type == 'og'){
                        $betorderid=$v['betId'];
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['gameType'];
                        $netAmount=$v['payOut'];
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['validAmount'];
                        $ctime=$v['beijing_bet_time'];
                        $xzhm = $v['betDetail'];
                    }else if($plat_type=='mg'){
                        $betorderid = $v['rowId'];
                        $gamecode=$v['displayName'];
                        $PlayerName = $v["loginId"];
                        $ctime=$v['gameEndTime'];
                        $betAmount=$v['totalWager'];
                        $validBetAmount=$v['validBetAmount'];
                        $netAmount = $v['totalPayout'];
                    }else if($plat_type == 'pt'){
                        $betorderid=$v['rNum'];
                        $gamecode=$v['gameCode'];
                        $PlayerName = $v["loginId"];
                        $ctime=$v['bjgameDate'];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $netAmount = $v['win'];
                        $xzhm = $v['gameName'];
                    }else if ($plat_type == 'lebo'){
                        $betorderid=$v['betId'];
                        $gamecode=$v['gameId'];
                        $PlayerName = $v["loginId"];
                        $ctime=$v['beijing_bet_time'];
                        if($v['isRevocation'] == 1) {//作废
                            $betAmount=0;
                            $validBetAmount=0;
                            $netAmount = 0;
                        }
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['validBetAmount'];
                        $netAmount = $v['payOut'];
                    }else if($plat_type=='sunbet'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['winAmount'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=str_replace("-", "", $v['riskAmount']);
                        $validBetAmount=$betAmount;
                        $gamecode=$v['gameId'];
                    }else if($plat_type=='mg'){
                        $betorderid=$v['rowId'];
                        $netAmount=$v['totalPayout'];
                        $ctime=$v['bjgameEndTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['totalWager'];
                        $validBetAmount=$v['validBetAmount'];
                        $gamecode=$v['displayName'];
                    }else if($plat_type=='lebo'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['payAmount'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['validBetAmount'];
                        $gamecode=$v['gameId'];
                    }else if($plat_type=='gd'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['betAmount']+$v['winLoss'];
                        $ctime=$v['bjbetTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['validBetAmount'];
                        $gamecode=$v['productId'];
                    }else if($plat_type=='dg'){
                        $betorderid=$v['betId'];
                        $gamecode=$v['gameName'];
                        $ctime=$v['bjBettime'];
                        $PlayerName = $v["loginId"];
                        if($v['isRevocation'] == 2){
                            $betAmount=$v['betPoints'];
                            $validBetAmount=0;
                            $netAmount=0;
                        }
                        $xzhm = $v['betDetail'];
                        $betAmount=$v['betPoints'];
                        $validBetAmount=$v['availableBet'];
                        $netAmount=$v['winOrLoss'];

                    }else if($plat_type=='gpi'){
                        $betorderid=$v['operationCode'];
                        $netAmount=$v['changes'];
                        $ctime=$v['bjChangeTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['valid_bet'];
                        $gamecode=$v['gameName'];
                    }else if($plat_type=='sg'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['win'];
                        $ctime=$v['gameDate'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['gameNameCn'];
                    }else if($plat_type=='pp'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['win'];
                        $ctime=$v['gameDate'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['gameNameCn'];
                    }else if($plat_type=='qt'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['totalPayout'];
                        $ctime=$v['initiated'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['totalBet'];
                        $validBetAmount=$v['totalBet'];
                        $gamecode=$v['gameNameCN'];
                    }else if($plat_type == 'mw'){
                        $betorderid=$v['gameNum'];
                        $netAmount=$v['winMoney'];
                        $ctime=$v['logDate'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['playMoney'];
                        $validBetAmount=$v['playMoney'];
                        $gamecode=$v['gameName'];
                    }else if($plat_type=='cq9'){
                        $betorderid=$v['round'];
                        $netAmount=$v['win'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['game_name'];
                    }elseif($plat_type == 'sunbet'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['lossAmount'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['riskAmount'];
                        $validBetAmount=$v['winAmount'];
                        $gamecode=$v['gameName'];
                    }else if($plat_type=='sa'){
                        $betorderid=$v['BetID'];
                        $netAmount=$v['ResultAmount'];
                        $ctime=$v['BetTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['BetAmount'];
                        $validBetAmount=$v['BetAmount'];
                        $gamecode=$v['GameType'];
                    }else if($plat_type == 'jdb'){
                        $betorderid=$v['seqNo'];
                        $netAmount=$v['total'];
                        $ctime=$v['gameDate'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['GameName'];
                    }else if($plat_type == 'fg'){
                        /*$betorderid=$v['betId'];
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['game_name'];
                        $ctime=$v['time'];
                        $betAmount=$v['all_bets'];
                        $validBetAmount=$v['all_bets'];
                        $netAmount=$v['result'];
                        if($game_type == 6) {
                            $ctime=$v['start_time'];
                            $betAmount = $v['bullet_chips'];
                            $validBetAmount=$v['bullet_chips'];
                            $netAmount=$v['result'];
                        }*/
                        $betorderid=$v['betId'];
                        $PlayerName = $v["loginId"];
                        $ctime=$v['time'];
                        $gamecode=$v['game_name'];
                        if($game_type == 2) {//电子
                            $betAmount = $v['all_bets'];
                            $validBetAmount=$v['all_bets'];
                            $netAmount=$v['result'];
                        }elseif ($game_type == 6) {//捕鱼
                            $ctime=$v['start_time'];
                            $betAmount = $v['bullet_chips'];
                            $validBetAmount=$v['bullet_chips'];
                            $netAmount=$v['result'];
                        }elseif ($game_type == 7) {//棋牌
                            $betAmount = $v['all_bets'];
                            $validBetAmount=$v['all_bets'];
                            $netAmount=$v['result'];
                        }
                    }else if($plat_type=='ibc'){
                        $betorderid=$v['TransId'];
                        $netAmount=$v['win'];
                        $ctime=$v['TransactionTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['sport_type'];
                    }else if($plat_type=='ss'){
                        $betorderid=$v['transaction_id'];
                        if(!$v['win_amt']){
                            $v['win_amt']=0;
                        }
                        $PlayerName = $v["loginId"];
                        $ctime=$v['beijing_bet_time'];
                        $gamecode=$v['play_type'];
                        $betAmount=$v['wager_stake'];
                        $validBetAmount=$v['final_stake'];
                        $netAmount=$v['win_amt'];
                    }else if($plat_type=='gj'){
                        $betorderid=$v['billNo'];
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['gameName'];
                        $ctime=$v['createDate'];
                        if($v['winStatus'] =='0'){
                            $netAmount=0;
                            $flag=1;
                        }else{
                            $netAmount=$v['award'];
                        }
                        if($v['winStatus'] !='0'){
                            $flag=0;
                        }
                        // var_dump($betorderid);
                        $betAmount=$v['amount'];
                        $validBetAmount=$v['amount'];
                        $xzhm = $v['gamePlayName'] ? $v['gamePlayName'] : '';
                    }else if($plat_type=='ky'){
                        $betorderid=$v['GameID'];
                        $netAmount=$v['Profit'];
                        $ctime=$v['GameStartTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['CellScore'];
                        $validBetAmount=$v['CellScore'];
                        $gamecode=$v['KindID'];
                        $xzhm = $v['GameName'] ? $v['GameName'] : '';
                    }else if ($plat_type == 'mt'){
                        $betorderid=$v['rowID'];
                        $netAmount=$v['income'];
                        $ctime=$v['gameDate'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betAmount'];
                        $validBetAmount=$v['commissionable'];
                        $gamecode=$v['gameCode'];
                        $xzhm = $v['GameName'] ? $v['GameName'] : '';
                    }else if ( $plat_type == 'vg'){
                        $betorderid=$v['betId'];
                        $netAmount=$v['money'];
                        $ctime=$v['createtime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betamount'];
                        $validBetAmount=$v['validbetamount'];
                        $gamecode=$v['gametype'];
                    }else if($plat_type == 'leg'){
                        $betorderid=$v['GameID'];
                        $netAmount=$v['Profit'];
                        $ctime=$v['GameStartTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['AllBet'];
                        $validBetAmount=$v['CellScore'];
                        $gamecode=$v['GameName'];
                    }else if ($plat_type == 'vr') {
                        $betorderid=$v['serialNumber'];
                        $ctime=$v['beijing_bet_time'];
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['channelName'];
                        $betAmount=$v['cost'];
                        $validBetAmount=$v['cost'];
                        $netAmount = $v['playerPrize'];
                        $xzhm = $v['position'];
                    } else if ($plat_type == 'ig'){
                        $betorderid=$v['BetId'];
                        $ctime=$v['BetDate'];
                        $PlayerName = $v["loginId"];
                        $gamecode=$v['GameName'];
                        $betAmount=$v['BetAmount'];
                        $validBetAmount=$v['ValidBet'];
                        $netAmount = $v['WinLoss'];
                        $xzhm = $v['BetType'] ? $v['BetType'] : '';
                    }else if($plat_type=='eg'){
                        $betorderid=$v['order_num'];
                        $netAmount=$v['result'];
                        $ctime=$v['add_time'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['valid_bet'];
                        $gamecode=$v['fc_name'];
                        $xzhm = $v['play_details'];
                    }else if ( $plat_type == 'ng'){
                        $betorderid=$v['OrderID'];
                        $netAmount=$v['IncomeMoney'];
                        $ctime=$v['BetTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['BetMoney'];
                        $validBetAmount=$v['BetMoney'];
                        $gamecode=$v['TypeName'];
                        if($v['BetStatus'] == 3){
                            $betAmount=$v['BetMoney'];
                            $validBetAmount=0;
                            $netAmount=0;
                        }
                        $xzhm = $v['BetBall'] ? $v['BetBall'] : '';
                    }else if($plat_type == 'esb') {
                        $betorderid=$v['BetId'];
                        $netAmount=$v['WinLoss'];
                        $ctime=$v['WagerCreationDateTime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['StakeAmount'];
                        $validBetAmount=$v['StakeAmount'];
                        $DetailItems = json_decode($v['DetailItems'],true);

                        $gamecode=$DetailItems[0]['EventName'];
                        if($v['IsCancelled'] == 1){
                            $validBetAmount=0;
                            $netAmount=0;
                        }
                    }else if ($plat_type == 'hc'){
                        $betorderid=$v['bet_id'];
                        $ctime=$v['bettime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['betamount'];
                        $validBetAmount=$v['betamount'];
                        $gamecode=$v['game_name'];
                        $netAmount=$v['payoffamount'];
                        if($v['status2'] == 51 || $v['status2'] == 55 || $v['status2'] == 58){
                            $validBetAmount=0;
                            $netAmount= 0 ;
                        }
                        $xzhm = $v['han_info'] ? $v['han_info'] : '';
                    }else if ($plat_type == 'avia'){
                        $betorderid=$v['OrderID'];
                        $ctime=$v['CreateAt'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['BetAmount'];
                        $validBetAmount=$v['BetMoney'];
                        $gamecode=$v['Category'];
                        $netAmount=$v['Money'];
                        if($v['Status'] == 'Cancel'){
                            $validBetAmount=0;
                            $netAmount=0;
                        }
                        $xzhm = $v['Content'];
                    }else if($plat_type == 'sw'){
                        $betorderid=$v['roundId'];
                        $ctime=$v['firstTs'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['GameName'];
                        $netAmount=$v['payOff'];
                    }else if($plat_type == 'bng'){
                        $betorderid=$v['transaction_id'];
                        $ctime=$v['c_at'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['bet'];
                        $validBetAmount=$v['bet'];
                        $gamecode=$v['game_name_cn'];
                        $netAmount=$v['payOff'];
                    }else if($plat_type == 'ap'){
                        $betorderid=$v['betId'];
                        $ctime=$v['stime'];
                        $PlayerName = $v["loginId"];
                        $betAmount=$v['allput'];
                        $validBetAmount=$v['realput'];
                        $gamecode=$v['GameName'];
                        $netAmount=$v['chg'];
                    }else if($plat_type == 'dt'){
                        $betorderid = $v['betId'];
                        $ctime = $v['createTime'];
                        $PlayerName = $v['loginId'];
                        $betAmount=$v['betPrice'];
                        $validBetAmount=$v['betPrice'];
                        $netAmount=$v['prizeWins'];
                        $gamecode = $v['gameName'];
                    }else if($plat_type == 'pg'){
                        $betorderid = $v['recordID'];
                        $ctime = $v['bdate'];
                        $PlayerName = $v['loginId'];
                        $betAmount = $v['bet'];
                        $validBetAmount = $v['bet'];
                        $gamecode = $v['GameName'];
                        $netAmount = $v['winlose'];
                    }else if($plat_type == 'gti'){
                        $betorderid = $v['betId'];
                        $ctime = $v['betTime'];
                        $PlayerName = $v['loginId'];
                        $betAmount = $v['betAmount'];
                        $validBetAmount = $v['validAmount'];
                        $gamecode = $v['GameName'];
                        $netAmount = $v['payOff'];
                    }else if($plat_type == 'png'){
                        $betorderid = $v['RoundId'];
                        $ctime = $v['Time'];
                        $PlayerName = $v['loginId'];
                        $betAmount = $v['Amount'];
                        $validBetAmount = $v['Amount'];
                        $gamecode = $v['GameName'];
                        $netAmount = $v['PayOff'];
                    }
                    if(empty($v['playType'])){
                        $v['playType']='';
                    }
                    $r_mod = \App\Models\GameRecord::where('billNo', $betorderid)->where('api_type', $api_mod->id)->first();

                    //dd($r_mod->toArray());
                    if($r_mod){
                        if($plat_type=='gj'){
                            if($flag =='0'){
                                $r_mod->update([
                                    'netAmount' => $netAmount,
                                    'flag'=>'0'
                                ]);
                            }

                        }else{
                            if($r_mod->netAmount != $netAmount){

                                $r_mod->update([
                                    'netAmount' => $netAmount,

                                ]);
                            }
                            if($r_mod ->validBetAmount != $validBetAmount ){
                                $r_mod->update([
                                    'validBetAmount' => $validBetAmount,

                                ]);
                            }
                            if($r_mod->xzhm != $xzhm){
                                $r_mod->update([
                                    'xzhm' => $xzhm,

                                ]);
                            }
                        }
                    }else{


                        $name = substr($PlayerName, strlen($l));
                        $m = \App\Models\Member::where('name', $name)->first();

                        //if($netAmount){
                            $rs = \App\Models\GameRecord::create([
                                'billNo' => $betorderid,
                                'playerName' => $PlayerName,
                                'betAmount' => $betAmount,
                                'validBetAmount' => $validBetAmount,
                                'netAmount' => $netAmount,
                                'reAmount' => $netAmount,
                                'betTime' => $ctime,
                                'gameCode' => $gamecode,
                                'playType' => $v['playType'],
                                'gameType' => $game_type,
                                'flag'=>$flag,
                                'api_type' => $api_mod->id,
                                'name' => $name,
                                'member_id' => $m?$m->id:0,
                                'result' => json_encode($v),
                                'xzhm' => $xzhm ? $xzhm : ''
                            ]);
                        //}
                    //dump($rs);

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
    <title></title>
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
<h1>
    <?php
    if($game_type == 1){
        $str=strtoupper($plat_type)."视讯";
    }else if($game_type == 2){
        $str=strtoupper($plat_type)."电子";
    }else if($game_type == 3){
        $str=strtoupper($plat_type)."彩票";
    }else if($game_type == 4){
        $str=strtoupper($plat_type)."体育";
    }else if($game_type == 5){
        $str=strtoupper($plat_type)."电竞";
    }else if($game_type == 6){
        $str=strtoupper($plat_type)."捕鱼";
    }else if($game_type == 7){
        $str=strtoupper($plat_type)."棋牌";
    }
    ?>
</h1>
<table width="100%"border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="left">
            <input type=button name=button value="刷新" onClick="window.location.reload()">
            <input type=button name=button value="补采集" onClick="bu(window.location)">
            <?php echo $str; ?>:成功采集到<?=$count?>条数据
            <span id="timeinfo"></span>

        </td>
        <td>开始时间：<?php echo date("Y-m-d H:i:s",$S_time);?>------ <?php echo date("Y-m-d H:i:s",$E_time);?></td>
    </tr>
</table>
<script>
    function bu(url) {
        var tmp = Date.parse( new Date() ).toString();
        var st = tmp.substr(0,10) - 24 * 60 * 60;
        var et = tmp.substr(0,10);
        var url = url + '&st='+st + '&et='+et;
        window.open (url) ;
    }
</script>
</body>
</html>
