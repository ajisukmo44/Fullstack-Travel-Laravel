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
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email"> Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="off" required autofocus>
                                    

                                </div>
                                <div class="form-group">
                                    <label for="password"> Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                         </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleCheck1">
                                        remember me </label>
                                </div>
                                <button type="submit" class="btn btn-login btn-block mt-4">Sign In</button>
                                <p class="text-center mt-4">
                                    <a href="{{ route('register') }}">Create an account ?</a>
                                </p>
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





