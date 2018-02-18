<?php include("./header-home.php") ?>

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

<?php include("./footer.php") ?>