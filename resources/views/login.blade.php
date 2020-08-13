@extends('layout.auth')

@section('content')
    <div class="card-header text-center"><h4>{{ __('Login') }}</h4></div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0 pb-4">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary d-block" style="width: 100%">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="mt-5 text-muted text-center">
  Sudah punya akun? <a href="/register" class="text-decoration-none">Daftar sekarang!</a>
</div>
@endsection
