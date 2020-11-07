@extends('website.master')

@section('title'){{__('Troca Social | Login')}}@endsection

@section('body')
    <div class="page-header text-center">
        <div class="container">
            <h1>Login</h1>

            <ol class="breadcrumb p-0 bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-title -->

    <div class="py-100">
        <div class="container container-minify">
            <div class="section-title">
                <h2>Login to your account</h2>
            </div>
            <!-- /.section-title -->

            <form method="POST" action="{{route('user.loginAttempt')}}">
                @csrf
                <div class="row">
                    @if (Session::has('message'))
                        <div class="form-group col-sm-12" >
                            <div class='form-control'style=" background-color: rgba(242, 38, 19, 0.5); color:red;padding-top:12px;">
                                {{Session::get('message')}}
                            </div>
                        </div>
                    @endif
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" placeholder="Email Address" name="email" id="email"/>
                    </div>
                    <!-- /.form-group col-sm-6 -->
                    <div class="form-group col-sm-12">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password"/>
                    </div>
                    @if($errors->any())
                        <div class="form-group col-sm-12 text-danger">
                            Fields are requqired!
                        </div>
                    @endif
                    <!-- /.form-group col-sm-6 -->
                    <div class="form-group col-sm-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label class="custom-control-label" for="customCheck1" id="remember">Remeber me</label>
                        </div>
                    </div>
                    <!-- /.form-group col-sm-6 -->
                    <div class="form-group col-sm-12 pb-3 text-center">
                        <button class="btn btn-primary px-5 btn-lg rounded-pill"  type="submit" id="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.py-100 -->

<script>
    $(document).ready ( function () {

        $('#login').click ( function () {

            var email = $('#email').val();
            var password = $('#passowrd').val();

            if ( email === "" || password === "" ) {
                
                Toast.fire({
                    icon: 'error',
                    title: 'Email & Password required!',
                })

                return false;
            }

            return true;

        })
    })
</script>
@endsection
