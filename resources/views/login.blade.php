@extends('master')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p style="text-align: center">{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p style="text-align: center">{{ $message }}</p>
        </div>
    @endif
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-4">
                <form action="login" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>

                    {{--                    <div class="row mb-3">--}}
                    {{--                        <div class="col-sm-10 offset-sm-2">--}}
                    {{--                            <div class="form-check">--}}
                    {{--                                <input class="form-check-input" type="checkbox" id="gridCheck1">--}}
                    {{--                                <label class="form-check-label" for="gridCheck1">--}}
                    {{--                                    I Agree with the turms and conditions--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>

@endsection
