<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeSpots</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstraps 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav bar inside menu.php -->
    <?php include 'menu.php' ?>
    <!-- carousel slide -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src=".\images\globe.jpg" alt="globe" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Global</h3>
                    <p>services</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=".\images\neural.jpg" alt="neural" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Artificial Intelligence</h3>
                    <p>enabled</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=".\images\processor.jpg" alt="processor" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Agile</h3>
                    <p>model</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- section -->
    <section class="my-5" id="services">
        <!-- our services -->
        <div class="py-5">
            <h3 class="text-center">Our Services</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./images/webdev.jpg" alt="web development">
                        <div class="card-body">
                            <h4 class="card-title">Web Development</h4>
                            <p class="card-text">Create dynamic webpages and host them.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./images/appdevelopment.jpg" alt="application development">
                        <div class="card-body">
                            <h4 class="card-title">Application Development</h4>
                            <p class="card-text">Create Android/iOS applications.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./images/cybersecurity.jpg" alt="cybersecurity">
                        <div class="card-body">
                            <h4 class="card-title">Cybersecurity</h4>
                            <p class="card-text">Protect data from digital attacks.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <section class="my-5" id="clients">
        <!-- our clients -->
        <div class="py-5">
            <h3 class="text-center">Our Clients</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company1.jpg" alt="c1" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company2.jpg" alt="c2" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company3.jpg" alt="c3" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company4.jpg" alt="c4" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company5.jpg" alt="c5" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/company6.jpg" alt="c6" class="img-fluid pb-4">
                </div>
            </div>
        </div>
    </section>
    <!-- section About Us-->
    <section class="my-5">
        <!-- about us -->
        <div class="py-5">
            <h3 class="text-center">About Us</h3>
        </div>
        <!-- grid system -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src='./images/together.jpg' class="img-fluid aboutimg" />
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">We are team CodeSpots</h2>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis commodo odio aenean. Nulla porttitor massa id neque aliquam vestibulum. Vestibulum mattis ullamcorper velit sed ullamcorper.
                    </p>
                    <a href="about.php" class="btn btn-primary"> Know More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <section class="my-5" id="contact">
    <!-- contact us -->
        <div class="py-5">
            <h3 class="text-center">Contact Us</h3>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comments" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-white text-center"><a href="index.php" style="color: white; text-decoration: none; font-size: larger;">&copy2021 CodeSpots. All Rights Reserved.</a></p>
    </footer>

    <!-- JS bootstraps 4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>