@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Add_a_bank_card')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('bank_card.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">{{__('words.Choose_an_account_bank')}} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <select name="bank_id" id="bank_id" class="form-control">
                                    <option value="">--{{__('words.please_choose')}}--</option>
                                    @foreach(\App\Models\Base::$BANK_TYPE as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">{{__('words.Cardholder_Name')}} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="username" name="username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="card_no" class="col-sm-2 control-label">{{__('words.card_number')}} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="card_no" name="card_no" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_address" class="col-sm-2 control-label">{{__('words.Account_opening')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_address" name="bank_address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">{{__('words.Reserve_phone_number')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="phone" name="phone" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('bank_card.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection