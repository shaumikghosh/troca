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
                                <input type="text" class="grid-header mb-4 rounded w-100 text-center"
                                    placeholder="Followers number" id="followers-number"/>
                                <!-- /.grid-header -->
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
                                    <input type="text" class="form-control" id="result" value="" disabled/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                </div>

                                <button type="button" class="btn text-uppercase btn-primary btn-lg" id="check_out">Check Out</button>
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

        $(document).ready(function () {
            
            $('#followers-number').keyup((e) => {
                var fixed_value = 0.10; 
                $('#result').val(e.currentTarget.value*fixed_value);
            });

            $('#check_out').click(function(){
                console.log($('#cat_followers').val());
            })
        })

    </script>
@endsection
