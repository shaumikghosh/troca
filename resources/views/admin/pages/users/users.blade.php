@extends('admin.master')

@section('title'){{ __('Admin | Users') }}@endsection


@section('body')
<div class="col-lg-12">
    <div class="grid">
      <p class="grid-header">Users Information Table</p>
      <div class="item-wrapper">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>User</th>
                <th>Status</th>
                <th>Email Status</th>
                <th>instagram Status</th>
                <th>Earnings</th>
                <th>Joined</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->user_type !== 'admin')
                        <tr>
                            <td class="d-flex align-items-center border-top-0">
                            <img class="profile-img img-sm img-rounded mr-2" src="{{ asset('public/admin') }}/assets/images/profile/male/profile.png" alt="profile image">
                            <span>{{ $user->full_name }}</span>
                            </td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="changeUserStatus" @if($user->status === 'active'){{ __('checked') }}@else{{ __('') }}@endif value="{{ $user->id }}">
                                    <label class="custom-control-label" for="changeUserStatus"></label>
                                </div>
                            </td>
                            <td>
                                @if((bool)$user->user_status->email_verification_status === true)
                                    <span style="color: lime;font-weight:bold;font-size:20px;">✓</span>
                                @else
                                    <span style="color: red;font-weight:bold;font-size:20px;">X</span>
                                @endif
                            </td>
                            <td>
                                @if((bool)$user->user_status->instagram_verification_status === true)
                                    <span style="color: lime;font-weight:bold;font-size:20px;">✓</span>
                                @else
                                    <span style="color: red;font-weight:bold;font-size:20px;">X</span>
                                @endif
                            </td>
                            <td>$ 0</td>
                            <td>{{ date('d-M-Y', strtotime($user->created_at)) }}</td>
                            <td>
                                <a href="" title="Edit user"><i class="mdi mdi-table-edit" style="color: yellow; font-size: 20px"></i></a>
                                <a onclick="return delete_user_confirmation()" href="{{ URL::to('/admin/user/delete/'.$user->id) }}" title="Delete user"><i class="mdi mdi-delete" style="color: red; font-size: 20px"></i></a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>

      function delete_user_confirmation () {
          if (confirm("Are you sure to delete it?") === true) {
              return true;
          }
          return false;
      }

      $(document).ready(function(){
          $('#changeUserStatus').click(function(){

            var user_id = $('#changeUserStatus').val();
            var user_status = null;

              if($('#changeUserStatus').prop('checked') === true) {
               user_status = 'active';
              }else{
                  user_status = 'deactive';
              }

              $.ajax({
                    type: 'POST',
                    url: '{{URL::to("api/change-user-status")}}',
                    dataType: 'JSON',
                    data: {
                        user_status:user_status,
                        user_id:user_id
                    },
                    success: function (data) {
                        Toast.fire({
                            icon: 'success',
                            title: `${data.success_message}`,
                        });
                    }
                });
          })
      })
  </script>
  @if(Session::has('message'))
    <script>
        Toast.fire({
            icon: 'success',
            title: '{{ Session::get("message") }}'
        });
    </script>
  @endif
@endsection
