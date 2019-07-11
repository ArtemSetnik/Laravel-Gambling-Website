<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.user')}}</span>
                    <input type="text" name="name" class="form-control" value="{{ $name }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.transfer')}}</span>
                    <select name="transfer_type" id="transfer_type" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        @foreach(config('platform.transfer_type') as $k => $v)
                            <option value="{{ $k }}" @if(is_numeric($transfer_type) && $transfer_type == $k) selected @endif>{{ __($v) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.transfer_to_account')}}</span>
                    <select name="transfer_in_account" id="transfer_in_account" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        <option value="中心账户">{{__('words.central_account')}}</option>
                        @foreach($_api_list as $k => $v)
                            <option value="{{ $v }}" @if($transfer_in_account == $v) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.transfer_account')}}</span>
                    <select name="transfer_out_account" id="transfer_out_account" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        <option value="中心账户">{{__('words.central_account')}}</option>
                        <option value="返水账户">{{__('words.return_water_account')}}</option>
                        @foreach($_api_list as $k => $v)
                            <option value="{{ $v }}" @if($transfer_out_account == $v) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.starting_time')}}</span>
                    <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.end_time')}}</span>
                    <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>&nbsp;
                    {{--<button type="button" class="btn btn-danger" id="delete-btn">删除记录</button>--}}
                </div>
            </div>
        </div>
    </form>
    <script>
        var form_action = "{{ route('transfer.del') }}";
        $(function(){
            $('#delete-btn').click(function(){
                var btn = $(this);
                var go = false;

                layer.confirm("{{__('words.confirm_box_platform_transfer')}}", {
                    btn: ["{{__('words.determine')}}", "{{__('words.cancel')}}"] //可以无限个按钮
                }, function(index, layero){
                    go = true;
                    if (go == true)
                    {
                        btn.attr('disabled', true);
                        var form = btn.parents('form');

                        var url = form_action;
                        var method = 'POST';

                        var rest_method = form.find("input[name='_method']");
                        var method_s = rest_method.length > 0 ? rest_method.val() : method;
                        var detailLoad = layer.load(2, {
                            shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
                            //shade:false
                        });

                        $.ajax({
                            type: method_s,
                            url: url,
                            data: form.serialize(),
                            dataType: "json",
                            success: function(data){
                                layer.close(detailLoad);
                                btn.attr('disabled', false);

                                var html = '';
                                var obj = JSON.parse (data.status.msg);

                                for ( var p in obj )
                                {
                                    if (typeof (obj[p]) == 'string')
                                    {
                                        html+= '<p><b>'+ obj[p] + '</b></p>';
                                    } else if(obj[p] instanceof Array)
                                    {
                                        for (var i=0;i<obj[p].length;i++)
                                        {
                                            html+= '<p><b>'+ obj[p][i] + '</b></p>';
                                        }

                                    }
                                }
                                //
                                layer.confirm(html, {
                                    btn: ['确定'] //按钮
                                });
                                if (data.url)
                                    location.href=data.url;
                                //else
                                //    layer.confirm(html, {
                                //        btn: ['确定'] //按钮
                                //    });

                            }
                        });
                    }
                }, function(index){
                    layer.close(index);
                    return false;
                });


            })

        })
    </script>
</div>