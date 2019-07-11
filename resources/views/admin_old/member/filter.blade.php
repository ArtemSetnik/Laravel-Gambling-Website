<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">账户</span>
                    <input type="text" class="form-control" name="name" placeholder="关键字" value="{{ $name }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">注册IP</span>
                    <input type="text" class="form-control" name="register_ip" placeholder="关键字" value="{{ $register_ip }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">状态</span>
                    <select name="status" id="status" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach(config('platform.member_status') as $k =>$v)
                            <option value="{{ $k }}" @if(is_numeric($status) && $k == $status) selected @endif>{{ $v }}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">在线/下线</span>
                    <select name="on_line" id="on_line" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach(config('platform.member_on_line') as $k =>$v)
                            <option value="{{ $k }}" @if($k == $on_line) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>