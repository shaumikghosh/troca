<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/website')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/website')}}/css/responsive.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
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
    <title>@yield('title')</title>
  </head>
  <body>
    <div id="wrapper">
      
      @include('website.includes.header')

      <main class="page-content w-100">
        @yield('body')
      </main>
      <!-- /.page-content -->


      @include('website.includes.footer')

    </div>
    <!-- /#wrapper -->

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{asset('public/website')}}/js/bootstrap.bundle.min.js"></script>
  </body>
</html>