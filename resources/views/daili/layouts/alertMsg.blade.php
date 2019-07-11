@if (session('msg_ok')|| session('msg_no') || $errors->any())
    <div>
        @if(session('msg_no'))
            <div class="alert alert-error alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="noMsg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ session('msg_no') }}</strong>
            </div>
        @endif
        @if(session('msg_ok'))
            <div class="alert alert-success alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="okMSg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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
@endif