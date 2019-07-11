<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <a class="btn btn-info" href="{{ route('apple.create') }}?type={{ $type }}"><span class="glyphicon glyphicon-plus"></span>{{__('words.Add_interface')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>