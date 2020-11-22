@extends('admin.master')

@section('title'){{ __('Admin | Change Passowrd') }}@endsection


@section('body')
    <div class="col-lg-6 equel-grid" style="margin: 50px auto">
      <div class="grid">
        <p class="grid-header">UPDATE YOUR OLD PASSWORD</p>
        <div class="grid-body">
          <div class="item-wrapper">
            <form method="POST" action="{{ URL::to('/admin/update-password/'.Auth::user()->id) }}">
                @csrf
              <div class="form-group">
                <label for="oldPassword">Your old password</label>
                <input type="password" name="old_password" class="form-control" id="oldPassword" placeholder="Enter your old password">
              </div>
              <div class="form-group">
                <label for="new_password">Your new password <span>(*** At least 8 characters ***)</span></label>
                <input type="password" name="new_passowrd" class="form-control" id="new_password" placeholder="Enter your new password">
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm your password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm your new password">
              </div>
              <button type="submit" class="btn btn-sm btn-primary btn-block">Update Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
