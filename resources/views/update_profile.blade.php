@extends('layout.layout')
@section('update_profile')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if (session('message') == 'success')
                <div class="mt-4 alert alert-success bg-gradient">User Registered Successfully</div>
            @endif
            <h4 class="py-3 mt-3 bg-warning text-white">
                <center>Update User</center>
            </h4>

            <form method="POST" action="{{ route('update.profile') }}">
                @csrf
                <table class="table table-borderless">
                    <tr class="">
                        <td><b>Enter FullName</b></td>
                        <td><input type="text" class="form-control" name="fname" placeholder="Enter User FullName"
                                value = "{{ $user->fullname }}" /></td>

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
                                value="{{ $user->email }}" /></td>
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
                                value = "{{ $user->username }}" /></td>


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
                                value = "{{ $user->phone }}" /></td>
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
                        <td><input type="submit" name="add_user" class="btn btn-warning btn-gradient btn-block w-100"
                                value="UPDATE CUSTOMER INFO" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
