<?php

namespace App\Http\Controllers\Admin;

use App\Models\GameList;
use App\Services\TcgService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class GameListController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new GameList();

        $name = $game_type = $api_id = $client_type = '';

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'LIKE', "%$name%");
        }

        if ($request->has('game_type'))
        {
            $game_type = $request->get('game_type');
            $mod = $mod->where('game_type', $game_type);
        }

        if ($request->has('api_id'))
        {
            $api_id = $request->get('api_id');
            $mod = $mod->where('api_id', $api_id);
        }

        if ($request->has('client_type'))
        {
            $client_type = $request->get('client_type');
            $mod = $mod->where('client_type', $client_type);
        }


        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.game_list.index', compact('data', 'name','game_type', 'api_id', 'client_type'));
    }

    public function create()
    {
        return view('admin.game_list.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'game_list.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

//        if (GameList::where('api_id', $data['api_id'])->where('game_id', $data['game_id'])->first())
//            return responseWrong('该接口下已存在该游戏代码');

        GameList::create($data);

        return responseSuccess('', '', route('game_list.index'));

    }

    public function edit($id)
    {
        $data = GameList::findOrFail($id);

        return view('admin.game_list.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'game_list.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if (GameList::where('game_id', $data['game_id'])->where('id', '!=', $id)->first())
            return responseWrong('已存在该游戏代码');

        $mod = GameList::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('game_list.index'));

    }

    public function destroy($id)
    {
        GameList::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = GameList::findOrFail($id);

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
                GameList::where('productType', $productType)->where('game_type', $type)->where('client_type', $client_type)->where('id', '>', 1)->delete();

                foreach ($data as $value) {
                    GameList::create([
                        'displayStatus' => $value['displayStatus'],
                        'game_type' => $value['game_type'],
                        'name' => $value['name'],
                        'tcgGameCode' => $value['tcgGameCode'],
                        'api_id' => $value['api_id'],
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
