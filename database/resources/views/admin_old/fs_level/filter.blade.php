<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.game_type')}}</span>
                    <select name="game_type" id="game_type" class="form-control">
                        <option value="">--{{__('words.please_choose')}}--</option>
                        @foreach(config('platform.game_type') as $k => $v)
                            <option value="{{ $k }}" @if($game_type == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;&nbsp;
                    <a class="btn btn-info" href="{{ route('fs_level.create') }}"><span class="glyphicon glyphicon-plus"></span>{{__('words.Add_water_return_level')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>