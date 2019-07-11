@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Edit_management_group')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('role.update', ['id' => $data->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">{{__('words.Name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{__('words.Example_tourists')}}" value="{{ $data->name }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">{{__('words.description')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="description" name="description"  value="{{ $data->description }}" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('role.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection