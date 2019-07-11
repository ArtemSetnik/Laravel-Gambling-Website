@extends('daili.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Add_offline_members')}}</h3>
            </div>
            <div class="panel-body">
                <h3 style="color: red" class="text-center"> {{__('words.Login_withdrawal_password_defaults')}}123456</h3>
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('daili.member_offline.store') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">{{__('words.user_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{__('words.user_name')}}" />
                            </div>
                        </div>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.Add_to')}}</button>
                                &nbsp;<a href="{{ route('daili.member_offline') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection