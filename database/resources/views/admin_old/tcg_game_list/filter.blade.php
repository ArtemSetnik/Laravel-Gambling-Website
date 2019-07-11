<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">游戏名称</span>
                    <input type="text" class="form-control" name="gameName" placeholder="关键字" value="{{ $gameName }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">游戏类型</span>
                    <select name="gameType" id="gameType" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach(config('platform.tcg_game_type') as $k => $v)
                            <option value="{{ $k }}" @if($gameType == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">游戏平台</span>
                    <select name="productCode" id="productCode" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach($_api_list as $k => $v)
                            <option value="{{ $v }}" @if($productCode == $v) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">客户端</span>
                    <select name="client_type" id="client_type" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach(config('platform.tcg_client_type') as $k => $v)
                            <option value="{{ $v }}" @if($client_type == $v) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                    <a class="btn btn-info" href="{{ route('tcg_game_list.create') }}"><span class="glyphicon glyphicon-plus"></span>添加Tcg游戏</a>
                </div>
            </div>
        </div>

    </form>
</div>