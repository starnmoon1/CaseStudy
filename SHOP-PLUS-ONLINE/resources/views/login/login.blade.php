<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <title>login</title>
</head>
<body>
<div class="center-container">
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <div class="wthree-pro">
                <h2>Login</h2>
            </div>
            <form action="{{route('postLogin')}}" method="post">
                @csrf
                <div class="pom-agile">
                    <input placeholder="E-mail" name="email" class="user" type="email" required="">
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Password" name="password" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <div class="sub-w3l login">
                    <div class="right-w3l">
                        <input type="submit" value="Login">
                    </div>
                </div>

                <div class="sub-w3l facebook">
                        <input type="submit" value="Facebook">
                </div>


                <div class="sub-w3l google">
                        <input type="submit" value="Google">
                </div>

            </form>
        </div>
    </div>
    <div class="footer">
        <p><a href="{{route('home')}}">Shop Plus+</a></p>
    </div>
</div>
</body>
</html>
