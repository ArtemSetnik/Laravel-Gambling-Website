<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{ __('words.title') }}</span>
                    <input type="text" class="form-control" name="title" placeholder="{{ __('words.keyword') }}" value="{{ $title }}">
                </div>
            </div>
            <div class="col-lg-5 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{ __('words.search_for') }}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{ __('words.reset') }}</button>&nbsp;
                    <a class="btn btn-info" href="{{ route('message.create') }}"><span class="glyphicon glyphicon-plus"></span>{{ __('words.add_an_site_message') }}</a>
                </div>
            </div>
        </div>
    </form>
</div>