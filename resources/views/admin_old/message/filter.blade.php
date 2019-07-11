<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">标题</span>
                    <input type="text" class="form-control" name="title" placeholder="关键字" value="{{ $title }}">
                </div>
            </div>
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                    <a class="btn btn-info" href="{{ route('message.create') }}"><span class="glyphicon glyphicon-plus"></span>添加站内消息</a>
                </div>
            </div>
        </div>
    </form>
</div>