@extends('member.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">注册</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('member.register.post') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="invite_code" value="{{ $i_code }}">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">邮箱</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">确认密码</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="real_name" class="col-md-4 control-label">真实姓名</label>

                            <div class="col-md-6">
                                <input id="real_name" type="text" class="form-control" name="real_name" value="{{ old('username') }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="qk_pwd" class="col-md-4 control-label">取款密码</label>

                            <div class="col-md-6">
                                <input id="qk_pwd" type="password" class="form-control" name="qk_pwd">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary submit-form-sync">
                                    注册
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('after.js')
    <script src="{{ asset('/vendor/layer/layer.js') }}"></script>
    <script src="{{ asset('/js/submitformsync.js') }}"></script>
    <script src="{{ asset('/backstage/js/form_v.js') }}"></script>
 @endsection
