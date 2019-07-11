<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\GameRecord;
class GameRecordController extends AdminBaseController
{

    public function index(Request $request)
    {
        $mod = new GameRecord();
        $playerName = $start_at = $end_at = $api_type = $gameType = '';
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $mod = $mod->where('api_type', $api_type);
        }
        if ($request->has('gameType'))
        {
            $gameType = $request->get('gameType');
            $mod = $mod->where('gameType', $gameType);
        }
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');
            $mod = $mod->where('playerName', 'like', "%$playerName%");
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('betTime', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('betTime', '<=',$end_at);
        }


        $total_netAmount = $mod->sum('netAmount');
        $total_betAmount = $mod->sum('betAmount');
        $total_netAmount = $total_netAmount;
        $total_validBetAmount = $mod->sum('validBetAmount');

        $data = $mod->orderBy('betTime', 'desc')->paginate(config('admin.page-size'));

        return view('admin.game_record.index', compact('data', 'playerName', 'start_at', 'end_at', 'api_type', 'total_netAmount', 'total_betAmount', 'gameType', 'total_validBetAmount'));
    }

    public function delete(Request $request)
    {
        $mod = new GameRecord();
        //$playerName = $start_at = $end_at = $api_type = $gameType = '';
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $mod = $mod->where('api_type', $api_type);
        }
        if ($request->has('gameType'))
        {
            $gameType = $request->get('gameType');
            $mod = $mod->where('gameType', $gameType);
        }
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');
            $mod = $mod->where('playerName', 'like', "%$playerName%");
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('betTime', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('betTime', '<=',$end_at);
        }

        $mod->delete();

        return responseSuccess('', '删除成功', route('game_record.index'));
    }
}
