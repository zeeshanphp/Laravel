@extends('../layout.layout')
@section('forgot-password')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="text-center">
                    <h3><i class="fa fa-lock fa-4x"></i></h3>
                    <h2 class="text-center">Forgot Password?</h2>
                    <p>You can reset your password here.</p>
                    <div class="panel-body">
                        <form method="post" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-envelope color-blue"></i></span>
                                    <input name="email" placeholder="email address" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password"
                                    type="submit">
                            </div>

                            <input type="hidden" class="hide" name="token" id="token" value="">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
