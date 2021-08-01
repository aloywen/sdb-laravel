<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="/login-a" autocomplete="off">
                @csrf
                @if(Session::has('err'))
                <p>{{ Session::get('err') }}</p>
                @endif
                <input type="text" id="login" class="second" name="email" placeholder="email" required>
                <input type="password" id="password" class="third" name="password" placeholder="password" required>
                <input type="submit" class="fourth" value="Log In">
            </form>

            <a href="/">
                <input type="submit" class="fourth" value="Home Page">
            </a>
        </div>
    </div>



    <script src="/js/main.js"></script>

</body>

</html>