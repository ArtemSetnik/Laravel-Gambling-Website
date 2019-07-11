@extends('wap.layouts.list_main')
@section('content')
    <div class="m_member-title clear textCenter">
        <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
        DT电游
    </div>
    <div class="m_userCenter-line"></div>
    <div class="m_mgList">

        <ul class="clear textCenter">
            @foreach(config('game_list.dt.wap') as $item)
                <li>
                    <a href="{{ route('ng.playGame') }}?api_code=dt&gametype={{ $item['id'] }}&devices=1" class="link-box">
                        <div class="link-box-pic">
                            <?php $img_path = $item['img'];?>
                            <img src="{{ asset("/wap/images/newgame/$img_path") }}" alt="">
                        </div>
                        <p class="link-box-txt">{{ $item['name'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection