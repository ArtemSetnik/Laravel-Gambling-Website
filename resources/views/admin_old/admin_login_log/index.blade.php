@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.administrator_login_record')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.admin_login_log.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th style="width: 15%">{{__('words.account_number')}}</th>
                        <th  >IP</th>
                        <th  style="width: 15%">{{__('words.Log_in_time')}}</th>
                        {{--<th  style="width: 20%">{{__('words.operating')}}</th>--}}
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->user->name or __('words.deleted') }}
                            </td>
                            <td>
                                {{ $item->ip }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>

                            {{--<td>--}}
                            {{--<button type="button" class="btn btn-info btn-xs">查看</button>--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['name' => $name, 'start_at' => $start_at, 'end_at' => $end_at, 'ip' => $ip])->links() !!}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
@endsection