@extends('layout.nimda')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('nimda/img/connect.png') }}" alt="connect">
                </div>

                <form class="login100-form validate-form" method="post" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <span class="login100-form-title">
						Connecte toi !
					</span>

                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach

                    <div class="wrap-input100 validate-input" data-validate = "Nom d'utilisateur obligatoire">
                        <input class="input100" type="text" name="name" placeholder="Nom d'utilisateur">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Email obligatoire">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Mot de passe obligatoire">
                        <input class="input100" type="password" name="password" placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Mot de passe obligatoire">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirmation du mot de passe">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Connexion
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/library/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/library/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/library/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/library/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('nimda/css/main.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('nimda/js/library/popper.js') }}"></script>
    <script src="{{ asset('nimda/js/library/select2.min.js') }}"></script>
    <script src="{{ asset('nimda/js/library/tilt.jquery.min.js') }}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
@endsection
