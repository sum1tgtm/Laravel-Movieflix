<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieFlix</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    <header class="main-header">
        <div class="header-div">
            <h3 class="main-title"><a class="page-title" href="/"> MovieFlix</a></h3>
            {{-- <h3 class="main-title"><a class="page-title" href="/"> MovieFlix</a></h3> --}}
            <ul class="header-nav">
                {{-- <li><a href="{{ route('login') }}"><button>Login</button></a></li> --}}
                <li><a href="login"><button class="btn login-btn">Login</button></a></li>
                <li><a href="register"><button class="btn register-btn">Register</button></a></li>
            </ul>
        </div>
    </header>
    <section>
        <p class="large">Unlimited movies, TV <br> shows, and more. </p>
        <p class="small"> Watch anywhere. Cancel anytime. </p>
    </section>

</body>

</html>
