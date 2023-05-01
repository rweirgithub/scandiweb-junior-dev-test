<?php

if (isset($_POST['submit'])) {
    echo $_POST['sku'];
    echo $_POST['name'];
    echo $_POST['price'];
    echo $_POST['productType'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="icon" href="imgs\BR-flag.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Product Add</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h1>Product Add</h1>
            <ul class="nav navbar-nav navbar-right">
                <div class="container-fluid justify-content-start">
                    <button class="btn btn-light navbar-btn" type="submit" value="submit" form="product_form">Save</button>
                    <a href="/" class="btn btn-light navbar-btn" type="button">Cancel</a>
                </div>
            </ul>
        </div>
    </nav>

    <div class="b-divider"></div>

    <section class="container my-5">
        <form action="addproduct.php" method="POST" id="product_form" class=>
            <div class="row my-2">
                <label for="sku" class="col-3">SKU</label>
                <input type="text" name="sku" id="sku" placeholder="" class="col-3" required>
            </div>
            <div class="row my-2">
                <label for="name" class="col-3">Name</label>
                <input type="text" name="name" id="name" placeholder="" class="col-3" required>
            </div>
            <div class="row my-2">
                <label for="price" class="col-3">Price ($)</label>
                <input type="number" name="price" id="price" placeholder="" class="col-3" required>
            </div>
            <div class="row my-2">
                <label for="productType" class="col-3">Type Switcher</label>
                <select class="custom-select my-1 mr-3 col-3" name="productType" id="productType">
                    <option selected disabled></option>
                    <option value="dvd" id="DVD">DVD</option>
                    <option value="book" id="Book">Book</option>
                    <option value="furniture" id="Furniture">Furniture</option>
                </select>
            </div>
            <div class="row my-2">
                <h2>DVD Size</h2>
            </div>
            <div class="row my-2">
                <label for="size" class="col-3">Size (MB)</label>
                <input type="number" name="number" id="size" placeholder="" class="col-3" required>
                <span class="col-3 text-secondary">Please, provide size</span>
            </div>
            <div class="row my-2">
                <h2>Book Weight</h2>
            </div>
            <div class="row my-2">
                <label for="weight" class="col-3">Weight (KG)</label>
                <input type="number" name="weight" id="weight" placeholder="" class="col-3" required>
                <span class="col-3 text-secondary">Please, provide weight</span>

            </div>
            <div class="row my-2">
                <h2>Furniture Dimensions</h2>
            </div>
            <div class="row my-2">
                <label for="height" class="col-3">Height (CM)</label>
                <input type="number" name="height" id="height" placeholder="" class="col-3" required>
                <span class="col-3 text-secondary">Please, provide height</span>
            </div>
            <div class="row my-2">
                <label for="width" class="col-3">Width (CM)</label>
                <input type="number" name="width" id="width" placeholder="" class="col-3" required>
                <span class="col-3 text-secondary">Please, provide width</span>
            </div>
            <div class="row my-2">
                <label for="length" class="col-3">Length (CM)</label>
                <input type="number" name="length" id="length" placeholder="" class="col-3" required>
                <span class="col-3 text-secondary">Please, provide length</span>
            </div>
        </form>
    </section>


    <footer id="sticky-footer" class="flex-shrink-0 py-sm-3 bg-white text-black mt-auto">
        <div class="b-divider"></div>
        <div class="container text-center pt-sm-3">
            <p>Scandiweb Test Assignment</p>
        </div>
    </footer>

</body>

</html>