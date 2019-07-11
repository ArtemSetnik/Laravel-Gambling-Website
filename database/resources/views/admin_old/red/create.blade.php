@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Add_red_envelope_level')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('red.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="min_amount" class="col-sm-2 control-label">{{__('words.Minimum_recharge_range')}}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="min_amount" name="min_amount" placeholder="" />
                            </div>
                            <label for="max_amount" class="col-sm-1 control-label">{{__('words.maximum')}}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="max_amount" name="max_amount" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="min_rate" class="col-sm-2 control-label">{{__('words.The_red_envelope_amount_is_the_smallest')}}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="min_rate" name="min_rate" placeholder="{{__('words.Example_5')}}" />
                            </div>
                            <label for="max_rate" class="col-sm-1 control-label">{{__('words.maximum')}}</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="max_rate" name="max_rate" placeholder="{{__('words.Example_5')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">{{__('words.Sort')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="sort" name="sort" placeholder="{{__('words.example')}}：1500" value="1" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="times" class="col-sm-2 control-label">{{__('words.Number_of_extractions')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="times" name="times" value="1" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('red.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection