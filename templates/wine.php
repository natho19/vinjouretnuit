<?php /* Template Name: Nos vins */ ?>

<?php get_header() ?>

<!-- Header Banner -->
<div class="banner-header valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= VJN_IMG_URL . '/banner2.jpg' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-60">
                <h1>Nos vins</h1>
            </div>
        </div>
    </div>
</div>

<!-- Shop -->
<section class="main-shop section-padding">
    <div class="container">
        <div class="products-shop">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="item">
                        <div class="img">
                            <a href="#">
                                <img src="<?= VJN_IMG_URL . '/shop/2.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="cont">
                            <h6><a href="#">Southern Fried Chicken</a></h6>
                            <div class="info">
                                <p>Lorem vulputate massa sit amet ravida haretran nuam enim mi obortis eset uctus sapien.</p>
                            </div>
                            <div class="botm">
                                <h5 class="price">$30.00</h5>
                            </div>
                            <div class="mt-30">
                                <a href="#" class="button-3">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="img">
                            <a href="#">
                                <img src="<?= VJN_IMG_URL . '/shop/1.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="cont">
                            <h6><a href="#">Southern Fried Chicken</a></h6>
                            <div class="info">
                                <p>Lorem vulputate massa sit amet ravida haretran nuam enim mi obortis eset uctus sapien.</p>
                            </div>
                            <div class="botm">
                                <h5 class="price">$30.00</h5>
                            </div>
                            <div class="mt-30">
                                <a href="#" class="button-3">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>