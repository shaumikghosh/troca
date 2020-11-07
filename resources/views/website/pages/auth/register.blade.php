@extends('website.master')

@section('title'){{__('Troca Social | Register')}}@endsection

@section('body')
    <div class="page-header text-center">
        <div class="container">
            <h1>Register</h1>

            <ol class="breadcrumb p-0 bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-title -->

    <div class="py-100">
        <div class="container container-minify">
            <div class="section-title">
                <h2>Join us!</h2>
            </div>
            <!-- /.section-title -->

            <form method="POST" action="{{route('user.attemptRegister')}}">
                @csrf
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" placeholder="Full Name" name="full_name"/>
                    </div>
                    @if($errors->has('full_name'))
                        <div class="form-group col-sm-12 text-danger">
                            {{__('Full name is required!')}}
                        </div>
                    @endif
                    <div class="form-group col-sm-12">
                        <input type="email" class="form-control" placeholder="Email Address" name="email"/>
                    </div>
                    @if($errors->has('email'))
                        <div class="form-group col-sm-12 text-danger">
                            {{__('Email is required!')}}
                        </div>
                    @endif
                    <!-- /.form-group col-sm-6 -->
                    <div class="form-group col-sm-12">
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                    </div>
                    @if($errors->has('password'))
                        <div class="form-group col-sm-12 text-danger">
                            {{__('Password is required!')}}
                        </div>
                    @endif
                    <div class="form-group col-sm-12">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password"/>
                    </div>
                    @if($errors->has('full_name'))
                        <div class="form-group col-sm-12 text-danger">
                            {{__('password confirmation is required!')}}
                        </div>
                    @endif
                    <!-- /.form-group col-sm-6 -->
                    <div class="form-group col-sm-12 pb-3 text-center">
                        <button class="btn btn-primary px-5 btn-lg rounded-pill" type="submit" id="register">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.py-100 -->
    <script>
        $(document).ready(function(){

            $('#register').click(function() {

                var full_name = $('input[name=full_name]').val();
                var email = $('input[name=email]').val();
                var password = $('input[name=password]').val();
                var confirm_password = $('input[name=confirm_password]').val();

                if (full_name === "" && email === "" && password === "" && confirm_password === "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'All fields are required!',
                    })

                    return false;
                }

                if (full_name === "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'Full name is required!',
                    })

                    return false;
                }

                if (email === "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'Email is required!',
                    })

                    return false;
                }

                if (password === "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'Password is required!',
                    })

                    return false;
                }

                if (password.length < 7) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Password length should be 8 characters!',
                    })

                    return false;
                }

                if (confirm_password === "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'Confirm password is required!',
                    })

                    return false;
                }

                if (password !== confirm_password) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Password confirmation is failed!',
                    })

                    return false;
                }

                return true;
            })
            
        })
    </script>
@endsection
