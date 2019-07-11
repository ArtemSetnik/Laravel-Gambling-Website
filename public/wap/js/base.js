function lay_msg(msg, eFun) {
    var css = 'color: #333; background-color: #fff; width: auto';
    layer.open({
        content: msg,
        time: 1.5,
        style: css,
        end: eFun
    });
}
function orders_info(data) {
    var html = '<table cellspacing="0" cellpadding="0" border="0" class="or_info">';
        html += '<tr class="ft_b b_l1">';
            html += '<td>会员账户</td>';
            html += '<td>可用金额</td>';
        html += '</tr>';
        html += '<tr>';
            html += '<td>' + data.username + '</td>';
            html += '<td>' + data.balance + ' 元</td>';
        html += '</tr>';
    html += '</table>';
    html += '<table cellspacing="0" cellpadding="0" border="0" class="or_info">';
        html += '<tr class="ft_b">';
            html += '<td colspan="3">' + data.qishu + '期</td>';
        html += '</tr>';
        html += '<tr class="ft_b b_l1">';
            html += '<td>注单号</td>';
            html += '<td>下注内容</td>';
            html += '<td>下注额</td>';
        html += '</tr>';
    for(var i in data.tz_list) {
        html += '<tr class="b_l2">';
            html += '<td>' + data.tz_list[i]['orderId'] + '</td>';
            html += '<td>' + data.tz_list[i]['type'] + ' 『' + data.tz_list[i]['wanfa'] + '』 @ ' + data.tz_list[i]['odds'] + '</td>';
            html += '<td>' + data.tz_list[i]['money'] + ' 元</td>';
        html += '</tr>';
    }
        html += '<tr class="ft_b">';
            html += '<td>总计：</td>';
            html += '<td>' + data.tz_sum + '笔</td>';
            html += '<td>' + data.money_all + '元</td>';
        html += '</tr>';
    html += '</table>';
    return html;
}
function formReset() {
    $(".inp").hide().find("input").val("");
    $(".wf_info").find("input[type='radio'], input[type='checkbox']").attr("checked", false);
}
function gm_open(idx) {
    var url = "";
    switch (idx) {
        case 1:
            url = "/Lottery/ssc_list.php";
            break;
        case 2:
            url = "/Lottery/ssc_list.php?type=7";
            break;
        case 3:
            url = "/Lottery/ssc_list.php?type=14";
            break;
        case 4:
            url = "/Lottery/list_Pk10.php";
            break;
        case 5:
            url = "/Lottery/list_Pk10.php?type=8";
            break;
        case 6:
            url = "/Lottery/list_gdsf.php?type=11";
            break;
        case 7:
            url = "/Lottery/list_gdsf.php";
            break;
        case 8:
            url = "/Lottery/list_kl8.php";
            break;
        case 9:
            url = "/Lottery/list_3D.php";
            break;
        case 10:
            url = "/Lottery/list_3D.php?type=10";
            break;
        case 11:
            url = "/Six/Auto.php";
            break;
        case 12:
            url = "/Lottery/list_xy28.php";
            break;
        case 13:
            url = "/Lottery/list_xy28.php?type=13";
            break;
        default:
            url = "/Lottery/list_Pk10.php";
    }
    location.href = url;
}
function gm_rules(idx) {
    var url = "";
    switch (idx) {
        case 1:
            url = "/Lottery/rules/cqssc.php";
            break;
        case 2:
            url = "/Lottery/rules/jxssc.php";
            break;
        case 3:
            url = "/Lottery/rules/xjssc.php";
            break;
        case 4:
            url = "/Lottery/rules/pk10.php";
            break;
        case 5:
            url = "/Lottery/rules/xyft.php";
            break;
        case 6:
            url = "/Lottery/rules/cqsf.php";
            break;
        case 7:
            url = "/Lottery/rules/klsf.php";
            break;
        case 8:
            url = "/Lottery/rules/kl8.php";
            break;
        case 9:
            url = "/Lottery/rules/3d.php";
            break;
        case 10:
            url = "/Lottery/rules/pl3.php";
            break;
        case 11:
            url = "/Six/6rules.php";
            break;
        case 12:
            url = "/Lottery/rules/xy28.php";
            break;
        case 13:
            url = "/Lottery/rules/jnd28.php";
            break;
        default:
            url = "/Lottery/rules/pk10.php";
    }
    location.href = url;
}
//function get_money() {
//    $.getJSON("/leftDao.php?callback=?", function(json) {
//        $("#money").html(json.user_money);
//    });
//    setTimeout(get_money, 5000);
//}

(function() {
    var u_menu = $("#u_nav");
    if(u_menu.length > 0) {
        u_menu.mmenu({
            "slidingSubmenus": false,
            "extensions": ["pagedim-black", "border-full", "effect-menu-fade"],
            "offCanvas": {"position": "left"}
        }).removeAttr("style");
    }
    var t_menu = $("#type");
    if(t_menu.length > 0) {
        t_menu.mmenu({
            "slidingSubmenus": false,
            "extensions": ["pagedim-black", "border-full", "effect-menu-fade"],
            "offCanvas": {"position": "right"}
        }).removeAttr("style");
    }
})();
$(function() {
    $("body[mode != 'gm']").height($(document).height());
    $("#kj_money").keyup(function() {
        var t = $(this).val();
        var r = /^\+?[1-9][0-9]*$/;
        if(!r.test(t)) {
            $(this).val("");
        }
    });
    $(".chk").click(function(e) {
        var fp = $("#fp_time");
        if(fp.html() == "00:00" || fp.html() == "开奖中") {
            return false;
        }
        var inp = $(this).parent().siblings(".inp");
        if(inp.is(":hidden")) {
            var k_m = $("#kj_money").val();
            inp.find("input").val(k_m);
            inp.show();
        } else {
            inp.find("input").val("");
            inp.hide();
        }
		e.stopPropagation();
    });
	$(".wf_info").click(function() {
		var fp = $("#fp_time");
        if(fp.html() == "00:00" || fp.html() == "开奖中") {
            return false;
        }
		var chk = $(this).find(":checkbox");
		if(chk.is(":checked")) {
			chk.attr("checked", false);
		} else {
			chk.attr("checked", true);
		}
		$(this).find(":radio").attr("checked", true);
		var inp = $(this).siblings(".inp");
		if(inp.is(":hidden")) {
            var k_m = $("#kj_money").val();
            inp.find("input").val(k_m);
            inp.show();
        } else {
            inp.find("input").val("");
            inp.hide();
        }
	});
    var g_type = $("#gm_type");
    if(g_type.length > 0) {
        g_type.change(function() {
            location.replace($(this).val());
        });
    }
    //var u_money = $("#money");
    //if(u_money.length > 0) {
    //    get_money();
    //}
  /*  $.getScript("/js/orientationchange-fix.min.js", function() {
        window.addEventListener("orientationchange", function() {
            if(window.neworientation.current === "landscape") {
                alert("为了更好的体验，请使用竖屏浏览！");
            }
        }, false);
    });*/
});