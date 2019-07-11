function notify(msg, type) {
    if (!type) {
        type = 'info';
    }
    Messenger().post({
        message: msg,
        type: type,
        showCloseButton: true
    });
}






/** 
 * http://localhost:8083/proj 
 */
function getRootPath() {
    //获取当前网址
    var curWwwPath = window.document.location.href;
    //获取主机地址之后的目录
    var pathName = window.document.location.pathname;
    var pos = curWwwPath.indexOf(pathName);
    //获取主机地址， 
    var localhostPath = curWwwPath.substring(0, pos);
    //获取带"/"的项目名
    var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
    return (localhostPath + projectName);
}
function plogin() {
    var account = $("#uid").val();
    var pwd = $("#jpwd").val();

    if (account == '' || pwd == '') {
        $.alert('用户名不能为空');
        $("#uid").blur();
        return false;
    }
    if (pwd == '') {

        $.alert('密码不能为空');
        $("#jpwd").blur();
        return false;
    }
    $.showPreloader();
    $.ajax({
        url: '../../account/login',
        type: 'post',
        data: { account: account, password: pwd },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful) {

                location.href = '../../home/index'
                return;
            }
            $.alert(status.Message);
        },
        error: function () {
            $.hidePreloader();
            $.alert('登陆失败');
        }
    });
}
/*bonus*/
function apply(code) {

    $.showPreloader();
    $.ajax({
        url: 'apply',
        type: 'post',
        data: { ty: code },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful)
                $.alert('你的优惠申请已经提交成功,请耐心等待审批');
            else
                $.alert(status.Message, 'error');
        },
        error: function () {
            $.hidePreloader();
            $.alert('系统异常,请联系在线客服');
        }
    });
}
function apply888(recordId)
{
    $.showPreloader();
    $.ajax({
        url: 'ApplyBet888',
        type: 'post',
        data: { recordId: recordId },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful)
                $.alert(status.Message);
            else
                $.alert(status.Message, 'error');
        },
        error: function () {
            $.hidePreloader();
            $.alert('系统异常,请联系在线客服');
        }
    });
}
/*wi*/
function widthdrawalp() {
    var bknum = $("#bknumber").val();
    var amount = $("#money").val();

    if (bknum == '') {
        $.alert('提款卡不能为空');
        return false;
    }

    if (!amount || amount < 100.00 || amount > 300000) {
        $.alert('输入取款金额不能小于100.00或者 大于 300000');
        return false;
    }
    var prm = { money: amount, bknumber: bknum };
    $.showPreloader();
    $.ajax({
        url: 'WithdrawalPost',
        data: prm,
        type: 'post',
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful) {
                $.alert('申请已经提交，请耐心等待。。。');

                $("#form_wthdraw_").hide();
                $("#withdrawApply").show()
            }
            else {
                $.alert(status.Message);
            }


        },
        error: function () {
            $.hidePreloader();
            $.alert('提款异常,请联系在线客服');
        }
    });
}

