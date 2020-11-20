<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- plugins:css -->
    <link rel="stylesheet" href="{{'public/admin'}}/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
	<link rel="stylesheet" href="{{'public/admin'}}/assets/vendors/css/vendor.addons.css">
	<!-- endinject -->
	<!-- vendor css for this page -->
	<!-- End vendor css for this page -->
	<!-- Layout style -->
	<link rel="stylesheet" href="{{'public/admin'}}/assets/css/demo_2/style.css">
	<link rel="stylesheet" href="{{'public/admin'}}/assets/css/demo_2/style-user.css">
	<!-- Layout style -->
	<link rel="shortcut icon" href="{{'public/admin'}}/assets/images/favicon.ico">
	<script type="text/javascript" src="{{asset('public/website')}}/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
	</script>
	<style>
		.form-control:disabled, .form-control[readonly] {
			background-color: #141B2D !important;
			opacity: 1;
		}
	</style>
</head>

<body class="header-fixed">

	<input type="hidden" value="{{Auth::user()->id}}" id="user_id"/>
	@include('profile.includes.header')

	<div class="authentication-theme auth-style_1">
		@yield('body')
	</div>4
	<!--page body ends -->

	@include('profile.includes.footer')
	<!-- /.footer -->

	<!-- SCRIPT LOADING START FORM HERE /////////////-->
	<!-- plugins:js -->
	<script src="{{'public/admin'}}/assets/vendors/js/core.js"></script>
	<script src="{{'public/admin'}}/assets/vendors/js/vendor.addons.js"></script>
	<!-- endinject -->
	<!-- Vendor Js For This Page Ends-->
	<!-- Vendor Js For This Page Ends-->
	<script src="{{'public/admin'}}/assets/js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.theme_filter').click(function(){
				$('body').toggleClass('theme-light');
			})
		});
	</script>

	<script>

        $(document).ready( function () {

            var user_id = $('#user_id').val();

			$.ajax({
				type: 'GET',
				url: `{{URL::to('api/get-instagram-username/${user_id}')}}`,
				dataType: 'JSON',
				success: function (data) {
					$.ajax({
						type: 'GET',
						url: `https://instagram.com/${data.instagram_username}/?__a=1`,
						dataType: 'JSON',
						success: function (data) {
							var following = data.graphql.user.edge_follow.count;
							var followers = data.graphql.user.edge_followed_by.count;

							$('#loader-area').hide();
							$('#loader-area2').hide();
							$('#followings').text(`${following} People`);
							$('#followers').text(`${followers} People`);
						}
					});
				}
			});

        })
    </script>
</body>
</html>
