<?php include("./header.php") ?>
<div class="page-head">
    <h1>SHOP</h1>
</div>
<div id="shop" class="container">
    <div class="row">
    <?php for ($i=0; $i < 5; $i++) : ?>
    <div class="col-12 col-md-6 col-lg-4 product-block">
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

<?php include("./footer.php") ?>