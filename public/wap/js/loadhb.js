var imgwidth=50//图片宽度
var imgheight=72//图片高度
var hongbaoCount=5;//每次红包个数
var loadindex=0;
var loadtime=1500;//多少毫秒掉1次红包
var slideSpeed=new Array(8000,12000)//红包掉落速度（毫秒），取此之间的随机数
$(function()
{
    LoadHongBao();//首次打开网页 先执行1次下红包
    setInterval(LoadHongBao,loadtime)//定时执行下红包

    //加载抢红包记录
    /*$.post("/m/member/ajax/gethongbaodata.ashx",{req:"post"},function(data)
    {
        $("#scrollobj").html(data)
    })*/

    $("#msg").click(function()
    {
        closeMsg()
    })
})
//生成指定范围随机数
function FunMath(startSize,endSize)
{
    return Math.floor(Math.random()*(endSize-startSize+1)+startSize);
}

//掉红包
function LoadHongBao()
{
    loadindex++;
    var width=$(window).width();
    var height=$(window).height();
    var hongbaostr="";
    for(i=0;i<hongbaoCount;i++)
    {
        hongbaostr+="<img src=\"/wap/images/hongbao/hongbao.png\" style=\"width:"+FunMath(30,imgwidth)+"px; top:-"+FunMath(imgheight,250)+"px; left:"+FunMath(0,width-imgwidth)+"px\" onclick=\"qing()\" />"
    }
    $(".hongbao").append(hongbaostr)
    for(i=0;i<hongbaoCount;i++)
    {
        $(".hongbao img").eq((loadindex-1)*i).animate({top:height},FunMath(slideSpeed[0],slideSpeed[1]),function()
        {
            $(this).attr("src","").hide()
        })
    }
}




/*往上*/
function scroll(obj) {
    var tmp = (obj.scrollTop)++;
    if (obj.scrollTop == tmp) {
        obj.innerHTML += obj.innerHTML;
    }
    if (obj.scrollTop >= obj.firstChild.offsetWidth) {
        obj.scrollTop = 0;
    }
}
var _timer = setInterval("scroll(document.getElementById('scrollobj'))", 40);
function _stop() {
    if (_timer != null) {
        clearInterval(_timer);
    }
}
function _start() {
    _timer = setInterval("scroll(document.getElementById('scrollobj'))", 40);
}

function showMsg(str)
{
    $("#msg span").html(str)
    $("#msg").fadeIn(200);
}

function closeMsg()
{
    $("#msg").fadeOut(200);
}