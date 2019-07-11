@extends('wap.layouts.list_main')
@section('content')
    <ul class="gamelist clear">
        <?php
        $mg_zh = array("丛林吉姆黄金国","迷失拉斯维加斯","K歌乐韵","急冻钻石​","旋转大战","射门!","黑绵羊咩咩叫","银行抢匪","橄榄球明星","百万美人鱼","猫头鹰乐园","银行抢匪2","侠盗猎车手","狮子的自尊","海底派对","春假时光","雷霆风暴","阿丽亚娜","必胜","伊西斯","宝藏宫殿","篮球巨星","幸运妖精","足球之巅","狐狸爵士","城市猎人","摇滚怪兽","伴娘我最大","乔治与柏志","黄金拉斯维加斯大道","好多怪兽","黄金时代","野生熊猫","黄金美式轮盘","现金威乐","黄金拉斯维加斯(单副)","对J高手","黄金欧洲轮盘","翻倍红利扑克","百搭二王","奖金大放送","网球冠军","加德满都","探险之旅","疯狂帽匠","沙滩女孩","A及8牌","A及花牌","漂亮猫咪​","冰上曲棍球","马戏团","狂欢节","开心点心","太阳征程​","东方珍兽","比基尼派对","舞龙","燃烧的慾望","反转马戏团","幸运嘻哈","星光之吻","淑女派对","大航海时代","阿拉斯加垂钓","雷神","雷神2","森林之王","白金俱乐部","上流社会","圣诞大餐","阿瓦隆","疾风老鹰","板球明星","现金之王","虎眼","好运金鲤","慵懒土豆","酷派狼人","暑假时光","古墓奇兵​","液态黄金","冒险丛林","亚洲风情​","哈维斯的晚餐","暗恋","纯银​","暑假","龙的神话","好多寿司​","增强马力","好多糖果","派对岛屿​","快乐假日","金牌拉斯维加斯市中心","万圣节派对​","恋恋法国","泰坦帝国","昆虫派对​","尼罗河宝藏","百万富翁","现金飞溅​","黄金欧洲21点","终极杀手","玛雅公主​","冰雪圣诞村","金牌大西洋城21点","美式酒吧​","瑞维拉财宝","丛林快讯","黄金经典21点​","神秘的梦");

        $mg_gameId = array('jungleJimElDorado','lostVegas','karaokeParty','frozenDiamonds','reelSpinner','shoot','barBarBlackSheep5Reel','breakDaBank','rugbyStar','mermaidsMillions','whatAHoot','breakDaBankAgain','5ReelDrive','lionsPride','fishParty','springBreak','reelThunder','ariana','sureWin','isis','treasurePalace','basketballStar','luckyLeprechaun','footballStar','tallyHo','agentJaneBlonde','boogieMonsters','bridesmaids','rhymingReelsGeorgiePorgie','vegasStripBlackjackGold','soManyMonsters','goldenEra','untamedGiantPanda','americanRouletteGold','cashville','vegasSingleDeckBlackjackGold','jacksOrBetter','europeanRoulette','doubleDoubleBonus','deucesWild','bonusDeucesWild','centreCourt','kathmandu','theGrandJourney','madHatters','beachBabes','acesAndEights','acesAndFaces','prettyKitty','breakAway','bigTop','carnaval','winSumDimSum','sunTide','wildOrient','bikiniParty','dragonDance','burningDesire','theTwistedCircus','loaded','starlightKiss','ladiesNite','ageOfDiscovery','alaskanFishing','thunderstruck','thunderstruckII','bigKahuna','purePlatinum','highSociety','deckTheHalls','avalon','eaglesWings','cricketStar','kingsOfCash','tigersEye','luckyKoi','couchPotato','coolWolf','summertime','tombRaider','liquidGold','adventurePalace','asianBeauty','harveys','secretAdmirer','sterlingSilver','summerHoliday','dragonsMyth','soMuchSushi','supeItUp','soMuchCandy','partyIsland','happyHolidays','vegasDowntownBlackjackGold','halloweenies','voila','stashOfTheTitans','cashapillar','treasureNile','majorMillions','cashSplash','europeanBlackjackGold','hitman','mayanPrincess','santaPaws','atlanticCityBlackjackGold','barsNStripes','rivieraRiches','bushTelegraph','classicBlackjackGold','mysticDreams');
        ?>
        @foreach($mg_gameId as $k => $item)
            <li>
                <a href="{{ route('ng.playGame') }}?api_code=mg&gametype={{ $item }}&devices=1">
                    <img src="{{ asset('/wap/images/mg')}}/{{ $item }}.png" style="width: 70px;height: 70px;">
                    <p class="collect">{{ $mg_zh[$k] }}</p>
                    <a class="start_game" href="{{ route('ng.playGame') }}?api_code=mg&gametype={{ $item }}&devices=1">进入</a>
                </a>
            </li>
        @endforeach
    </ul>
@endsection