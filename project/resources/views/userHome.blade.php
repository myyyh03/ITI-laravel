<!DOCTYPE html>
<html>
    <head>
        <title>E-Books</title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/userHome.css')?>">
    </head>
    <body>
        <header>
        <h1><a href="#top">E-Books</a></h1>
        <nav>
            <ul>
            <li><a href="{{ route('userHome') }}">Home</a></li>
            <li><a href="{{ route('userProfile') }}">Profile</a></li>
            <li><a href="{{ route('logOut') }}">Log Out</a></li>
            </ul>
        </nav>
        </header>

        <main>
        <section>
            <h2 id="top">Featured Products</h2>
            @foreach($products as $product)
                <div class="product-card">
                    <img src="imgs/{{$product->img}}" alt="{{$product->img}}">
                    <h3 class="product-title">Title : {{$product->product_name}}</h3>
                    <p class="product-price">Price : ${{$product->price}}</p>
                    <p>{{$product->release_date}}</p>
                    <p>Author : {{$product->author}}</p>
                    <a href="{{ route('buy' , [$product->product_id])}}" class="btn">Add to Cart</a>
                </div>
            @endforeach
        </section>

        </main>

        <footer>
            <p>&copy; 2023 E-Books. All rights reserved.</p>
        </footer>
    </body>
</html>
