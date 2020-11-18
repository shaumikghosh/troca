@extends('profile.master')

@section('title'){{__('Profile | Verification')}}@endsection

@section('body')
    <div class="container">
        <div class="container">
            <div class="card shadow-lg">
                <div class="card-body card-content card-sm-para">
                    <h3>Hello {{Auth::user()->full_name}},</h3>

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

            <div class="py-5 my-md-5 middle-btns text-center">
                <div class="mb-4">
                    @if(!Auth::user()->user_status->email_verification_status === true)
					    <button class="btn btn-primary">Verify your mail</button>
                    @else
                        <a class="btn btn-success" style="cursor: not-allowed;">Mail Verified! &nbsp; <i class="far fa-smile"></i></a>
                    @endif
                </div>
                <!-- /.mb-4 -->
                @if(!Auth::user()->user_status->instagram_verification_status === true)
					<a class="btn btn-primary" id="click-for-verify-instagram" style="cursor: pointer">Connect to instagram</a>
				@else
					<a class="btn btn-success" style="cursor:not-allowed;">Instagram Verified! &nbsp;<i class="far fa-smile"></i></a>
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

                    if (instaUsername !== '') {
                        
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

                                        var user_id = $('#user_id').val();
                                        var following = data.graphql.user.edge_follow.count;
                                        var followers = data.graphql.user.edge_followed_by.count;
                                        var user_name = data.graphql.user.username;
                                        var total_posts = data.graphql.user.edge_owner_to_timeline_media.count;

                                        $.ajax({
                                            type: 'POST',
                                            url: `{{URL::to('api/instagram-verification-sucess/${user_id}')}}`,
                                            dataType: 'JSON',
                                            data: {
                                                followings: following,
                                                followers: followers,
                                                user_name: user_name,
                                                total_posts: total_posts
                                            },
                                        });

                                        Toast.fire({
                                            icon: 'success',
                                            title: 'Instagram account verfication succedded!!',
                                        });

                                        $('#instagramConnect').modal('hide');
                                        setTimeout(function(){
                                            location.href = '{{route("user.profileVerification")}}';
                                        }, 2000);
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
                    }else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Instagram usernaqme is required!',
                        });
                        
                        setInterval(function () {
                            location.href = "{{route('user.profileVerification')}}";
                        });
                        
                    }

			    })
            });
        </script>
    @endsection
