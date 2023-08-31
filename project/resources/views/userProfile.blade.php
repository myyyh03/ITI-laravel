
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/userProfile.css')?>">
</head>
<body>
    <header>
    <h1><a href="#top">E-Books</a></h1>
    <nav>
        <ul>
        <li><a href="{{ route('userHome') }}">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="{{ route('logOut') }}">Log Out</a></li>
        </ul>
    </nav>
    </header>
    <div class="container">
    <h2>{{$user->name}} Profile</h2>

    <div class="profile-info">
        <img src="imgs/{{$user->img}}" alt="imgs/{{$user->img}}">

        <label for="name">Name:</label>
        <p id="name" class="blue-text">{{$user->name}}</p>

        <label for="age">Age:</label>
        <p id="age" class="blue-text">{{$user->age}}</p>

        <label for="email">Email:</label>
        <p id="email" class="blue-text">{{$user->email}}</p>

        <label for="password">Password:</label>
        <p id="password" class="blue-text">********</p>
        </div>

        <div class="products-list">
        <h3>Products Bought:</h3>
            <div class="product-card">
                <h3 class="product-title">Product Title</h3>
                <p class="product-price">$99.99</p>
            </div>

        </div>
    </div>
</body>
</html>
