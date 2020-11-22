<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

    <title>Syntra</title>
    <style>
      html{
          font-size: 100.01%;
        }
        body{
          font-family: 'Poppins', sans-serif;
          line-height: 1.5;
          font-weight: 400;
          font-size: 15px;
          color: #222;
        }
        .container{
          max-width: 1170px;
          width: 100%;
        }
        .container-mini{
          max-width: 740px;
        }
        .container-minify{
          max-width: 480px;
        }
        :focus{
          -webkit-box-shadow: none !important;
          box-shadow: none !important;
        }
        a, a i, .btn, button, .nav-link img{
          -webkit-transition: all 0.3s linear;
          -o-transition: all 0.3s linear;
          transition: all 0.3s linear;
        }
        a{
          color: #5355EE;
          text-decoration: none !important;
        }
        a:hover, button:hover, .btn-text:hover{
          color: #FFBE56;
          cursor: pointer;
        }
        p{
          margin: 0 0 15px;
        }
        strong{
          font-weight: 500;
        }
        sub, sup{
          font-size: 65%;
        }
        .py-100{
          padding-top: 100px;
          padding-bottom: 100px;
        }
        .page-header{
          background-color: #fff;
          background-repeat: no-repeat;
          background-position: center bottom;
          -webkit-background-size: cover;
          background-size: cover;
          padding: 60px 0 80px;
          color: #fff;
        }
        .footer{
          background-color: #fff;
          background-repeat: no-repeat;
          background-position: center bottom;
          -webkit-background-size: cover;
          background-size: cover;
          padding: 80px 0 20px;
          font-weight: 400;
          font-size: 14px;
          color: #fff;
        }
        .section-title{
          margin-bottom: 25px;
        }
        .section-title h2{
          font-weight: 700;
          margin-bottom: 15px;
        }
        .social_media{
          margin: 20px 0;
        }
        .social_media a{
          width: 36px;
          color: #fff;
          height: 36px;
          line-height: 36px;
          margin-right: 8px;
          margin-bottom: 8px;
          text-align: center;
          border-radius: 36px;
          display: inline-block;
          background-color: #FCAA23;
        }
    </style>
  </head>
  <body>
    <table style="max-width: 600px; margin: 20px auto; width: 100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>

            <main class="page-content w-100">
              <div class="page-header" style="background-image: url({{ asset('public/website') }}/images/header-shape.svg); background-color: #fff;background-repeat: no-repeat;background-position: center bottom; -webkit-background-size: cover;background-size: cover; text-align: center;">
                <div class="container">
                  <img src="{{ asset('public/website') }}/images/logo-header.svg" alt="">
                </div>
                <!-- /.container -->
              </div>
              <!-- /.page-title -->

              <div style="padding: 30px 0 40px;">
                <div class="section-title" style="padding: 0 30px;">
                    <h2 style="font-size: 32px;">Hello {{ $data['name'] }}.</h2>
                    {{ $data['body'] }}
                    <p>Thank you.</p>
                  </div>
                  <!-- /.section-title -->
              </div>
              <!-- /.py-100 -->

            </main>
            <!-- /.page-content -->


            <footer class="footer" style="background-image: url({{ asset('public/website') }}/images/footer-shape.svg);background-color: #fff;background-repeat: no-repeat;background-position: center bottom;-webkit-background-size: cover;background-size: cover; text-align: center;">
              <div class="container">
                <div class="footer-main">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <div class="f-logo mb-4">
                        <img src="{{ asset('public/website') }}/images/logo-header.svg" class="img-fluid" alt="logo" />
                      </div>

                      <div class="social_media">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fas fa-circle"></i></a>
                        <a href="#"><i class="fas fa-rss"></i></a>
                      </div>
                      <!-- /.social_media -->

                      <div class="copyright">
                        <p style="font-size: 12px;">Copyright © 2020 SYNTRA. All rights reserved.</p>
                      </div>
                      <!-- /.copyright -->
                    </div>
                    <!-- /.col-sm-12 col-md-4 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.footer-main -->
              </div>
              <!-- /.container -->
            </footer>


        </td>
      </tr>
    </table>
  </body>
</html>