function choosebk (e) {
    $("#wi_page").show();
    $(e).parent('.page').hide();
        var $span = $(e);
        $("#bknumber").val($span.attr('bknumber'));
        $("#bkname").val($span.attr('bkname'));
        $("#bktype").val($span.attr('bktype'));

      
}
/*trans*/
$(function () {

    $("#gplat  span[gpid]").each(function (index, item) {
        if ($(item).html() != "维护") getBalance($(item));
    });


    $(".recycle-btn").on('click', function () {
        var _btn = $(this);
        _ajaxcount = $("#gplat").find("span[needget=true]").length;
        _nowcount = 0;
        $.showPreloader();
        $("#gplat").find("span[needget=true]").each(function () {
            var _gpid = $(this).attr("gpid");
            if ($("#gplat").find("span[gpid=" + _gpid + "]").html() != "0.00" && $("#gplat").find("span[gpid=" + _gpid + "]").html() != "维护") {
                $.ajax({
                    url: "FundReclaim",
                    type: "POST",
                    dataType: "json",
                    data: {
                        gamecode: _gpid

                    },
                    success: function (data) {
                        if (data.IsSuccessful) {
                            $("#gplat").find("span[gpid=" + _gpid + "]").html("0.00");
                        } else {
                            $("#gplat").find("span[gpid=" + _gpid + "]").html("<img style='cursor:pointer;' refresh='refresh' src=/images/refresh.png >");
                        }
                    }
                }).done(function () {
                    _nowcount++;
                    if (_ajaxcount == _nowcount) {
                        $.alert("执行完毕");
                        getBalance($("span[gpid='ZXQB']"));

                        $.hidePreloader();

                    }
                });
            } else {
                _nowcount++;
                if (_ajaxcount == _nowcount) {
                    notify("执行完毕");
                    getBalance($("span[gpid='ZXQB']"));
                    $.hidePreloader();
                }

            }

        });

    });
    $("#gplat").on('click', "img[refresh]", function () {
        getBalance($(this).parent('span[gpid]'));
    });

});
function setAmount() {
    var tin = $("#tin").text();
    var tout = $("#tout").text();
    if (tout == '主账户')
        $("#amount").val($("span.main-account-num").text());
    else {
        var v = $("span[gpid=" + tout + "]").text();
        if ($.isNumeric(v))
            $("#amount").val(v);
        else {
            $("#amount").val('0');
        }
    }
}
function getBalance(_otd) {
    var gpid = _otd.attr("gpid");
    _otd.html("<img src=../images/loading.gif>");
    $.ajax({
        url: 'getbalance?gpid=' + gpid,
        type: 'get',
        success: function (data) {
            if (data.IsSuccessful) {
                _otd.html(data.Message);

            }

            else
                _otd.html("<img style='cursor:pointer;' refresh='refresh' src=/images/refresh.png >");
        },
        error: function () {
            _otd.html("<img style='cursor:pointer;' refresh='refresh' src=/images/refresh.png >");
        }
    });
}
function transfer() {
    var outid = $("#gm_out").val();
    var inid = $("#gm_in").val();
    var amount = $("#amount").val();
    if (outid == '') {
        $.alert('请选择转出平台');
        return false;
    }
    if (inid == '') {
        $.alert('请选择转入平台');
        return false;
    }
    if (amount == '') {
        $.alert('转移金额格式错误');
        return false;
    }
    $.showPreloader();
    dotransfer(outid, inid, amount);
}
function dotransfer(tout, tin, amount) {
    if (!amount) {
        amount = $("#amount").val();
    }
    if (!tout) {
        tout = $("#gm_out").val();
    }
    if (!tin) {
        tin = $("#gm_in").val();
    }

    var vtin = $("span[gpid=" + tin + "]").text();

    var vtout = $("span[gpid=" + tout + "]").text();
    if (vtin == '维护') {
        $.alert(tin + '处在维护中');
         $.hidePreloader();
        return false;
    }
    if (vtout == '维护') {
        $.alert(tout + '处在维护中');
         $.hidePreloader();
        return false;
    }
    $("span[gpid=" + tin + "]").html("<img src=/images/loading.gif>");
    $("span[gpid=" + tout + "]").html("<img src=/images/loading.gif>");
    $.ajax(
    {
        url: "transferpost",
        type: "POST",
        data: { tout: tout, tin: tin, amount: amount },
        success: function (data) {
            if (data.IsSuccessful) {
                 $.hidePreloader();
                $.alert("转账成功！");
                vtin = parseFloat(vtin) + parseFloat(amount);
                vtout = parseFloat(vtout) - parseFloat(amount);
                $("span[gpid=" + tin + "]").text(vtin.toFixed(2));
                $("span[gpid=" + tout + "]").text(vtout.toFixed(2));
                if (tin == 'ZXQB') {
                    $("span.main-account-num").html(vtin.toFixed(2));
                }
                if (tout == 'ZXQB') {
                    $("span.main-account-num").html(vtout.toFixed(2));
                }

            } else {
                $("span[gpid=" + tin + "]").html(vtin);
                $("span[gpid=" + tout + "]").html(vtout);
                if (tin == 'ZXQB') {
                    $("span.main-account-num").html(vtin);
                }
                if (tout == 'ZXQB') {
                    $("span.main-account-num").html(vtout);
                }
                 $.hidePreloader();
                $.alert(data.Message);
            }
        },
        error: function (e) {
            $("span[gpid=" + tin + "]").html(vtin);
            $("span[gpid=" + tout + "]").html(vtout);
             $.hidePreloader();
        }
    });
}

