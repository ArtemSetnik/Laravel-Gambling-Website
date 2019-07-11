@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.add_commission_level') }}</h3>
            </div>
            <div class="panel-body">
                <h3 style="color: red" class="text-center"> {{ __('words.commission_level_notice') }}</h3>
                <form class="form-horizontal" id="form" action="{{ route('yj_level.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">{{ __('words.choose_commission_level') }}</label>
                            <div class="col-sm-7">
                                <select name="level" id="level" class="form-control">
                                    <option value="">--{{ __('words.please_choose') }}--</option>
                                    @foreach(range(1, 10) as $v)
                                        <option value="{{ $v }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">{{ __('words.rank_name') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="例：一星会员" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="min" class="col-sm-2 control-label">{{ __('words.minimum_amount') }}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="min" name="min" placeholder="例：1500" />
                            </div>
                            <label for="max" class="col-sm-1 control-label">{{ __('words.maximum_amount') }}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="max" name="max" placeholder="例：1500" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="num" class="col-sm-2 control-label">{{ __('words.number_active_users') }}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="num" name="num" placeholder="例：20" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rate" class="col-sm-2 control-label">{{ __('words.commission_rate') }}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="rate" name="rate" placeholder="例：1.5" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{ __('words.submit') }}</button>
                                &nbsp;<a href="{{ route('yj_level.index') }}" class="btn btn-info">{{ __('words.return') }}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection