<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-fill bg-success bg-gradient py-3">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @if (session('loggedIn') == 'success')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('update.profile') }}">Update Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register.userform') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login.user') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-white" href="#" tabindex="-1"
                                aria-disabled="true">Disabled</a>
                        </li>
                    @endif


                </ul>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        @yield('home')
        @yield('register')
        @yield('login')
        @yield('loggedin')
        @yield('update_profile')
        @yield('forgot-password')
        @yield('reset_pass')
    </div>
</body>

</html>
