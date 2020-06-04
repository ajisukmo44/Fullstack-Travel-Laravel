<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/libraries/xZoom-master/dist/xzoom.css">
    <link rel="stylesheet" href="frontend/libraries/gijgo-master/dist/combined/css/gijgo.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">

</head>

<body>


    <!-- main -->
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">
                        We explore the new <br>
                        life much better
                    </h1>
                    <img src="{{ url('frontend/images/login-image.png') }}" class="w-75 d-none d-sm-flex" alt="" />
                </div>
                <div class="section-right col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="username">
        
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No hp') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp"  placeholder="no hp" autofocus>
        
                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-login btn-block mt-1">
                                            {{ __('Register') }}
                                        </button>
                                        
                                    <p class="text-center mt-4">
                                        <a href="{{ route('login') }}">Sign In ?</a>
                                    </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </main>
    <!-- end main -->



</body>
<script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="frontend/libraries/retina/retina.min.jss"></script>

<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        icon: {
            rightIcon: '<img src="frontend/images/ic_date.png"/>'
        }

    });

</script>

</html>
