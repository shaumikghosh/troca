@extends('website.master')

@section('title'){{__('Troca Social | Home')}}@endsection

@section('body')
<div class="page-banner text-white" style="background-image: url('{{ asset('public/website') }}/images/Home-banner-bg.png');">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6">
                <h1 class="text-primary">SEO & Digital</h1>
                <h1>Marketing Agency</h1>
                <div class="mt-4">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam</p>
                    <a href="#" class="btn mb-3 btn-primary px-5 btn-lg rounded-pill">Contact Us</a>
                </div>
            </div>
            <!-- /.col-lg-5 col-md-6 -->
            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('public/website') }}/images/home-banner-image.png" class="img-fluid" alt="image" />
            </div>
            <!-- /.col-lg-6 col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.page-banner -->

<div class="py-60">
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
            <div class="col-md-7 order-md-2">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="why-choose-item d-flex">
                            <img src="{{ asset('public/website') }}/images/hq-services.svg" class="why-choose-item-icon" alt="icon" />
                            <div>
                                <h4>High Quality Services</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                        <!-- /.why-choose-item -->
                    </div>
                    <!-- /.col-sm-6 mb-3 -->
                    <div class="col-sm-6 mb-3">
                        <div class="why-choose-item d-flex">
                            <img src="{{ asset('public/website') }}/images/creativity.svg" class="why-choose-item-icon" alt="icon" />
                            <div>
                                <h4>Creativity</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                        <!-- /.why-choose-item -->
                    </div>
                    <!-- /.col-sm-6 mb-3 -->
                    <div class="col-sm-6 mb-3">
                        <div class="why-choose-item d-flex">
                            <img src="{{ asset('public/website') }}/images/project-on-time.svg" class="why-choose-item-icon" alt="icon" />
                            <div>
                                <h4>Project On Time</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                        <!-- /.why-choose-item -->
                    </div>
                    <!-- /.col-sm-6 mb-3 -->
                    <div class="col-sm-6 mb-3">
                        <div class="why-choose-item d-flex">
                            <img src="{{ asset('public/website') }}/images/support.svg" class="why-choose-item-icon" alt="icon" />
                            <div>
                                <h4>24/7 Support</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                        <!-- /.why-choose-item -->
                    </div>
                    <!-- /.col-sm-6 mb-4 mb-sm-0 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-md-5 py-4 text-center">
                <img src="{{ asset('public/website') }}/images/why-choose-us.png" class="img-fluid" alt="image" />
            </div>
            <!-- /.col-md-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.py-60 -->

<div class="about-section text-white" style="background-image: url('images/about-section-bg.png');">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-lg-5 col-md-6">
                <h2 class="text-primary">About Us</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <ul class="content-list">
                    <li><span>Totam Rem aperiam</span></li>
                    <li><span>Magnis Dis Parturient Montes</span></li>
                    <li><span>Donec sodales sagittis magna</span></li>
                </ul>

                <a href="#" class="btn mr-2 my-2 btn-primary px-5 btn-lg rounded-pill">Learn More</a>

                <button class="btn btn-watch"><i class="fas fa-play"></i> Watch Video</button>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-6">
                <img src="{{ asset('public/website') }}/images/about-section-image.svg" class="img-fluid" alt="image">
            </div>
            <!-- /.col-md-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.about-section -->


<div class="container">
    <div class="services_box">
        <div class="row justify-content-center mb-md-5 mb-4">
            <div class="col-md-7 col-sm-10">
                <div class="section-title text-center">
                    <h2>Our Services</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- /.col-md-6 col-sm-8 -->
        </div>
        <!-- /.row -->

        <div class="row justify-content-center text-center">
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/seo-booster.svg" class="img-fluid" alt="img" />
                    <h4>SEO Booster</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/ui-ux-design.svg" class="img-fluid" alt="img" />
                    <h4>UI/UX Design</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/web-development.svg" class="img-fluid" alt="img" />
                    <h4>Web Development</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/content-management.svg" class="img-fluid" alt="img" />
                    <h4>Content Management</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/social-media-marketing.svg" class="img-fluid" alt="img" />
                    <h4>Social Media Marketing</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
            <div class="col-sm-6 col-11 col-md-4 mb-md-5 mb-4">
                <div class="service-item">
                    <img src="{{ asset('public/website') }}/images/business-analysis.svg" class="img-fluid" alt="img" />
                    <h4>Business Analysis</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-sm-6 col-11 col-md-4 mb-md-5 mb-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.services_box -->
</div>
<!-- /.container -->

<div class="testimonial-area" style="background-image: url('{{ asset('public/website') }}/images/testimonial-bg.png');">
    <div class="container">
        <div class="row justify-content-center mb-md-4 mb-3">
            <div class="col-md-7 col-sm-8">
                <div class="section-title text-white text-center">
                    <h2 class="text-primary">What Client Say</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- /.col-md-6 col-sm-8 -->
        </div>
        <!-- /.row -->

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae"</p>
                    <img src="{{ asset('public/website') }}/images/avtar.png" alt="image" />
                    <strong>John Doe</strong>
                    <span>Designer</span>
                </div>
                <!-- /.testimonial-box -->
            </div>
            <!-- /.col-md-4 col-sm-6 mb-4 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae"</p>
                    <img src="{{ asset('public/website') }}/images/avtar.png" alt="image" />
                    <strong>Jeniffer Doe</strong>
                    <span>Marketing</span>
                </div>
                <!-- /.testimonial-box -->
            </div>
            <!-- /.col-md-4 col-sm-6 mb-4 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="testimonial-box">
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

<div class="py-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6 col-md-6 order-sm-2">
                <div class="section-title">
                    <h2>FAQ</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae </p>

                    <div class="accordion my-4" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading_01">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse_01" aria-expanded="false" aria-controls="collapse_01">
                                        Sed ut perspiciatis unde omnis

                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse_01" class="collapse" aria-labelledby="heading_01" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_02">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse_02" aria-expanded="false" aria-controls="collapse_02">
                                        Perspiciatis unde omnis iste natus error

                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse_02" class="collapse" aria-labelledby="heading_02" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_03">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse_03" aria-expanded="false" aria-controls="collapse_03">
                                        Voluptatem accusantium doloremque laudantium totam

                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse_03" class="collapse" aria-labelledby="heading_03" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn mr-2 btn-primary px-5 btn-lg rounded-pill">Contact us</a>
                </div>
                <!-- /.section-title -->
            </div>
            <div class="col-sm-6 col-md-5">
                <img src="{{ asset('public/website') }}/images/faq-cartoon.png" class="img-fluid" alt="iamge" />
            </div>
            <!-- /.col-sm-5 -->
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.py-100 -->


<div class="growth-area text-center" style="background-image: url('{{ asset('public/website') }}/images/growth_bg.png')">
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
