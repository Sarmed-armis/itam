@extends('layouts.website.mainwarpper')
@section('content')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="heading">

                        <h2 class="title">Login</h2>
                        <p>If you have an account with us, please log in.</p>
                    </div><!-- End .heading -->

                    <form action="{{url('@')}}" method="POST">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                        <input type="password" class="form-control" placeholder="Password" required>
                        @csrf
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            <a href="#" class="forget-pass"> Forgot your password?</a>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Create An Account</h2>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    </div><!-- End .heading -->

                    <form action="{{url('CreateAccount')}}" method="POST">
                        <input type="text" name="FullName" class="form-control" placeholder="Full Name" required>
                        @csrf
                            <select name="Country" class="form-control">
                                <option value="1" selected="selected"> Chose Country</option>
                                @foreach($Countries as $Country)
                                    <option value="{{$Country->id}}" selected="selected">{{$Country->en_name}}</option>
                                @endforeach
                            </select>


                        <select name="AccountType" class="form-control">
                            <option value="1" selected="selected"> Chose Account Type</option>
                            @foreach($profiles as $profile)
                                <option value="{{$profile->id}}" selected="selected">{{$profile->name}}</option>
                            @endforeach

                        </select>


                        <h2 class="title mb-2">Login information</h2>
                        <input type="email"  name="email" class="form-control" placeholder="Email Address" required>
                        <input type="password"  name="password" class="form-control" placeholder="Password" required>



                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    </main><!-- End .main -->


@endsection