/*set my info*/
function modifyMyInfo() {
    var telephone = $("#telephone").val();
    var qq = $("#qq").val();
    var name = $("#uname").val();
    var birthday = $("#birthday").val();
    var sex = $("input[type=radio][name='sex']:checked").val() == "1";

    if (name == '') {
        $.alert('姓名不能为空');
        return false;
    }
    if (qq == '') {
        $.alert('qq不能为空');
        return false;
    }
    if (telephone == '') {
        $.alert('电话不能为空');
        return false;
    }

    if (birthday == '') {
        $.alert('生日不能为空');
        return false;
    }
    if (sex == undefined) {
        $.alert('性别不能为空');
        return false;
    }
    $.showPreloader();


    $.ajax({
        type: 'post',
        url: 'bindinfo',
        data: { telephone: telephone, qq: qq, sex: sex, name: name, birthday: birthday },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful) {
                $.alert('修改成功');
                window.location.reload();
            }
            else {
                $.alert(status.Message);
            }
        }
    });
}
/*set pwd*/
function modifypwd() {
    var oldpwd = $("#oldpwd").val();
    var newpwd = $("#newpwd").val();
    var pwdconfirm = $("#pwdconfirm").val();
    if (oldpwd == '') {
        $.alert('请输入原始密码');
        return false;
    }
    if (newpwd == '') {
        $.alert('请输入新密码');
        return false;
    }
    if (pwdconfirm == '') {
        $.alert('请输入新密码确认');
        return false;
    }
    if (newpwd != pwdconfirm) {
        $.alert('2次输入的密码不一致');
        return false;
    }
    $.showPreloader();
    $.ajax({
        type: 'post',
        url: 'modifypwd',
        data: { oldpwd: oldpwd, newpwd: newpwd },
        success: function (data) {
            $.hidePreloader();
            if (data.IsSuccessful) {
                $.alert('密码修改成功');
              
            }
            else {
                $.alert('密码修改失败');
            }
        },
        error: function () {
            $.hidePreloader();
            $.alert('系统异常,请联系在线客服');
        }
    });
}
/*set bk*/
function SaveBk() {
    var uname = $("#uname").val();
    var bknumber = $("#bknumber").val();
    var bkaddr = $("#bkaddr").val();
    var ukcode = $("#bktype").val();
    if (ukcode == '') {
        $.alert('请选择银行');
        return false;
    }
    if (bknumber == '') {
        $.alert('请填写卡号');
        return false;
    }
    if (uname == '') {
        $.alert('请填写姓名');
        return false;
    }
    if (bkaddr == '') {
        $.alert('请填写开户地址');
        return false;
    }
    $.showPreloader();
    $.ajax({
        url: 'bindBank',
        type: 'post',
        data: { uname: uname, bknumber: bknumber, bkaddr: bkaddr, bankcode: ukcode },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful) {
                $.alert('绑定成功', function () {
                    window.location.reload();
                });

            }
            else {
                $.alert(status.Message);
            }
        },
        error: function () {
            $.hidePreloader();
            $.alert('操作异常，请联系在线客服');
        }
    });
}
/*pt*/
function goto_pt_game(e,gamecode, mode) {

    var lname = $(e).attr('lname');
    var key = $(e).attr('key');
    window.open('http://www.qbw77.com/slot/MToGameNew?gamecode=' + gamecode + '&mode=' + mode + "&loginname=" + lname + "&key=" + key);
}
function goto_mg_game(gamecode, mode) {

    window.open('/slot/Mgtogame?gameCode=' + gamecode);
}
function goto_dt_game(gamecode, mode) {
        window.open('/biapi?game=DT&gameType=' + gamecode);
}
function check_valid() {
    var username = $("#username").val();
    if (!username || String(username).length < 4 || String(username).length > 11) {
        $.alert('用户名不能为空,由4-11个字符长字母或数字组成!');
        return false;
    }

    var password = $("#password").val();
    if (!password || String(password).length < 6 || String(password).length > 12) {
        $.alert('密码不能为空,至少6位到12位!');
        return false;
    }
    var password1 = $("#password1").val();
    if (!password1 || String(password1).length < 6 || String(password1).length > 12) {
        $.alert('确认密码不能为空,字少6位到12位!');
        return false;
    }
    if (password != password1) {
        $.alert('密码与确认密码不相等!');
        return false;
    }

    var captcha = $("#captcha_text").val();
    if (!captcha) {
        $.alert('验证码不能为空!');
        return false;
    }
    var tel = $("#tel").val();
    if (!tel) {
        $.alert('电话不能为空!');
        return false;
    }
    var qq = $("#qq").val();
    if (!qq) {
        $.alert('qq不能为空!');
        return false;
    }
    var uuname = $("#uuname").val();
    if (!uuname) {
        $.alert('真实姓名不能为空');
        return false;
    }
    var bir = $("#bir").val();
    if (!bir)
    {
        $.alert('生日不能为空');
        return false;
    }



    var email = $("#email").val();
    var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    var flag = pattern.test(email);
    if (!email || !flag) {
        $.alert('邮箱不能为空,邮箱格式有错!');
        return false;
    }

    doreg();
}
function doreg() {
    var uname = $("#username").val();
    var password = $("#password").val();
    var tel = $("#tel").val();
    var qq = $("#qq").val();
    var uuname = $("#uuname").val();
    var email = $("#email").val();
    var captcha = $("#captcha_text").val();
    var bir = $("#bir").val();
   
    $.showPreloader();
    $.ajax({
        url: '../../account/regpost',
        type: 'post',
        data: { loginName: uname,name:uuname, email: email, password: password, captcha: captcha, qq: qq, Telephone: tel,bir:bir },
        success: function (status) {
            $.hidePreloader();
            if (status.IsSuccessful) {
                $.alert(status.Message);
                location.href = '../../home/index';
            }
            else {
                $.alert(status.Message);
                get_captcha();
            }
        },
        error: function () {
            $.unblockUI();
            $.alert('注册异常，请联系在线客服');
        }
    });

}
function get_captcha() {
    $('#captcha').attr('src', 'CreateCaptcha?v=' + new Date().getTime());
}

function deposit() {
    var amount = $("#amount").val();
    var remark = $("#remark").val();
    var boId = $("#bolist").val();
    var deptype = $("#deptype").val();
   
    if (amount == '') {
        $.alert('请填写充值金额');
        return false;
    }
    if (remark == '' && deptype == "zfb") {
        $.alert('请填写备注');
        return false;
    }
    var prm = {
        deptype: deptype,
        amount: amount,
        boId: boId,

        remark: remark
    };
    if (deptype == 'zfb') {
        $.showPreloader();
        $.ajax({
            type: 'post',
            url: 'depositpost',
            data: prm,
            success: function (data) {
                $.hidePreloader();
                if (data.IsSuccessful) {
                    showbkinfo(data);
                }
                else
                    $.alert(data.Message);

            },
            error: function () {
                $.hidePreloader();
                $.alert('存款异常,请联系在线客服');

            }
        });
    }
    else {
        $("#atm_form").submit();
    }
}
function showbkinfo(data) {
    $.popup('.depinfo');
   
    $("#bktype").val(data.Bk);
    $("#bkname").val(data.Account);
    $("#bknum").val(data.BkNumber);
    $("#bkaddr").val(data.Addr);
    $("#bk_money").val(data.Money);
    $("#bk_fym").val(data.fym);
}

/**report*/
