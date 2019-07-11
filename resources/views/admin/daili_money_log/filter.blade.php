<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.select_agent') }}</span>
                    <select name="member_id" id="member_id" class="form-control select2">
                        <option value="">--{{ __('words.please_choose') }}--</option>
                        @foreach($_daili_list as $k => $v)
                            <option value="{{ $k }}" @if($member_id == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{ __('words.search_for') }}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{ __('words.reset') }}</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>