<?php

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
    <title>Product Catalog</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h1>Product List</h1>
            <ul class="nav navbar-nav navbar-right">
                <form class="container-fluid justify-content-start">
                    <button class="btn btn-success navbar-btn" type="button">Add</button>
                    <button class="btn btn-danger navbar-btn" type="button" id="delete-product-btn">Mass Delete</button>
                </form>
            </ul>
        </div>
    </nav>

    <div class="b-divider"></div>

    <footer id="sticky-footer" class="flex-shrink-0 py-sm-3 bg-white text-black mt-auto">
        <div class="b-divider"></div>
        <div class="container text-center pt-sm-3">
            <p>Scandiweb Test Assignment</p>
        </div>
    </footer>

</body>

</html>