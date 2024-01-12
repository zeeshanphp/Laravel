@extends('Frontend.Master.frontend_master')
@section('content')
    <!--============================
                                                 BREADCRUMB START
                                                ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>login / register</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">login / register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                        BREADCRUMB END
                                                                                                                    ==============================-->


    <!--============================
                                                                                                                       LOGIN/REGISTER PAGE START
                                                                                                                    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__login_reg_area">
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-homes" type="button" role="tab" aria-controls="pills-homes"
                                    aria-selected="true">login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-profiles" type="button" role="tab"
                                    aria-controls="pills-profiles" aria-selected="true">signup</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent2">
                            @if (session('message') == 'success')
                                <div class="mt-4 alert alert-success bg-gradient">User Registered Successfully</div>
                            @endif
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                aria-labelledby="pills-home-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" placeholder="User Name" name="uname">
                                        </div>
                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" placeholder="Password" name="upass">
                                        </div>
                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                                    me</label>
                                            </div>
                                            <a class="forget_p" href="{{ url('forgot-password') }}">forget password ?</a>
                                        </div>
                                        <button class="common_btn" type="submit">login</button>
                                        <p class="social_text">Sign in with social account</p>
                                        <ul class="wsus__login_link">
                                            <li><a href="{{ route('github-login') }}"><i class="fab fa-github"></i></a></li>
                                            <li><a href="{{ route('twitter-login') }}"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="{{ route('facebook-login') }}"><i
                                                        class="fab fa-facebook-in"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profiles" role="tabpanel"
                                aria-labelledby="pills-profile-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('register.user') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" placeholder="Name" name="fname"> <br>
                                            @if ($errors->has('fname'))
                                                <span class="text-danger">
                                                    @error('fname')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @endif

                                        </div>
                                        <div class="wsus__login_input">
                                            <i class="far fa-envelope"></i>
                                            <input type="text" name="uemail" placeholder="Email">
                                            @if ($errors->has('uemail'))
                                                <span class="text-danger">
                                                    @error('uemail')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @endif
                                        </div>
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user"></i>
                                            <input type="text" placeholder="Username" name="uname"
                                                placeholder="Username">
                                            @if ($errors->has('uname'))
                                                <span class="text-danger">
                                                    @error('uname')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @endif
                                        </div>
                                        <div class="wsus__login_input">
                                            <i class="fas fa-phone"></i>
                                            <input type="text" placeholder="Username" name="uphone"
                                                placeholder="Phone No">
                                            @if ($errors->has('uphone'))
                                                <span class="text-danger">
                                                    @error('uphone')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @endif
                                        </div>
                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" placeholder="Password" name="upass">
                                            @if ($errors->has('upass'))
                                                <span class="text-danger">
                                                    @error('upass')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @endif
                                        </div>
                                        <button class="common_btn" type="submit">signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                       LOGIN/REGISTER PAGE END
                                                                                                                    ==============================-->
@endsection
