@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.feedback_list')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.feedback.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 10%">{{__('words.Submitter_account')}}</th>
                        <th style="width: 15%">{{__('words.Feedback_type')}}</th>
                        <th>{{__('words.Feedback_content')}}</th>
                        <th style="width: 10%">{{__('words.Read_unread')}}</th>
                        <th style="width: 10%">{{__('words.Submission_time')}}</th>
                        <th style="width: 10%">{{__('words.operating')}}</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->member->name }}
                            </td>
                            <td>
                                {{ config('platform.feedback_type')[$item->type] }}
                            </td>
                            <td>
                                {{ $item->content }}
                            </td>
                            <td>
                                {!! \App\Models\Base::$IS_READ_HTML[$item->is_read] !!}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                @if ($item->is_read == 1)
                                    <a href="{{ route('feedback.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定标记为未读吗？')">{{__('words.unread')}}</a>
                                @elseif($item->is_read == 0)
                                    <a href="{{ route('feedback.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定标记为已读吗？')">{{__('words.Have_read')}}</a>
                                @endif
                                    <button class="btn btn-danger btn-xs"
                                    data-url="{{route('feedback.destroy', ['id' => $item->getKey()])}}"
                                    data-toggle="modal"
                                    data-target="#delete-modal"
                                    >
                                    {{__('words.delete')}}
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong>{{__('words.article')}} </p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['is_read' => $is_read, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
@endsection
@section("after.js")
    @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这条反馈吗?'])
@endsection