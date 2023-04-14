<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">DEERWALK SIFAL SCHOOL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fee.php"> Fee Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LEARN MORE</button>
        </form>
    </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="R.jpg" alt="Deerwalk" width="1550" height="500">
        </div>
        <div class="carousel-item">
            <img src="1680068335.jpg"" alt="NEW FASHION" width="1550" height="500">
        </div>
        <div class="carousel-item">
            <img src="1651402713.jpg" alt="STEP INTO SAVINGS" width="1550" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<section class="my-5">
    <div class="py-5">
        <div class="container-fluid belt-a pt-4 mt-4 bg-warning">
        <h1 style="text-align: center; color; white; font-size: x-large;" class="belt-content", <b>ABOUT US</b>
        </h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="R%20(1).jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">LEARN AND EXPLORE</h2>
                <p class="py-3">
                    Deerwalk Sifal School is located in Sifal Kathmandu. It is affiliated with National Examination Board (NEB)
                    and offers +2 in Science and Management programs. Founded in 2016, Deerwalk Sifal School is determined to
                    help our students grow as a good global citizen with solid academic skill in language, math, and science.
                </p>
                <a href="about.php" class="btn btn-success">LEARN MORE ABOUT US</a>
            </div>
        </div>
    </div>
    <section class="my-5">
        <div class="py-5">
    <div class="container">
        <div class="container-fluid belt-a pt-4 mt-4 bg-warning">
            <h1 style="text-align: center; color; white; font-size: x-large;" class="belt-content", <b>CONTACT US</b>
            </h1>
        </div>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        </div>
</section>
<footer>
    <p class="p-3 bg-success text-white text-center">@SIFAL.DEERWALK.EDU.NP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
