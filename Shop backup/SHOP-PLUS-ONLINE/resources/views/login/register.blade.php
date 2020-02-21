<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <title>register</title>
</head>
<body>
<div class="center-container">
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <div class="wthree-pro">
                <h2>Register</h2>
            </div>
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="pom-agile">
                    <input placeholder="Enter your name" name="name"  class="pass" type="text" required="">
                    <span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>

                <div class="pom-agile">
                    <input placeholder="Enter your email" name="email" class="pass" type="text" required="">
                    <span class="icon2">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="pom-agile">
                    <input placeholder="Enter your phone" name="phone" class="pass" type="text" required="">
                    <span class="icon2">
                        <i class="fas fa-phone-square"></i>
                    </span>
                </div>

                <div class="pom-agile">
                    <input placeholder="Password" name="password" class="pass" type="password" required="">
                    <span class="icon2"><i class="fas fa-eye" aria-hidden="true"></i></span>
                </div>
                <div class="sub-w3l login">
                    <div class="right-w3l">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <p><a href="{{route('home')}}">Shop Plus+</a></p>
    </div>
</div>
<script src="https://kit.fontawesome.com/92c99bd371.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/login_register.js')}}"></script>
</body>
</html>
