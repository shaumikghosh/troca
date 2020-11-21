@extends('profile.master')

@section('title'){{__('Profile | Buy Connects')}}@endsection

@section('body')
    <div class="container">
        <div class="row">
            @include('profile.includes.sidebar')
            <div class="col-sm-8  col-md-9 col-lg-8 mb-3">
                <div class="card shadow-lg">
                    <div class="card-body text-center card-content card-sm-para">
                        <div class="mb-5">
                            <h2>BUY YOUR EXPECTED FOLLOWERS</h2>
                        </div>
                        <!-- /.text-center -->
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-md-8 col-sm-10 col-10">
                                <form id="form">
                                    <input type="text" class="grid-header mb-4 rounded w-100 text-center"
                                        placeholder="Followers number" id="followers-number"/>
                                    <div class="input-group input-group-amount mb-4">
                                        <select class="form-control" id="cat_followers">
                                            <option value=""> -- Select Followers Category --</option>
                                            <optgroup label="Select followers category you want">
                                                <option value="1">1 Star Followers</option>
                                                <option value="2">2 Stars Followers</option>
                                                <option value="3">3 Stars Followers</option>
                                                <option value="4">4 Stars Followers</option>
                                                <option value="5">5 Stars Followers</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-amount mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control text-center" id="result" value="" placeholder="Result" disabled/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">USD</span>
                                        </div>
                                    </div>

                                    <button type="button" class="btn text-uppercase btn-primary btn-lg" id="check_out">Check Out &nbsp;<i class="fas fa-shopping-cart"></i></button>
                                </form>
                            </div>
                            <!-- /.col-sm-6 -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                @include('profile.includes.profile_message')
                <!-- /.card -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#cat_followers').attr('disabled', true);

            $('#form').change(function () {
                if ($('followers-number').val() !== '') {
                    $('#cat_followers').attr('disabled', false);

                    var fixed_value = 0;
                    var fn = $('#followers-number').val();

                    switch($('#cat_followers').val()){
                        case '1':
                            fixed_value = 0.10;
                            $('#result').val(fn*fixed_value);
                            break;
                        case '2':
                            fixed_value = 0.20;
                            $('#result').val(fn*fixed_value);
                            break;
                        case '3':
                            fixed_value = 0.30;
                            $('#result').val(fn*fixed_value);
                            break;
                        case '4':
                            fixed_value = 0.40;
                            $('#result').val(fn*fixed_value);
                            break;
                        case '5':
                            fixed_value = 0.50;
                            $('#result').val(fn*fixed_value);
                            break;
                        default:
                            fixed_value = 0;
                    }
                }
            });
        });
    </script>
@endsection
