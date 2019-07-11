<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.account')}}</span>
                    <input type="text" name="name" class="form-control" value="{{ $name }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.dividend_type')}}</span>
                    <select name="type" id="type" class="form-control">
                        <option value="">{{__('words.please_choose')}}</option>
                        @foreach(config('platform.dividend_type') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $type) selected @endif>{{ __($v )}}</option>
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
                </div>
            </div>
        </div>
    </form>
</div>