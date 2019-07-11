<div class="box-header">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Name')}}</span>
                    <input type="text" class="form-control" name="name" placeholder="{{__('words.Keyword')}}" value="{{ $name }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Management_group')}}</span>
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">--{{__('words.please_choose')}}--</option>
                        @foreach($role_list as $k => $v)
                            <option value="{{ $k }}" @if($k == $role_id) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.Reset')}}</button>&nbsp;
                    <a href="{{ route('user.create') }}" class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span>{{__('words.Add_administrator')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>