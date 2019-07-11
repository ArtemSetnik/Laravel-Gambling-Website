@extends('wap.layouts.list_main')
@section('content')
    <div class="m_member-title clear textCenter">
        <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
        TTG电游
    </div>
    <div class="m_userCenter-line"></div>
    <div class="m_mgList">

        <ul class="clear textCenter">

            @foreach($data as $item)
                <li>
                    <a href="{{ route('ng.playGame') }}?api_code=ttg&gametype={{ $item->tcgGameCode }}&devices=1" class="link-box">
                        <div class="link-box-pic">
                            <img src="{{ $item->img }}" alt="">
                        </div>
                        <p class="link-box-txt">{{ $item->name }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection