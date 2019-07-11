@extends('member.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        代理链接：{{ route('member.register').'?i_code='.auth('member')->user()->invite_code }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
