@extends('front-end.master')
@section('body')

    <!--banner-->
    <hr/>
    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well card">

                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-6 well card">
                        <h3 class="text-center">Register Here!</h3>
                        <br/>
                        {{Form::open(['route'=>'customer-sign-up', 'method'=>'POST'])}}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control " placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control " placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control " placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control  btn btn-success" value="Register">
                        </div>
                        {{Form::close()}}
                    </div>

                    <div class="col-md-5 well card" style="margin-left: 20px;">
                        <h3 class="text-center">Login Here!</h3>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <br/>
                        {{Form::open(['route'=>'customer-login', 'method'=>'POST'])}}

                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control  btn btn-success" value="Log-in">

                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
        <!--single-->
        <!--new-arrivals-->
    </div>
@endsection