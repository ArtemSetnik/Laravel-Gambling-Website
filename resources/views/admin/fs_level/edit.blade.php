@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Edit_return_level')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('fs_level.update', ['id' => $data->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">{{__('words.Select_the_return_level')}}</label>
                            <div class="col-sm-7">
                                <select name="level" id="level" class="form-control">
                                    <option value="">--{{__('words.please_choose')}}--</option>
                                    @foreach(range(1, 10) as $v)
                                        <option value="{{ $v }}" @if($data->level == $v) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">{{__('words.game_type')}}</label>
                            <div class="col-sm-7">
                                <select name="game_type" id="game_type" class="form-control">
                                    <option value="">--{{__('words.please_choose')}}--</option>
                                    @foreach(config('platform.game_type') as $k => $v)
                                        <option value="{{ $k }}" @if($data->game_type == $k) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">{{__('words.Rank_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{__('words.Example_One_Star_Member')}}" value="{{ $data->name }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quota" class="col-sm-2 control-label">{{__('words.Amount')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="quota" name="quota" placeholder="{{__('words.example')}}：1500" value="{{ $data->quota }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rate" class="col-sm-2 control-label">{{__('words.Return_ratio')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="rate" name="rate" placeholder="{{__('words.example')}}：1.5" value="{{ $data->rate }}" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('fs_level.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection