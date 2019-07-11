function reflash() {
	window.location.reload();
}
function Go(url){
	window.location.href=url;
}
//修改登录密码
function check_submit_login(){
	if($("#oldpass").val().length<=0){
		//$("#oldpass_txt").html('请输入您的原登录密码');
		alert('请输入您的原登录密码')
		$("#oldpass").select();
		return false;
	}
	if($("#newpass").val().length<6 || $("#newpass").val().length>20){
		//$("#newpass_txt").html('新登录密码只能是6-20位');

        alert('新登录密码只能是6-20位')
		$("#newpass").select();
		return false;
	}
	if($("#newpass").val()!=$("#newpass2").val()){
		//$("#newpass2_txt").html('两次密码输入不一致');

        alert('两次密码输入不一致')
		$("#newpass2").select();
		return false;
	}
}
//修改取款密码
function check_submit_money(){
	if($("#oldmoneypass").val().length<=0){
		//$("#oldmoneypass_txt").html('请输入您的原取款密码');
        alert('请输入您的原取款密码')
		$("#oldmoneypass").select();
		return false;
	}
    var p_reg = /^\d{6}$/;
    if(!p_reg.test($("#newmoneypass").val())) {
        //$("#newmoneypass_txt").html('请输入6位数字的新取款密码');
        alert('请输入6位数字的新取款密码')
        $("#newmoneypass").select();
        return false;
    }
    if($("#newmoneypass").val()!=$("#newmoneypass2").val()){
        //$("#newmoneypass2_txt").html('两次密码输入不一致');
        alert('两次密码输入不一致')
        $("#newmoneypass2").select();
        return false;
    }
}
//设置财务资料
function check_submit_pay(){
	if($("#pay_card").val().length<=0){
		alert('请输入您的收款银行');
		$("#pay_card").select();
		return false;
	}
	if($("#pay_name").val().length<=0){
		alert('请输入您的银行账号持有人姓名');
		$("#pay_name").select();
		return false;
	}
	if($("#pay_num").val().length<10){
		alert('请输入您正确的银行账号');
		$("#pay_num").select();
		return false;
	}
	if($("#pay_address").val().length<=0){
		alert('请输入您的开户行地址');
		$("#pay_address").select();
		return false;
	}
	if($("#vlcodes").val().length<=0){
		alert('请输入验证码');
		$("#vlcodes").select();
		return false;
	}
}
//刷新验证码
function next_checkNum_img() {
	document.getElementById("checkNum_img").src = "../yzm.php?"+Math.random()+(new Date).getTime();
	return false;
}