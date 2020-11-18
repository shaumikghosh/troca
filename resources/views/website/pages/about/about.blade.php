@extends('website.master')

@section('title'){{__('Troca Social | About')}}@endsection

@section('body')
<div class="page-header text-center">
    <div class="container">
        <h1>About Us</h1>

        <ol class="breadcrumb p-0 bg-transparent justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>
    <!-- /.container -->
</div>
<!-- /.page-title -->

<div class="py-60 section-content">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Syntra Digital Agency</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h4>Expert Team</h4>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</p>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <h4>Business Analysis</h4>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</p>
                    </div>
                    <!-- /.col-sm-6 -->
                </div>
                <!-- /.row -->

                <div class="quote">
                    <img src="{{ asset('public/website') }}/images/quote.png" alt="icon" />
                    We build thoughtful identities and experiences to elevate and empower organizations
                </div>
                <!-- /.quote -->
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-md-5">
                <img src="{{ asset('public/website') }}/images/home-banner-image.png" class="img-fluid" alt="image" />
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.py-60 -->

<div class="whychoose-us" style="background-image: url('{{ asset('public/website') }}/images/why-choose-background.png');">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-7 col-sm-10">
                <div class="section-title text-center">
                    <h2>Why Choose Us</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- /.col-md-6 col-sm-8 -->
        </div>
        <!-- /.row -->
        <div class="row align-items-center">
            <div class="col-sm-6 col-md-4">
                <div class="why-choose-item  my-3 d-flex">
                    <img src="{{ asset('public/website') }}/images/hq-service-white.png" class="why-choose-item-icon" alt="icon" />
                    <div>
                        <h4>High Quality Services</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </div>
                <!-- /.why-choose-item -->
                <div class="why-choose-item  my-3 d-flex">
                    <img src="{{ asset('public/website') }}/images/project-on-time-white.png" class="why-choose-item-icon" alt="icon" />
                    <div>
                        <h4>Project On Time</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </div>
                <!-- /.why-choose-item -->
            </div>
            <!-- /.col-sm-6 col-md-4 my-3 -->

            <div class="col-sm-6 col-md-4 order-md-3">
                <div class="why-choose-item my-3 d-flex">
                    <img src="{{ asset('public/website') }}/images/innovative-solution.png" class="why-choose-item-icon" alt="icon" />
                    <div>
                        <h4>Innovative Solutions</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </div>
                <!-- /.why-choose-item -->
                <div class="why-choose-item my-3  d-flex">
                    <img src="{{ asset('public/website') }}/images/dedicated-support.png" class="why-choose-item-icon" alt="icon" />
                    <div>
                        <h4>Dedicated Support</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </div>
                <!-- /.why-choose-item -->
            </div>
            <!-- /.col-sm-6 col-md-4 my-3 -->

            <div class="col-md-4 col-sm-12 py-2 text-center">
                <img src="{{ asset('public/website') }}/images/why-choose-us.png" class="img-fluid" alt="image" />
            </div>
            <!-- /.col-md-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.py-60 -->

<div class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-md-4 mb-3">
            <div class="col-md-7 col-sm-8">
                <div class="section-title text-center">
                    <h2>What Client Say</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- /.col-md-6 col-sm-8 -->
        </div>
        <!-- /.row -->

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box shadow-md">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae"</p>
                    <img src="{{ asset('public/website') }}/images/avtar.png" alt="image" />
                    <strong>John Doe</strong>
                    <span>Designer</span>
                </div>
                <!-- /.testimonial-box -->
            </div>
            <!-- /.col-md-4 col-sm-6 mb-4 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box shadow-md">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae"</p>
                    <img src="{{ asset('public/website') }}/images/avtar.png" alt="image" />
                    <strong>Jeniffer Doe</strong>
                    <span>Marketing</span>
                </div>
                <!-- /.testimonial-box -->
            </div>
            <!-- /.col-md-4 col-sm-6 mb-4 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box shadow-md">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae"</p>
                    <img src="{{ asset('public/website') }}/images/avtar.png" alt="image" />
                    <strong>Claudia Jane</strong>
                    <span>Consultant</span>
                </div>
                <!-- /.testimonial-box -->
            </div>
            <!-- /.col-md-4 col-sm-6 mb-4 -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /.testimonial-area -->

<div class="growth-area text-center" style="background-image: url('images/growth_bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 my-4">
                <div class="growth-item">
                    <img src="{{ asset('public/website') }}/images/project-completed.png" alt="icon" />
                    <strong>100 %</strong>
                    <span>Projects Completed</span>
                </div>
                <!-- /.growth-item -->
            </div>
            <!-- /.col-md-3 col-6 my-4 -->
            <div class="col-md-3 col-6 my-4">
                <div class="growth-item">
                    <img src="{{ asset('public/website') }}/images/trusted-client.png" alt="icon" />
                    <strong>100 +</strong>
                    <span>Trusted Client</span>
                </div>
                <!-- /.growth-item -->
            </div>
            <!-- /.col-md-3 col-6 my-4 -->
            <div class="col-md-3 col-6 my-4">
                <div class="growth-item">
                    <img src="{{ asset('public/website') }}/images/awards.png" alt="icon" />
                    <strong>100 +</strong>
                    <span>Awards & Recognition</span>
                </div>
                <!-- /.growth-item -->
            </div>
            <!-- /.col-md-3 col-6 my-4 -->
            <div class="col-md-3 col-6 my-4">
                <div class="growth-item">
                    <img src="{{ asset('public/website') }}/images/professional-team.png" alt="icon" />
                    <strong>50 +</strong>
                    <span>Professional Team</span>
                </div>
                <!-- /.growth-item -->
            </div>
            <!-- /.col-md-3 col-6 my-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.growth-area -->

<div class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-md-4 mb-3">
            <div class="col-md-7 col-sm-8">
                <div class="section-title text-center">
                    <h2>Latest Blog</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- /.col-md-6 col-sm-8 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-4">
                <div class="post-card">
                    <img src="{{ asset('public/website') }}/images/post-img1.png" class="w-100" alt="post" />
                    <div class="p-4">
                        <h3><a href="#">Why Digital Marketing is important?</a></h3>
                        <p>Home Home 1 Home 2 Pages About Us Our Team Pricing 404 Services Blog Single Post Contact Contact...</p>
                        <a href="#" class="btn mr-2 btn-primary px-3 rounded-pill">Read More</a>
                    </div>
                </div>
                <!-- /.post-card -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="post-card">
                    <img src="{{ asset('public/website') }}/images/post-mg2.png" class="w-100" alt="post" />
                    <div class="p-4">
                        <h3><a href="#">Why Digital Marketing is important?</a></h3>
                        <p>Home Home 1 Home 2 Pages About Us Our Team Pricing 404 Services Blog Single Post Contact Contact...</p>
                        <a href="#" class="btn mr-2 btn-primary px-3 rounded-pill">Read More</a>
                    </div>
                </div>
                <!-- /.post-card -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="post-card">
                    <img src="{{ asset('public/website') }}/images/post-img-3.png" class="w-100" alt="post" />
                    <div class="p-4">
                        <h3><a href="#">Why Digital Marketing is important?</a></h3>
                        <p>Home Home 1 Home 2 Pages About Us Our Team Pricing 404 Services Blog Single Post Contact Contact...</p>
                        <a href="#" class="btn mr-2 btn-primary px-3 rounded-pill">Read More</a>
                    </div>
                </div>
                <!-- /.post-card -->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.py-100 -->

@endsection
