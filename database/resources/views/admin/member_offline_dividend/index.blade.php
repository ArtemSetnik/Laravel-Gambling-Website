@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.offline_member_bonus_list') }}</h3>
            </div>
            <div class="panel-body">
                @include('admin.member_offline_dividend.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 10%">{{ __('words.user') }}</th>
                        <th style="width: 15%">{{ __('words.dividend_type') }}</th>
                        <th style="width: 10%">{{ __('words.amount') }}</th>
                        <th>{{ __('words.description') }}</th>
                        <th style="width: 10%">{{ __('words.status') }}</th>
                        <th style="width: 10%">{{ __('words.release_time') }}</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->member->name  or __('words.deleted')}}
                            </td>
                            <td>
                                {{ config('platform.dividend_type')[$item->type] }}
                            </td>
                            <td>
                                {{ $item->money }}
                            </td>
                            <td>
                                {{ $item->describe }}
                            </td>
                            <td>
                                <strong style="color: green">{{ __('words.successfully_issued') }}</strong>
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td><strong style="color: red">{{ __('words.total') }}</strong></td>
                            <td></td>
                            <td></td>
                            <td><strong style="color: red">{{ $total_money }}</strong></td>
                            <td colspan="3"></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['status' => $status, 'top_id' =>$top_id,'type' => $type, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
@endsection