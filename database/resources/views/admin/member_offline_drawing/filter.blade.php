<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.select_agent') }}</span>
                    <select name="top_id" id="top_id" class="form-control select2">
                        <option value="">--{{ __('words.please_choose') }}--</option>
                        @foreach($_daili_list as $k =>$v)
                            <option value="{{ $k }}" @if($k == $top_id) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.status') }}</span>
                    <select name="status" id="status" class="form-control">
                        <option value="">--{{ __('words.please_choose') }}--</option>
                        @foreach(config('platform.drawing_status') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $status) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.starting_time') }}</span>
                    <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.end_time') }}</span>
                    <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{ __('words.search_for') }}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{ __('words.reset') }}</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>