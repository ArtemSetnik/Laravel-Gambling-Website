<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.event_title') }}</span>
                    <input type="text" class="form-control" name="title" placeholder="{{ __('words.keyword') }}" value="{{ $title }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.types') }}</span>
                    <select name="type" id="type" class="form-control">
                        <option value="">--{{ __('words.please_choose') }}--</option>
                        @foreach(config('platform.about_type') as $k =>$v)
                            <option value="{{ $k }}" @if(is_numeric($type) && $k == $type) selected @endif>{{ $v }}</option>
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
                    {{--<a class="btn btn-info" href="{{ route('about.create') }}"><span class="glyphicon glyphicon-plus"></span>{{ __('words.add_about') }}</a>--}}
                </div>
            </div>

        </div>
    </form>
</div>