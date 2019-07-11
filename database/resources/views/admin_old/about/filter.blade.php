<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">活动标题</span>
                    <input type="text" class="form-control" name="title" placeholder="关键字" value="{{ $title }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">类型</span>
                    <select name="type" id="type" class="form-control">
                        <option value="">--请选择--</option>
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
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                    {{--<a class="btn btn-info" href="{{ route('about.create') }}"><span class="glyphicon glyphicon-plus"></span>添加关于</a>--}}
                </div>
            </div>

        </div>
    </form>
</div>