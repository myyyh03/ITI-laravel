<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('loginPage') }}" method="GET">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <input type="submit" value="Login" class="submit">
        </form>

        @if (session('error'))
            <div class="error" style="color:red;font-weight:bold;">{{ session('error') }}</div>
        @endif
        <p>don't have an account <a href="{{ route('register') }}">sign Up</a></p>
    </div>
</body>
</html>
