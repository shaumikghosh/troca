@extends('profile.master')

@section('title'){{__('Profile | Setting')}}@endsection

@section('body')
    <div class="container">
        <div class="container">
            <div class="col-lg-6 equel-grid">
              <div class="grid">
                <p class="grid-header">Change Password</p>
                <div class="grid-body">
                  <div class="item-wrapper">
                    <form>
                      <div class="form-group">
                        <label for="inputEmail1">Email</label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Enter your email">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword1">Password</label>
                        <input type="password" class="form-control" id="inputPassword1" placeholder="Enter your password">
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary">Change Password</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection