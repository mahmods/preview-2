<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutrition</title>
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/fontawesome-all.min.css">
    <link rel="stylesheet" href="./styles/slick.css">
    <link rel="stylesheet" href="./styles/slick-theme.css">
    <link rel="stylesheet" href="./styles/animate.css">
    <link rel="stylesheet" href="./styles/main.css">

    <script src="./scripts/jquery-3.3.1.min.js"></script>
    <script src="./scripts/wow.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <script src="./scripts/slick.min.js"></script>
    <script src="./scripts/instafeed.min.js"></script>
    
</head>
<body>
    <header class="header">
        <div id="navbar-example" class="top-nav navbar-fixed-top">
            <div class="brand">
                Nutrition
            </div>

            <div class="navbar navbar-expand-md">
                <button class="navbar-toggler">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse">
                    <nav class="m-auto">
                        <a href="#">Home</a>
                        <a href="#">Shop</a>
                        <a href="#">Brands</a>
                        <a href="#">Special Offers</a>
                        <a href="#">Contact us</a>
                    </nav>
                </div>
                <div id="main-navbar" class="drawer">
                    <nav class="ml-auto">
                        <a href="#">Home</a>
                        <a href="#">Shop</a>
                        <a href="#">Brands</a>
                        <a href="#">Special Offers</a>
                        <a href="#">Contact us</a>
                    </nav>
                </div>
            </div>
            <div class="search">
                <a href="#"><i class="fas fa-search"></i></a>
            </div>

        </div>
        <div class="bottom-nav">
            Free Shipping and Samples with ALL ORDERS - 0345 302 4762
        </div>
        <div class="header-slider">
            <div class="slide">
                <div class="content">
                    <h1>DVST8 CRIMSON IS HERE</h1>
                    <a href="#">Buy now</a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>DVST8 CRIMSON IS HERE</h1>
                    <a href="#">Buy now</a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>DVST8 CRIMSON IS HERE</h1>
                    <a href="#">Buy now</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="special col-11 justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="#"><img src="./images/Dedicated-BCAA_500x.png" alt=""></a>
                    </div>
                    <div class="col-6">
                        <a href="#"><img src="./images/KORT-ENIGMA-REVIEW_600x.jpg" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 wow fadeInLeft">
                        <a href="#"><img src="./images/KORT-ENIGMA-REVIEW_600x.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#"><img src="./images/Dedicated-BCAA_500x.png" alt=""></a>
                    </div>
                    <div class="col-12 col-md-4 wow fadeInRight">
                        <a href="#"><img src="./images/gainz_compressed_500x.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="products">
        <div class="container">
            <h2>SPECIAL OFFERS</h2>
            <div class="line">
                <img src="./images/line.jpg" alt="">
            </div>
            <div class="products-slider">
                <?php for ($i=0; $i < 5; $i++) : ?>
                <div class="product-block">
                    <a class="product-image" href="#">
                        <img src="./images/Gold-standard.jpg" alt="">
                        <div class="overlay">purchase now</div>
                    </a>
                    <h4><a href="#">ProSupps Stack</a></h4>
                    <h5>£49.95</h5>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <i class="fas fa-truck wow bounceIn"></i>
                    <h3>FAST DELIVERY</h3>
                    <p>Free delivery when paying by card or when ordering from $ 350.</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-shield-alt wow bounceIn"></i>
                    <h3>100% REFUND OF MONEY</h3>
                    <p>You can return your items to Nutrition Store within 14 calendar days of receiving your order.</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-home wow bounceIn"></i>
                    <h3>QUALITY INSPECTIONS</h3>
                    <p>You can check the quality of things right in front of the courier and redeem the order.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2>NEW PRODUCTS</h2>
            <div class="line">
                <img src="./images/line.jpg" alt="">
            </div>
            <div class="products-slider">
                <?php for ($i=0; $i < 5; $i++) : ?>
                <div class="product-block">
                    <a class="product-image" href="#">
                        <img src="./images/Gold-standard.jpg" alt="">
                        <div class="overlay">purchase now</div>
                    </a>
                    <h4><a href="#">ProSupps Stack</a></h4>
                    <h5>£49.95</h5>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <h2>FOLLOW US INSTAGRAM</h2>
            <div class="line">
                <img src="./images/line.jpg" alt="">
            </div>
        </div>
            <div id="instafeed">
                
            </div>
    </section>

    <footer class="footer">
        <div class="top-footer">
            <div class="brand">Nutrition</div>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row">
                        <div class="col-12 col-md-4">
                        <h2>About us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, consequuntur eveniet accusamus nulla doloremque ea error molestias aliquam, repellat id quos architecto illo quod non, quam assumenda aut voluptates. Tempora.
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h2>Links</h2>
                        <nav>
                            <a href="#">Home</a>
                            <a href="#">Home</a>
                            <a href="#">Home</a>
                            <a href="#">Home</a>
                        </nav>
                    </div>
                    <div class="col-12 col-md-4">
                        <h2>About us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, consequuntur eveniet accusamus nulla doloremque ea error molestias aliquam, repellat id quos architecto illo quod non, quam assumenda aut voluptates. Tempora.
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="copywrite">© 2018 Nutrition Store</div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./scripts/main.js"></script>
</body>
</html>