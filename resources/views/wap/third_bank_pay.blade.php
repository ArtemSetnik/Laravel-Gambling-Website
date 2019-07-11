@extends('wap.layouts.main')
@section('content')
<style type="text/css">
    .info-container .info {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ECE8E9;
    border-radius: 5px;
    background-color: #F8F8F8;
    margin-bottom: 20px;
}
.userInfo input, .userInfo select, .userInfo textarea {
    width: 100% !important;
}
.wrap input {
    border: 1px solid #ddd;
    padding: 0 5px;
    border-radius: 2px;
}
</style>
    <div class="container-fluid gm_main">
        <div class="head">
            <a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
            <span>{{ __('mb.Online_banking_to_pay') }}</span>
            <a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
        </div>
        <div class="userInfo wrap" style="padding: 50px;">

                <div class="info-container">
                    <div class="info" style="color:#333;">
                         {{ __('ft.Please_select_the_corresponding_payment_method') }}
                    </div>
                </div>
                <form action="{{ route('wap.post_weixin_pay') }}" method="post" class="form-horizontal" enctype="multipart/form-data" id="third_bank_pay_form">
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{ __('ft.Wechat_QR_code') }}：</label>

                        <div class="col-md-10">
                            <input type="file" name="image_receipt" id="profile-img"/><br>
                            
                            <img src="" id="profile-img-tag" width="100px" height="100px" />
                           
                        </div>
                        
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{ __('ft.user_account') }}：</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $_member->name }}" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{ __('ft.Remittance_amount') }}：</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="money">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{ __('ft.Remittance_Account') }}：</label>
                        <div class="col-md-10">
                            <select name="account">
                                <option value="Maybank 2330133">Maybank 2330133</option>
                                <option value="ClmbBak 231415">ClmbBak 231415</option>
                                <option value="HSBC 11231313">HSBC 11231313</option>
                                <option value="HongLeong 141515">HongLeong 141515</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="account"> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{ __('ft.Deposit_Time') }}：</label>
                        <div class="col-md-10 pay-time">
                            <div class="col-md-3">
                                <input type="text" name="paytime" onclick="WdatePicker()" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="date_h">
                                    <option value="{{ date('H') }}">{{ date('H') }} {{ __('ft.Time') }}</option>
                                    <option value="00"> 00 {{ __('ft.Time') }} </option>
                                    <option value="01"> 01 {{ __('ft.Time') }} </option>
                                    <option value="02"> 02 {{ __('ft.Time') }} </option>
                                    <option value="03"> 03 {{ __('ft.Time') }} </option>
                                    <option value="04"> 04 {{ __('ft.Time') }} </option>
                                    <option value="05"> 05 {{ __('ft.Time') }} </option>
                                    <option value="06"> 06 {{ __('ft.Time') }} </option>
                                    <option value="07"> 07 {{ __('ft.Time') }} </option>
                                    <option value="08"> 08 {{ __('ft.Time') }} </option>
                                    <option value="09"> 09 {{ __('ft.Time') }} </option>
                                    <option value="10"> 10 {{ __('ft.Time') }} </option>
                                    <option value="11"> 11 {{ __('ft.Time') }} </option>
                                    <option value="12"> 12 {{ __('ft.Time') }} </option>
                                    <option value="13"> 13 {{ __('ft.Time') }} </option>
                                    <option value="14"> 14 {{ __('ft.Time') }} </option>
                                    <option value="15"> 15 {{ __('ft.Time') }} </option>
                                    <option value="16"> 16 {{ __('ft.Time') }} </option>
                                    <option value="17"> 17 {{ __('ft.Time') }} </option>
                                    <option value="18"> 18 {{ __('ft.Time') }} </option>
                                    <option value="19"> 19 {{ __('ft.Time') }} </option>
                                    <option value="20"> 20 {{ __('ft.Time') }} </option>
                                    <option value="21"> 21 {{ __('ft.Time') }} </option>
                                    <option value="22"> 22 {{ __('ft.Time') }} </option>
                                    <option value="23"> 23 {{ __('ft.Time') }} </option>
                                    <option value="24"> 24 {{ __('ft.Time') }} </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="date_i">
                                    <option value="{{ date('i') }}">{{ date('i') }} {{ __('ft.Minute') }}</option>
                                    <option value="00"> 00 {{ __('ft.Minute') }} </option>
                                    <option value="01"> 01 {{ __('ft.Minute') }} </option>
                                    <option value="02"> 02 {{ __('ft.Minute') }} </option>
                                    <option value="03"> 03 {{ __('ft.Minute') }} </option>
                                    <option value="04"> 04 {{ __('ft.Minute') }} </option>
                                    <option value="05"> 05 {{ __('ft.Minute') }} </option>
                                    <option value="06"> 06 {{ __('ft.Minute') }} </option>
                                    <option value="07"> 07 {{ __('ft.Minute') }} </option>
                                    <option value="08"> 08 {{ __('ft.Minute') }} </option>
                                    <option value="09"> 09 {{ __('ft.Minute') }} </option>
                                    <option value="10"> 10 {{ __('ft.Minute') }} </option>
                                    <option value="11"> 11 {{ __('ft.Minute') }} </option>
                                    <option value="12"> 12 {{ __('ft.Minute') }} </option>
                                    <option value="13"> 13 {{ __('ft.Minute') }} </option>
                                    <option value="14"> 14 {{ __('ft.Minute') }} </option>
                                    <option value="15"> 15 {{ __('ft.Minute') }} </option>
                                    <option value="16"> 16 {{ __('ft.Minute') }} </option>
                                    <option value="17"> 17 {{ __('ft.Minute') }} </option>
                                    <option value="18"> 18 {{ __('ft.Minute') }} </option>
                                    <option value="19"> 19 {{ __('ft.Minute') }} </option>
                                    <option value="20"> 20 {{ __('ft.Minute') }} </option>
                                    <option value="21"> 21 {{ __('ft.Minute') }} </option>
                                    <option value="22"> 22 {{ __('ft.Minute') }} </option>
                                    <option value="23"> 23 {{ __('ft.Minute') }} </option>
                                    <option value="24"> 24 {{ __('ft.Minute') }} </option>
                                    <option value="25"> 25 {{ __('ft.Minute') }} </option>
                                    <option value="26"> 26 {{ __('ft.Minute') }} </option>
                                    <option value="27"> 27 {{ __('ft.Minute') }} </option>
                                    <option value="28"> 28 {{ __('ft.Minute') }} </option>
                                    <option value="29"> 29 {{ __('ft.Minute') }} </option>
                                    <option value="30"> 30 {{ __('ft.Minute') }} </option>
                                    <option value="31"> 31 {{ __('ft.Minute') }} </option>
                                    <option value="32"> 32 {{ __('ft.Minute') }} </option>
                                    <option value="33"> 33 {{ __('ft.Minute') }} </option>
                                    <option value="34"> 34 {{ __('ft.Minute') }} </option>
                                    <option value="35"> 35 {{ __('ft.Minute') }} </option>
                                    <option value="36"> 36 {{ __('ft.Minute') }} </option>
                                    <option value="37"> 37 {{ __('ft.Minute') }} </option>
                                    <option value="38"> 38 {{ __('ft.Minute') }} </option>
                                    <option value="39"> 39 {{ __('ft.Minute') }} </option>
                                    <option value="40"> 40 {{ __('ft.Minute') }} </option>
                                    <option value="41"> 41 {{ __('ft.Minute') }} </option>
                                    <option value="42"> 42 {{ __('ft.Minute') }} </option>
                                    <option value="43"> 43 {{ __('ft.Minute') }} </option>
                                    <option value="44"> 44 {{ __('ft.Minute') }} </option>
                                    <option value="45"> 45 {{ __('ft.Minute') }} </option>
                                    <option value="46"> 46 {{ __('ft.Minute') }} </option>
                                    <option value="47"> 47 {{ __('ft.Minute') }} </option>
                                    <option value="48"> 48 {{ __('ft.Minute') }} </option>
                                    <option value="49"> 49 {{ __('ft.Minute') }} </option>
                                    <option value="50"> 50 {{ __('ft.Minute') }} </option>
                                    <option value="51"> 51 {{ __('ft.Minute') }} </option>
                                    <option value="52"> 52 {{ __('ft.Minute') }} </option>
                                    <option value="53"> 53 {{ __('ft.Minute') }} </option>
                                    <option value="54"> 54 {{ __('ft.Minute') }} </option>
                                    <option value="55"> 55 {{ __('ft.Minute') }} </option>
                                    <option value="56"> 56 {{ __('ft.Minute') }} </option>
                                    <option value="57"> 57 {{ __('ft.Minute') }} </option>
                                    <option value="58"> 58 {{ __('ft.Minute') }} </option>
                                    <option value="59"> 59 {{ __('ft.Minute') }} </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="date_s">
                                    <option value="{{ date('s') }}">{{ date('s') }} {{ __('ft.second') }} </option>
                                    <option value="00"> 00 {{ __('ft.second') }} </option>
                                    <option value="01"> 01 {{ __('ft.second') }} </option>
                                    <option value="02"> 02 {{ __('ft.second') }} </option>
                                    <option value="03"> 03 {{ __('ft.second') }} </option>
                                    <option value="04"> 04 {{ __('ft.second') }} </option>
                                    <option value="05"> 05 {{ __('ft.second') }} </option>
                                    <option value="06"> 06 {{ __('ft.second') }} </option>
                                    <option value="07"> 07 {{ __('ft.second') }} </option>
                                    <option value="08"> 08 {{ __('ft.second') }} </option>
                                    <option value="09"> 09 {{ __('ft.second') }} </option>
                                    <option value="10"> 10 {{ __('ft.second') }} </option>
                                    <option value="11"> 11 {{ __('ft.second') }} </option>
                                    <option value="12"> 12 {{ __('ft.second') }} </option>
                                    <option value="13"> 13 {{ __('ft.second') }} </option>
                                    <option value="14"> 14 {{ __('ft.second') }} </option>
                                    <option value="15"> 15 {{ __('ft.second') }} </option>
                                    <option value="16"> 16 {{ __('ft.second') }} </option>
                                    <option value="17"> 17 {{ __('ft.second') }} </option>
                                    <option value="18"> 18 {{ __('ft.second') }} </option>
                                    <option value="19"> 19 {{ __('ft.second') }} </option>
                                    <option value="20"> 20 {{ __('ft.second') }} </option>
                                    <option value="21"> 21 {{ __('ft.second') }} </option>
                                    <option value="22"> 22 {{ __('ft.second') }} </option>
                                    <option value="23"> 23 {{ __('ft.second') }} </option>
                                    <option value="24"> 24 {{ __('ft.second') }} </option>
                                    <option value="25"> 25 {{ __('ft.second') }} </option>
                                    <option value="26"> 26 {{ __('ft.second') }} </option>
                                    <option value="27"> 27 {{ __('ft.second') }} </option>
                                    <option value="28"> 28 {{ __('ft.second') }} </option>
                                    <option value="29"> 29 {{ __('ft.second') }} </option>
                                    <option value="30"> 30 {{ __('ft.second') }} </option>
                                    <option value="31"> 31 {{ __('ft.second') }} </option>
                                    <option value="32"> 32 {{ __('ft.second') }} </option>
                                    <option value="33"> 33 {{ __('ft.second') }} </option>
                                    <option value="34"> 34 {{ __('ft.second') }} </option>
                                    <option value="35"> 35 {{ __('ft.second') }} </option>
                                    <option value="36"> 36 {{ __('ft.second') }} </option>
                                    <option value="37"> 37 {{ __('ft.second') }} </option>
                                    <option value="38"> 38 {{ __('ft.second') }} </option>
                                    <option value="39"> 39 {{ __('ft.second') }} </option>
                                    <option value="40"> 40 {{ __('ft.second') }} </option>
                                    <option value="41"> 41 {{ __('ft.second') }} </option>
                                    <option value="42"> 42 {{ __('ft.second') }} </option>
                                    <option value="43"> 43 {{ __('ft.second') }} </option>
                                    <option value="44"> 44 {{ __('ft.second') }} </option>
                                    <option value="45"> 45 {{ __('ft.second') }} </option>
                                    <option value="46"> 46 {{ __('ft.second') }} </option>
                                    <option value="47"> 47 {{ __('ft.second') }} </option>
                                    <option value="48"> 48 {{ __('ft.second') }} </option>
                                    <option value="49"> 49 {{ __('ft.second') }} </option>
                                    <option value="50"> 50 {{ __('ft.second') }} </option>
                                    <option value="51"> 51 {{ __('ft.second') }} </option>
                                    <option value="52"> 52 {{ __('ft.second') }} </option>
                                    <option value="53"> 53 {{ __('ft.second') }} </option>
                                    <option value="54"> 54 {{ __('ft.second') }} </option>
                                    <option value="55"> 55 {{ __('ft.second') }} </option>
                                    <option value="56"> 56 {{ __('ft.second') }} </option>
                                    <option value="57"> 57 {{ __('ft.second') }} </option>
                                    <option value="58"> 58 {{ __('ft.second') }} </option>
                                    <option value="59"> 59 {{ __('ft.second') }} </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-7">
                            <button type="button" class="btn btn-primary form-control ajax-submit-without-confirm-btn">{{ __('ft.Submit') }}</button>
                        </div>
                    </div>
                </form>

            <!--        </div>-->
        </div>
    </div>
     <script type="text/javascript">

    $('#profile-img-tag').hide();
   
    $("#profile-img").change(function(){
      $('#profile-img-tag').show();
    });
   

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
@endsection