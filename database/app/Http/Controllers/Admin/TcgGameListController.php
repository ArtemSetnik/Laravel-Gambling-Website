<?php

namespace App\Http\Controllers\Admin;

use App\Models\TcgGameList;
use App\Services\TcgService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TcgGameListController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new TcgGameList();

        $gameName = $gameType = $productCode = $client_type = '';

        if ($request->has('gameName'))
        {
            $gameName = $request->get('gameName');
            $mod = $mod->where('gameName', 'LIKE', "%$gameName%");
        }

        if ($request->has('gameType'))
        {
            $gameType = $request->get('gameType');
            $mod = $mod->where('gameType', $gameType);
        }

        if ($request->has('productCode'))
        {
            $productCode = $request->get('productCode');
            $mod = $mod->where('productCode', $productCode);
        }

        if ($request->has('client_type'))
        {
            $client_type = $request->get('client_type');
            $mod = $mod->where('client_type', $client_type);
        }



        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.tcg_game_list.index', compact('data', 'gameName','gameType', 'productCode', 'client_type'));
    }

    public function create()
    {
        return view('admin.tcg_game_list.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'tcg_game_list.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (TcgGameList::where('tcgGameCode', $data['tcgGameCode'])->first())
            return responseWrong('已存在该游戏代码');

        TcgGameList::create($data);

        return responseSuccess('', '', route('tcg_game_list.index'));

    }

    public function edit($id)
    {
        $data = TcgGameList::findOrFail($id);

        return view('admin.tcg_game_list.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'tcg_game_list.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if (TcgGameList::where('tcgGameCode', $data['tcgGameCode'])->where('id', '!=', $id)->first())
            return responseWrong('已存在该游戏代码');

        $mod = TcgGameList::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('tcg_game_list.index'));

    }

    public function destroy($id)
    {
        TcgGameList::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = TcgGameList::findOrFail($id);

        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }

    public function pull(Request $request)
    {
        $o = new TcgService();
        $type = $request->get('type')?:'RNG';
        $productType =  $request->get('productType')?:3;
        $client_type = $request->get('client_type')?:'web';
        $platform = $request->get('platform')?:'flash';
        $res = json_decode($o->gameList($productType,$type,$client_type,$platform), TRUE);

        if ($res['status'] == 0)
        {

            $data = $res['games'];

            if (count($data) > 0)
            {
                TcgGameList::where('productType', $productType)->where('gameType', $type)->where('client_type', $client_type)->where('id', '>', 1)->delete();

                foreach ($data as $value) {
                    TcgGameList::create([
                        'displayStatus' => $value['displayStatus'],
                        'gameType' => $value['gameType'],
                        'gameName' => $value['gameName'],
                        'tcgGameCode' => $value['tcgGameCode'],
                        'productCode' => $value['productCode'],
                        'productType' => $productType,
                        'platform' => $value['platform'],
                        'client_type' => $client_type
                    ]);
                }

            }


            return respS('拉取成功');
        } else {
            return respS('错误代码 '.$res['status']);
        }
    }
}
