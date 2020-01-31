@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dang nhap</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nv_taiKhoan') ? ' has-error' : '' }}">
                            <label for="nv_taiKhoan" class="col-md-4 control-label">Ten tai khoan</label>

                            <div class="col-md-6">
                                <input id="nv_taiKhoan" type="text" class="form-control" name="nv_taiKhoan" value="{{ old('nv_taiKhoan') }}" required autofocus>

                                @if ($errors->has('nv_taiKhoan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nv_taiKhoan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nv_matKhau') ? ' has-error' : '' }}">
                            <label for="nv_matKhau" class="col-md-4 control-label">Mat khau</label>

                            <div class="col-md-6">
                                <input id="nv_matKhau" type="password" class="form-control" name="nv_matKhau" required>

                                @if ($errors->has('nv_matKhau'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nv_matKhau') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="nv_ghinhodangnhap" {{ old('nv_ghinhodangnhap') ? 'checked' : '' }}> Ghi nho dang nhap
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Dang nhap
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Quen mat khau?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
