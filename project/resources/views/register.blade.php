<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>">
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="12" max="100">

        <label for="age">Image:</label>
        <input type="file" id="img" name="img" >

        <input type="submit" value="Register" class="button" name="register">
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red;font-weight:bold;list-style:none;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>already have an account? </p>
        <a href="{{ route('logOut') }}">sign in</a>

    </div>
</body>
</html>
