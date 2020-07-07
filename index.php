<?php
$json = file_get_contents('db/pizza.json');

$menus = json_decode($json, true);

$menu = $menus["menu"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TBR Hut</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand text-danger text-monospace" href="#">TBR Hut</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="home.php">All Menu<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#">Pizza</a>
                            <a class="nav-item nav-link" href="#">Pasta</a>
                            <a class="nav-item nav-link" href="#">Minuman</a>
                        </div>
                    </div>
            </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <h1 class="mt-3 mb-3">
            Semua Menu
        </h1>
        <div class="row">
            <?php foreach ($menu as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="img/pizza/<?= $row["gambar"]; ?>" class="card-img-top" height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"]; ?></h5>
                            <p class="card-text"><?= $row["deskripsi"]; ?></p>
                            <a href="#" class="btn btn-primary">Rp. <?= $row["harga"]; ?> ,-</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    </div>
    </div>



    <!-- BOOTSTRAP JQUERY, AJAX, JAVASCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
