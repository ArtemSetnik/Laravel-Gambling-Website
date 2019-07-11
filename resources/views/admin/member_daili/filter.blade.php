<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.account_number')}}</span>
                    <input type="text" class="form-control" name="name" placeholder="{{__('words.keyword')}}" value="{{ $name }}">
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-lg-4 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>&nbsp;
                    <a href="{{ route('member_daili.create') }}" class="btn btn-danger">{{__('words.add_agent')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>