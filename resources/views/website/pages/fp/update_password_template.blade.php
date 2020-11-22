@extends('website.master')

@section('title'){{__('Troca Social | Update password')}}@endsection

@section('body')
<div class="page-header text-center">
    <div class="container">
      <h1>Forgot</h1>

      <ol class="breadcrumb p-0 bg-transparent justify-content-center">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update password</li>
      </ol>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.page-title -->

  <div class="py-100">
    <div class="container container-minify">
      <div class="section-title">
        <p>Use the email address that associated with your account.</p>
      </div>
      <!-- /.section-title -->

      <form action="{{ route('user.update_password') }}" method="POST">
        @csrf
        <div class="row">
          <div class="form-group col-sm-12">
            <input type="password" class="form-control" placeholder="New password" name="password" required/>
          </div>
          <div class="form-group col-sm-12">
            <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" required/>
          </div>
          @if (Session::has('message'))
            <div class="form-group col-sm-12 text-danger">
                {{ Session::get('message') }}
            </div>
          @endif
          <!-- /.form-group col-sm-6 -->
          <div class="form-group col-sm-12 pb-3 text-center">
            <button class="btn btn-primary px-5 btn-lg rounded-pill">Update Password</button>
          </div>
          @endif
          <!-- /.form-group col-sm-6 -->
        </div>
      </form>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.py-100 -->
@endsection
