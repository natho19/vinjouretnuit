<?php /* Template Name: Vin Jour et Nuit */ ?>

<?php get_header() ?>

<!-- Header Banner -->
<div class="banner-header valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= VJN_IMG_URL . '/banner2.jpg' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-60">
                <h1>Vin Jour et Nuit</h1>
            </div>
        </div>
    </div>
</div>

<!-- Shop -->
<section class="main-shop product-page section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="single-product">
                    <div class="prod-title">
                        <h4>Vin Jour et Nuit</h4>
                        <div class="info">
                            <div class="price">
                                <h6><span>Price :</span> <strong>$40.00</strong></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Product Gallery -->
                    <div class="row">
                        <div class="col-md-12 gallery-item">
                            <div class="owl-carousel owl-theme text-center">
                                <div class="item">
                                    <div class="gallery-item-inner">
                                        <a href="<?= VJN_IMG_URL . '/shop/1.jpg'; ?>" title="" class="img-grayscale img-zoom">
                                            <div class="gallery-box">
                                                <div class="gallery-img">
                                                    <img src="<?= VJN_IMG_URL . '/shop/1.jpg'; ?>" class="img-fluid mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery-item-inner">
                                        <a href="<?= VJN_IMG_URL . '/shop/2.jpg'; ?>" title="" class="img-grayscale img-zoom">
                                            <div class="gallery-box">
                                                <div class="gallery-img">
                                                    <img src="<?= VJN_IMG_URL . '/shop/2.jpg'; ?>" class="img-fluid mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery-item-inner">
                                        <a href="<?= VJN_IMG_URL . '/shop/3.jpg'; ?>" title="" class="img-grayscale img-zoom">
                                            <div class="gallery-box">
                                                <div class="gallery-img">
                                                    <img src="<?= VJN_IMG_URL . '/shop/3.jpg'; ?>" class="img-fluid mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-30">
                        <p>Lorem eu leo eget velit pharetra convallis sit amet nec mi. Vivamus at placerat leo. Morbi nec lorem dolor. Morbi faucibus nec diam eu consequat. Etiam aliquam, odio non varius porta, ante justo laoreet ligula, vel fermentum justo tellus eu odio. Nullam iaculis odio id urna consectetur, in imperdiet arcu facilisis.</p>
                        <p>Nullam efficitur diam nibh. Nam ligula enim, pretium sed elementum sed, rutrum ac turpis. Nullam a dignissim nulla, viverra lacinia turpis. Vestibulum eu leo eget velit pharetra convallis sit amet nec mi. Vivamus at placerat leo. Morbi nec lorem dolor. Morbi faucibus nec diam eu consequat.</p>
                    </div>
                    <div class="mt-30">
                        <a href="#" class="button-5">Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>