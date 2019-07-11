@if (session('msg_ok')|| session('msg_no') || $errors->any())
    <div style="position: fixed;z-index: 9999;top: 0;left:0;width: 100%;">
    @if(session('msg_no'))
        <div class="alert alert-error alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="noMsg">
            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
            <strong>{{ session('msg_no') }}</strong>
        </div>
    @endif
        @if(session('msg_ok'))
            <div class="alert alert-success alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="okMSg">
                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                <strong>{{ session('msg_ok') }}</strong>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-error alert-msg"  style="border-radius: 0;margin:0 auto;width:100%;text-align: center">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
    <script>
        $(function() {
            setTimeout(function(){
                $('.alert-msg').slideUp();
            },2000);

            $('.alertBox').on('click','.linkUrl',function(){
                $('.alertBox').slideUp();
            })
        })
    </script>
@endif