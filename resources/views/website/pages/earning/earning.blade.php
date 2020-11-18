@extends('website.master')

@section('title'){{__('Troca Social |  Earning')}}@endsection

@section('body')
<div class="page-header text-center">
    <div class="container">
        <h1>Earning</h1>

        <ol class="breadcrumb p-0 bg-transparent justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Earning</li>
        </ol>
    </div>
    <!-- /.container -->
</div>
<!-- /.page-title -->

<div class="py-60 section-content">
    <div class="container">
        <div class="row justify-content-center mb-md-3">
            <div class="col-sm-10 col-md-8">
                <div class="section-title text-center">
                    <h2>Earning Data Growth</h2>
                </div>
            </div>
            <!-- /.col-sm-8 col-md-6 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <p>O Dizu é uma plataforma inovadora que surgiu diante de uma deficiência no meio digital, onde ainda não havia uma forma explícita e fácil para as pessoas utilizarem seus perfis em redes sociais para ganhar dinheiro.</p>
                <p>Pensando nisso, o Dizu decidiu fazer uma plataforma que trabalharia de uma forma remuneradora para pessoas que tivessem o interesse em faturar um determinado valor utilizando suas redes sociais. O Dizu foi projetado para todas as redes sociais e de acordo com o tempo iremos adicionar uma por uma. Assim você poderá vincular seus perfis do Instagram, Facebook, Twitter, Linkedin e outras.</p>
                <p>Os ganhos são inestimáveis, pois depende da disposição do usuário para com a plataforma e assim efetuar o máximo de ações(seguir, curtir e comentário), fazendo com que a monetização se torne ainda mais alta.</p>
                <p>O Dizu paga preços diferentes para determinadas ações e redes sociais. Por exemplo, no Instagram você ganha: <br>
                    De R$ 15,00 a R$ 25,00 a cada 1.000 pessoas que você seguir. <br>
                    De R$ 10,00 a R$ 15,00 cada 1.000 publicações que você curtir. <br>
                    De R$ 0,10 a R$ 0,50 cada 1 comentário que efetuar.</p>
                <p>Os pagamentos são realizados em até 10 dias úteis contando após a solicitação para sua conta bancária, PagSeguro ou PayPal ou até mesmo diretamente em seu telefone celular, assim, você pode ganhar dinheiro até mesmo se não possuir uma conta bancária.</p>
            </div>
            <!-- /.col-md-6 mt-4 -->
            <div class="col-md-6">
                <div class="card border-0 text-dark shadow bg-light">
                    <div class="card-header border-0 px-md-4 bg-transparent py-4">
                        <h5>Simule seu possível ganho abaixo</h5>
                        <p class="mb-0">Dizu é simples, rápido, e você pode começar imediatamente!</p>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body card-calculator px-md-4">
                        <form id="earning-steps">
                            <div class="form-tab">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-6">
                                        <p class="mb-sm-0 mb-2"><strong>Quantos comentários deseja fazer diariamente?</strong></p>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <select class="custom-select" id="comentarios" name="comentarios">
                                            <option value="1">1 comentário</option>
                                            <option value="2" selected="">2 comentários</option>
                                            <option value="10">10 comentários</option>
                                        </select>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row mb-3 align-items-center -->
                            </div>
                            <div class="form-tab">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-6">
                                        <p class="mb-sm-0 mb-2"><strong>Quantas curtidas diariamente?</strong></p>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <select class="custom-select" name="curtidas" id="curtidas">
                                            <option value="10">10 curtidas</option>
                                            <option value="20">20 curtidas</option>
                                            <option value="50">50 curtidas</option>
                                            <option value="100" selected="">100 curtidas</option>
                                            <option value="200">200 curtidas</option>
                                        </select>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row mb-3 align-items-center -->
                            </div>
                            <div class="form-tab">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-6">
                                        <p class="mb-sm-0 mb-2"><strong>Quantos seguidores diariamente?</strong></p>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <select class="custom-select" name="seguidores" id="seguidores">
                                            <option value="25">25 seguidores</option>
                                            <option value="50">50 seguidores</option>
                                            <option value="75">75 seguidores</option>
                                            <option value="100">100 seguidores</option>
                                            <option value="200" selected="">200 seguidores</option>
                                            <option value="500">500 seguidores</option>
                                        </select>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row mb-3 align-items-center -->
                            </div>
                            <div class="form-tab">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-6">
                                        <p class="mb-sm-0 mb-2"><strong>Quantos perfis vai utilizar?</strong></p>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <select class="custom-select" name="perfis" id="perfis">
                                            <option value="2">2 Perfis</option>
                                            <option value="5" selected="">5 Perfis</option>
                                            <option value="10">10 Perfis</option>
                                        </select>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row mb-3 align-items-center -->
                            </div>
                            <div class="form-tab">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-6">
                                        <p class="mb-sm-0 mb-2"><strong>Quantas pessoas vai indicar?</strong></p>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <select class="custom-select" name="indicados" id="indicados">
                                            <option value="2">2 Indicados</option>
                                            <option value="10">10 Indicados</option>
                                            <option value="20" selected="">20 Indicados</option>
                                            <option value="50">50 Indicados</option>
                                            <option value="100">100 Indicados</option>
                                        </select>
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row mb-3 align-items-center -->
                            </div>
                            <div class="pt-4 d-flex calculator-bottom align-items-center">
                                <img src="images/investimento.png" alt="">
                                <p class="mb-0">Com 2 comentários por dia, 100 curtidas, 200 seguidores com 5 perfis diferentes, e tendo 20 indicações, <strong class="text-primary">você irá ganhar R$ 2340,00 no fim do mês</strong></p>
                            </div>
                            <!-- /.pt-4 -->
                            <div class="bg-transparent pt-5 border-0">
                                <div class="d-flex justify-content-between mb-3">
                                    <button class="btn rounded-pill py-2 btn-primary px-md-4 px-3" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button class="btn rounded-pill py-2 btn-primary px-md-4 px-3 ml-auto" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                                <!-- /.d-flex -->
                                <button class="btn btn-block rounded-pill py-2 btn-secondary"><i class="fas fa-lock"></i> Quero começar agora mesmo!</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 mt-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.py-60 -->

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
<!-- /.testimonial-area -->
@endsection
