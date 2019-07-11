<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h1>电子类</h1>
@if(in_array('AG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ag&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('BBIN', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">

        <iframe src="{{ route('ng.game_record') }}?plat_type=bbin&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=pt&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('MG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=mg&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('MW', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=mw&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('SA', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sa&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PP', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=pp&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('CQ9', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=cq9&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('SG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sg&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('GPI', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=gpi&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('QT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=qt&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('JDB', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=jdb&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('FG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=fg&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('SW', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sw&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('BNG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bng&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('DT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=dt&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=pg&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('GTI', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=gti&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PNG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=png&game_type=2" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
<h1>真人类</h1>

@if(in_array('AG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ag&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif


@if(in_array('BBIN', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bbin&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif


@if(in_array('BG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bg&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('SUNBET', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sunbet&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('ALLBET', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=allbet&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('LEBO', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=lebo&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('SA', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sa&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('GD', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=gd&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('OG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=og&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('DG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=dg&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('MG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=mg&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=pt&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('GPI', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=gpi&game_type=1" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif



<h1>彩票类</h1>
@if(in_array('NG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ng&game_type=3" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('BBIN', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bbin&game_type=3" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('BG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bg&game_type=3" width="100%" height="100%" frameborder="0">
        </iframe>
    </div>
@endif
@if(in_array('VR', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=vr&game_type=3" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('EG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=eg&game_type=3" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('IG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ig&game_type=3" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

<h1>体育竞猜</h1>

@if(in_array('SS', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ss&game_type=4" width="100%" height="100%" frameborder="0">
        </iframe>
    </div>
@endif
@if(in_array('BBIN', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bbin&game_type=4" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('NEWBB', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=newbb&game_type=4" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('IBC', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ibc&game_type=4" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('GJ', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=gj&game_type=4" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('AG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ag&game_type=4" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif


<h1>棋牌类</h1>

@if(in_array('KY', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ky&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif

@if(in_array('MT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=mt&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('VG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=vg&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('FG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=fg&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('LEG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=leg&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('AP', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ap&game_type=7" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
<h1>捕鱼类</h1>
@if(in_array('AG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=ag&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('BBIN', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=bbin&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('MW', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=mw&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('SA', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sa&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('CQ9', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=cq9&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('JDB', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=jdb&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('FG', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=fg&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('PT', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=pt&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('SW', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=sw&game_type=6" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
<h1>电竞类</h1>
@if(in_array('HC', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=hc&game_type=5" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('ESB', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=esb&game_type=5" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('NEWBB', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=newbb&game_type=5" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
@if(in_array('AVIA', $_api_list))
    <div style="width: 100%;height:100px;margin: auto">
        <iframe src="{{ route('ng.game_record') }}?plat_type=avia&game_type=5" width="100%" height="100%" frameborder="0">

        </iframe>
    </div>
@endif
</body>
</html>
