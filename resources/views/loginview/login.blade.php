@extends('layout.main')
@section('container')
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <style>
        * {
    margin: 50;
    padding: 0;
    box-sizing: border-box;
}

body {
    
    
    background: #000000;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.login {
    margin-left: 450px;
    margin-top: 50px;
    align-items: center;
    justify-content: center;
    width: 360px;
    height: min-content;
    padding: 20px;
    border-radius: 12px;
    background: #ffffff;
}

.login h1 {
    font-size: 36px;
    margin-bottom: 25px;
}

.login form {
    font-size: 20px;
}

.login form .form-group {
    margin-bottom: 12px;
}

.login form input[type="submit"] {
    font-size: 20px;
    margin-top: 15px;
}
    </style>
</head>

<body>
    
    <div class="row">
        @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
    <div class="login">
        <h1 class="text-center">Sign In</h1>
        
        <form class="needs-validation" action="/loginview/loginsuccess" method="POST">
            @csrf
            {{-- <div class="form-group was-validated">
                <label class="form-label" for="text">Username</label>
                <input class="form-control" type="text" id="text" required placeholder="Username">
                <div class="invalid-feedback">
                    Please enter your username
                </div>
            </div> --}}
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input name="email" value="{{ Session::get('email') }}" class="form-control" type="email" id="email" required placeholder="Email">
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input name="password" class="form-control" type="password" id="password" required placeholder="Password">
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <div class="btn btn-success w-100">
                <button name="submit" type="submit" class="btn btn-success w-100">Sign In</button>
            </div>
        </form>

    </div>

</body>

</html>
@endsection