@extends('layouts.app')

{{-- @section('header')
<meta name="csrf-token" content"{{ csrf_token() }}">
@endsection --}}

@section('content')
<!-- register -->
<div class="sign-up-form">
    <div class="clearfix"></div>
    <h3>Register Here</h3>
    <p>Having hands on experience in creating innovative designs,I do offer design 
    solutions which harness</p>
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul id="invalid"></ul>
    </div>
    <div class="sign-up">
        <h5>Personal Information</h5>
        <form class="form.data">

            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="a">User Name* :</h4>
                </div>
                <div class="sign-up2">

                    <input id="name" type="text" placeholder=" " class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="clearfix"> </div>
            </div>
            {{-- <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="b">Last Name* :</h4>
                </div>
                <div class="sign-up2">

                    <input type="text" placeholder=" " class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="clearfix"> </div>
            </div> --}}
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="c">Email Address* :</h4>
                </div>
                <div class="sign-up2">
                    <input type="text" placeholder=" " class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="clearfix"> </div>
            </div>
            <h6>Login Information</h6>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="d">Password* :</h4>
                </div>
                <div class="sign-up2">
                    <input type="password" placeholder=" "  name="password" required>
                    <span class="feedback"></span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4>Confirm Password* :</h4>
                </div>
                <div class="sign-up2">
                   <input id="password-confirm" type="password"  name="password_confirmation" required>
               </div>
               <div class="clearfix"> </div>
           </div>

           <input type="submit" class="submit" value="Submit">
       </form>
   </div>
</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(".submit").click(function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();
        var password_confirmation = $("input[name=password_confirmation]").val();
        

        $.ajax({
         type:'POST',
         url:"{{route('register.store')}}",
         dataType: 'json',
         data:{_token: $('meta[name="csrf-token"]').attr('content'), name:name, email:email, password:password, 
             password_confirmation:password_confirmation},
             success: function(data) {
                if($.isEmptyObject(data.error)){
                    window.location = "{{ route('main.index') }}";
                }else{
                    printErrorMsg(data.error);
                }
            }
        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>

@endsection
@section('footer')
<!-- //register -->

@endsection
