<div class="container-fluid" style="margin-bottom: 10px;">
	<form action="" method="get" id="searchForm">
		<div class="row">
			<div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Account')}}</span>
                    <input type="text" class="form-control" name="name" placeholder="{{__('words.Keyword')}}" value="{{ $name }}">
                </div>
            </div>

            <div class="col-lg-6">
            	<div class="input-group">
            		<span class="input-group-addon">{{__('words.time_limit')}}</span>
            		<div class="btn-group" id="time-quick">
	            		<button type="button" class="btn btn-default">{{__('words.The_first_3_days')}}</button>
	            		<button type="button" class="btn btn-default">{{__('words.The_first_7_days')}}</button>
	            		<button type="button" class="btn btn-default">{{__('words.The_first_15_days')}}</button>
                        <button type="button" class="btn btn-default">{{__('words.The_first_30_days')}}</button>
	            	</div>
            	</div>
            </div>
		</div>

		<div class="row" style="margin-top: 5px;">
			<div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Starting_time')}}</span>
                    <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.End_Time')}}</span>
                    <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.Reset')}}</button>&nbsp;
                </div>
            </div>
		</div>

	</form>
</div>