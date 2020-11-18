	<button class="btn theme_filter" type="button">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-funnel-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
		</svg>
	</button>

	<header class="t-header t-header-light shadow p-0">
		<div class="t-header-content-wrapper">
			<div class="t-header-content">
				@if(Route::currentRouteName() === 'user.buyFollowers')
					<a href="{{route('user.buyFollowers')}}" class="t-logo">
						<img src="{{'public/admin'}}/assets/images/user-screens/logo.svg" alt="logo">
					</a>
				@else
					<a href="{{route('user.profile')}}" class="t-logo">
						<img src="{{'public/admin'}}/assets/images/user-screens/logo.svg" alt="logo">
					</a>
				@endif
				
				@if(!Auth::user()->user_status->email_verification_status === false && !Auth::user()->user_status->instagram_verification_status === false)
					@if(Route::current()->getName() === 'user.profile')
						<a href="{{route('user.buyFollowers')}}" class="btn btn-dark py-0 px-sm-4 px-3 m-auto" type="button">Switch to buying</a>
					@else
						<a href="{{route('user.profile')}}" class="btn btn-dark py-0 px-sm-4 px-3 m-auto" type="button">Switch to following</a>
					@endif
				@else
					<a href="#" class="py-0 px-sm-4 px-3 m-auto"></a>
				@endif

				<ul class="nav">
					<li class="nav-item dropdown dropdown-user">
						<a class="nav-link text-dark font-weight-bold" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
							<span class="mr-2 d-none d-sm-inline-block">{{Auth::user()->full_name}}</span>
							<img src="{{'public/admin'}}/assets/images/profile/male/image_1.png" alt="img" />
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
							<a class="dropdown-item" href="{{ route('user.setting') }}">Setting</a>
							<a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<!-- /.header -->