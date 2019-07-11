<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.account')}}</span>
                    <input type="text" class="form-control" name="name" placeholder="{{__('words.keyword')}}" value="{{ $name }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.registered_IP')}}</span>
                    <input type="text" class="form-control" name="register_ip" placeholder="{{__('words.keyword')}}" value="{{ $register_ip }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.status')}}</span>
                    <select name="status" id="status" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        @foreach(config('platform.member_status') as $k =>$v)
                            <option value="{{ $k }}" @if(is_numeric($status) && $k == $status) selected @endif>{{ $v }}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.online_offline')}}</span>
                    <select name="on_line" id="on_line" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        @foreach(config('platform.member_on_line') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $on_line) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>