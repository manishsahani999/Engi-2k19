@extends('layouts.app')

@section('content')

<section class="cover height-100 cover-blocks bg--dark ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="text-center">
                    <div><img style="max-width:15rem;" src="{{ asset('img/logo.png') }}" alt="" srcset=""></div>
                    <h1>PR PORTAL</h1>
                    <form method="POST" class="row mt-1" action="{{ route('login') }}">
                        @csrf
                        <div class="col-md-12">
                            <input type="text" name="email" id="" class="col-md-12" value="{{ old('email') }}" placeholder="Email" required>
                        </div>
                        <div class="col-md-12">
                            <input id="password" type="password" class="col-md-12" name="password" placeholder="Password"
                            required>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn--sm" type="submit">
                                <span class="btn__text">
                                    Log In
                                </span>
                            </button>
                        </div>

                        <div class="col-md-12">
                            <div class="input-checkbox input-checkbox--switch">
                                <input id="checkbox-switch" type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }} />
                                <label for="checkbox-switch"></label>
                            </div>
                            <span>Keep me logged in.
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </span>
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
