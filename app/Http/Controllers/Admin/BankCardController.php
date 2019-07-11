<?php

namespace App\Http\Controllers\Admin;

use App\Models\BankCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BankCardController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new BankCard();

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.bank_card.index', compact('data'));
    }

    public function create()
    {
        return view('admin.bank_card.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'bank_card.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (BankCard::where('card_no', $data['card_no'])->first())
            return responseWrong('卡号已经存在');

        BankCard::create($data);

        return responseSuccess('', '', route('bank_card.index'));

    }

    public function edit($id)
    {
        $data = BankCard::findOrFail($id);

        return view('admin.bank_card.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'bank_card.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if (BankCard::where('card_no', $data['card_no'])->where('id', '!=', $id)->first())
            return responseWrong('卡号已经存在');

        $mod = BankCard::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('bank_card.index'));

    }

    public function destroy($id)
    {
        BankCard::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = BankCard::findOrFail($id);

        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
