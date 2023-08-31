<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="<?php echo asset('css/addProduct.css')?>">
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" >

        <label for="cat_id">Category ID:</label>
        <input type="number" id="cat_id" name="category_id" >

        <label for="rel_date">Release date:</label>
        <input type="date" id="rel_date" name="release_date">

        <label for="img">Image:</label>
        <input type="file" id="img" name="img" >

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" >

        <input type="submit" value="ADD" class="button">
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
    </div>
</body>
</html>
