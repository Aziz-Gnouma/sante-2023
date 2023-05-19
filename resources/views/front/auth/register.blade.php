<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Drezoc - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->


        <!-- App css -->
        <link href="{{asset('assetsTemplate/css2/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assetsTemplate/css2/icons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assetsTemplate/css2/theme.min.css')}}" rel="stylesheet">


    </head>

    <body>

        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-login rounded-left">
                                      <img  alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <a href="/" class="d-block mb-5">
                                                    <img src="{{ asset('/images/logoiset.jpg') }}" alt="app-logo" height="18" />
                                                </a>
                                            </div>
                                             <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <h1 class="h5 mb-1">Create an Account!</h1>
                                            <p class="text-muted mb-4">Don't have an account? Create your own account, it takes less than a minute</p>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                    
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <x-label for="name" :value="__('Name')" />
                                    
                                                    <x-input id="name" class="form-control form-control-user" type="text" name="name" :value="old('name')" required autofocus />
                                                </div>
                                    
                                                <!-- Email Address -->
                                                <div class="form-group">
                                                    <x-label for="email" :value="__('Email')" />
                                    
                                                    <x-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required />
                                                </div>
                                    
                                                <!-- Password -->
                                                <div class="form-group">
                                                    <x-label for="password" :value="__('Password')" />
                                    
                                                    <x-input id="password" class="form-control form-control-user"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="new-password" />
                                                </div>
                                    
                                                <!-- Confirm Password -->
                                                <div class="form-group">
                                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                    
                                                    <x-input id="password_confirmation" class="form-control form-control-user"
                                                                    type="password"
                                                                    name="password_confirmation" required />
                                                </div>
                                    
                                                <div class="flex items-center justify-end mt-4">

                                    
                                                    <x-button class="btn btn-success btn-block">
                                                        {{ __('Register') }}
                                                    </x-button>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <h5 class="text-muted font-size-16">Sign up using</h5>
                                                
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                             

                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-0">Already have account?  <a href="{{ route('login') }}" class="text-muted font-weight-medium ml-1"><b>Sign In</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="assets/js/theme.js"></script>

    </body>

</html>