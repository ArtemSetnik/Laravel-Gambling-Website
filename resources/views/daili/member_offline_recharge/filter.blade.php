<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.status')}}</span>
                    <select name="status" id="status" class="form-control">
                        <option value="">--{{__('words.please_choose')}}--</option>
                        @foreach(config('platform.recharge_status') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $status) selected @endif>{{__($v)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Transfer_type')}}</span>
                    <select name="payment_type" id="payment_type" class="form-control">
                        <option value="">--{{__('words.please_choose')}}--</option>
                        @foreach(config('platform.recharge_type') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $payment_type) selected @endif>{{__($v)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Account')}}</span>
                    <input type="text" class="form-control" name="name" value="{{ $name }}">
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
                    <span class="input-group-addon">{{__('words.End_Time')}}End_Time</span>
                    <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>