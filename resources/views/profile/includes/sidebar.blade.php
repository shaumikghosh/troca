<div class="col-sm-4 col-md-3 col-lg-2 mb-3">
    <div class="card shadow mb-4 text-center">
        <div class="card-body">

            <div class="mb-md-5 mb-3">
                <h4>Rating</h4>
                <p class="font-italic border-top pt-1 mt-3">
                <div title='@if(Auth::user()->insta_user_info->user_rating===5){{__('5 stars user')}}@elseif(Auth::user()->insta_user_info->user_rating===4){{__('4 stars user')}}@elseif(Auth::user()->insta_user_info->user_rating===3){{__('3 stars user')}}@elseif(Auth::user()->insta_user_info->user_rating===2){{__('2 stars user')}}@else{{__('1 star user')}}@endif'>
                    @for($i=0; $i<Auth::user()->insta_user_info->user_rating; $i++)
                        <i style='color:orange' class="fas fa-star"></i>               
                    @endfor
                </div>
                </p>
            </div>

            @if (!Route::currentRouteName() === 'user.profile')
                <div class="mb-md-5 mb-3">
                    <h4>Availavle</h4>
                    <p class="font-italic border-top pt-1 mt-3">$50.26 USD</p>
                </div>
            @endif
            <!-- /.mb-md-5 mb-3 -->

            <div class="mb-md-5 mb-3">
                <h4>Following</h4>
                <p class="font-italic border-top pt-1 mt-3" id="followings">
                <div id="loader-area">
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                </p>
            </div>
            <!-- /.mb-md-5 mb-3 -->

            <div class="mb-md-5 mb-3">
                <h4>Followers</h4>
                <p class="font-italic border-top pt-1 mt-3" id="followers">
                <div id="loader-area2">
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                </p>
            </div>
            <!-- /.mb-md-5 mb-3 -->
            @if (Route::currentRouteName() === 'user.profile')
                <button class="btn btn-block btn-primary">Withdraw</button>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    @if (!Auth::user()->user_status->email_verification_status === false && !Auth::user()->user_status->instagram_verification_status === false)
        <div class="card shadow text-center">
            <div class="card-body py-5">
                <a type="button" class="btn btn-block btn-success" style="cursor: text">100% Verified!</a>
            </div>
            <!-- /.card-body -->
        </div>
    @endif
    <!-- /.card -->
</div>
