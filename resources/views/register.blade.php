@extends('layout.layout')
@section('register')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if (session('message') == 'success')
                <div class="mt-4 alert alert-success bg-gradient">User Registered Successfully</div>
            @endif
            <h4 class="py-3 mt-3 bg-success text-white">
                <center>Register User</center>
            </h4>
            <form method="POST" action="{{ route('register.user') }}">
                @csrf
                <table class="table table-borderless">
                    <tr class="">
                        <td><b>Enter FullName</b></td>
                        <td><input type="text" class="form-control" name="fname" placeholder="Enter User FullName"
                                required /></td>

                    </tr>
                    @if ($errors->has('fname'))
                        <tr>
                            <td colspan="2"> <span class="text-danger">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td><b>Enter Email Adress</b></td>
                        <td><input type="text" class="form-control" name="uemail" placeholder="Enter User Email Adress"
                                required /></td>
                    </tr>
                    @if ($errors->has('uemail'))
                        <tr>
                            <td colspan="2">
                                <span class="text-danger">
                                    @error('uemail')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td><b>Enter Username</b></td>
                        <td><input type="text" class="form-control" name="uname" placeholder="Enter User Username "
                                required /></td>


                    </tr>
                    @if ($errors->has('uname'))
                        <tr>
                            <td colspan="2">
                                <span class="text-danger">
                                    @error('uname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td><b>Enter Password</b></td>
                        <td><input type="password" class="form-control" name="upass" placeholder="Enter Password For User"
                                required /></td>
                    </tr>
                    @if ($errors->has('upass'))
                        <tr>
                            <td colspan="2">
                                <span class="text-danger">
                                    @error('upass')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td><b>Enter Phone</b></td>
                        <td><input type="text" class="form-control" name="uphone" placeholder="Enter User Phone Number"
                                required /></td>
                    </tr>
                    @if ($errors->has('uphone'))
                        <tr>
                            <td colspan="2">
                                <span class="text-danger">
                                    @error('uphone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </td>
                        </tr>
                    @endif

                    <tr>
                        <td></td>
                        <td><input type="submit" name="add_user" class="btn btn-primary btn-gradient btn-block w-100"
                                value="Register As User" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
