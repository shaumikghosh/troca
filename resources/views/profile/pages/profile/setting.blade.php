@extends('profile.master')

@section('title'){{__('Profile | Setting')}}@endsection

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body card-form card-content">
                    <form action="{{ route('user.change_password') }}" method='POST'>
                        @csrf
                        <div class="form-group mb-2">
                            <label>Enter old password</label>
                            <input type="password" class="form-control form-control-lg" name="old_password"/>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group mb-2">
                            <label>Enter new password</label>
                            <input type="password" class="form-control form-control-lg" name="new_password"/>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control form-control-lg" name="confirm_password"/>
                        </div>
                        <!-- /.form-group -->
                        <button class="btn btn-block btn-lg btn-primary">Change Password</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-5 col-md-6 col-sm-8 -->
    </div>
</div>
@if(Session::has('message_error'))
    <div style='width:100%;height:50px;background-color:red;position:fixed;bottom:0;text-align:center; color:white; padding-top:10px;'>
        {{ Session::get('message_error') }}
    </div>
@endif
@if(Session::has('message_success'))
<div style='width:100%;height:50px;background-color:green;position:fixed;bottom:0;text-align:center; color:white; padding-top:10px'>
        {{ Session::get('message_success') }}
    </div>
@endif
@if($errors->any())
<div style='width:100%;height:50px;background-color:red;position:fixed;bottom:0;text-align:center; color:white; padding-top:10px;'>
    {{ __('All fields are required!') }}
</div>
@endif
@endsection
