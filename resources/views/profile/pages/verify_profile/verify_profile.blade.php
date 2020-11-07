@extends('profile.master')

@section('title'){{__('Profile | Verification')}}@endsection

@section('body')
    <div class="container">
        <div class="container">
            <div class="card shadow-lg">
                <div class="card-body card-content card-sm-para">
                    <h3>Hello Name,</h3>

                    <p>Welcome to our website. Thanks for being our member. According to our rules You need to connect to
                        instagram account to our website. Without verfying your account sorry to say you will not be able to
                        use our app any more....</p>

                    <ol>
                        <li>Verify E-mail.</li>
                        <li>Connect Instagram account.</li>
                        <li>Be an active member of our website.</li>
                    </ol>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="py-5 my-md-5 middle-btns text-center">
                <div class="mb-4">
                    <button class="btn btn-primary">Verify your mail</button>
                </div>
                <!-- /.mb-4 -->
                @if(!Auth::user()->user_status->instagram_verification_status === true)
					<a class="btn btn-primary" id="click-for-verify-instagram" style="cursor: pointer">Connect to instagram</a>
				@else
					<a class="btn btn-success" style="cursor:not-allowed;">Succedded!</a>
				@endif
            </div>
            <!-- /.py-5 -->
        </div>

        @include('profile.modals.connect-instagram')

        <script type="text/javascript">
            $(document).ready(function(){
                $('#click-for-verify-instagram').click(function(){
                    $('#instagramConnect').modal('show');
                });


                $('.step-next').click(function(e){
                    e.preventDefault();
                    $(this).parents('.form-step').siblings().slideDown('slow');
                    $(this).parents('.form-step').slideUp('slow');
                    
                    // get the user account name
                    var instaUsername = $('#insta-username').val();
                    var randomString = 'troca:'+Math.random().toString(36).substr(1, 10);

                    $('#generated-code').text(randomString.toLowerCase().toString());

                    $('#verify-now').click(function(){

                        $('#verify-now').css('display', 'none');
                        $('#working').css('display', 'block');

                        $.ajax({

                            type: 'GET',
                            url: `https://instagram.com/${instaUsername}/?__a=1`,
                            dataType: 'JSON',

                            success: function (data) {
                                if ( randomString === data.graphql.user.biography ) {

                                    $.ajax({
                                        type: 'POST',
                                        url: `/api/instagram-verification-sucess`,
                                        dataType: 'JSON',
                                    });

                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Instagram account verfication succedded!!',
                                    });

                                    $('#instagramConnect').modal('hide');
                                    setTimeout(function(){
                                        location.href = '/troca/profile-verification';
                                    }, 3000);
                                }else{
                                    $('#working').css('display', 'none');
                                    $('#verify-now').css('display', 'block');

                                    Toast.fire({
                                        icon: 'error',
                                        title: 'Instagram account verfication failed!!',
                                    });
                                }
                            }
                        })
                    });

			    })
            });
        </script>
    @endsection
