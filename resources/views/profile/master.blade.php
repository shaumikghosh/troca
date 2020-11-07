<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>@yield('title')</title>
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
</head>

<body class="header-fixed">

	@include('profile.includes.header')
	
	<div class="authentication-theme auth-style_1">
		@yield('body')
	</div>
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
</body>

</html>