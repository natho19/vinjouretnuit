<?php /* Template Name: Contact */ ?>

<?php get_header() ?>

<!-- Header Banner -->
<div class="banner-header valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= VJN_IMG_URL . '/banner2.jpg' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-60">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>

<!-- Informations de Contact -->
<section class="info-box section-padding pb-0" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="item">
                    <span class="icon ti-location-pin"></span>
                    <div class="cont">
                        <h5>Adresse</h5>
                        <p>Sagbado, Agotimé, Lomé-Togo</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <span class="icon ti-mobile"></span>
                    <div class="cont">
                        <h5>Téléphone</h5>
                        <h6><a href="tel:+22893188241">+228 93 18 82 41</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <span class="icon ti-email"></span>
                    <div class="cont">
                        <h5>Email</h5>
                        <p><a href="mailto:vinjouretnuit@gmail.com">vinjouretnuit@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire de Contact & Map -->
<section class="section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-head mb-20">
                    <div class="section-subtitle">Vin Jour et Nuit</div>
                    <div class="section-title mb-20">Nous Contacter</div>
                    <p>Une commande, une collaboration ou une suggestion ? N'hésitez pas à nous contacter.</p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="contact-form">
                    <div class="booking-inner clearfix">
                        <form class="form1 clearfix">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input1_wrapper">
                                        <label>Name</label>
                                        <div class="input2_inner">
                                            <input type="text" class="form-control input" placeholder="Nom" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input1_wrapper">
                                        <label>Phone</label>
                                        <div class="input2_inner">
                                            <input type="text" class="form-control input" placeholder="Téléphone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input1_wrapper">
                                        <label>e-Mail</label>
                                        <div class="input2_inner">
                                            <input type="email" class="form-control input" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input1_wrapper">
                                        <label>Subject</label>
                                        <div class="input2_inner">
                                            <input type="text" class="form-control input" placeholder="Objet" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <button type="submit" class="btn-form1-submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Maps -->
    <div class="full-width">
        <div class="no-spacing map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3966.601220630109!2d1.133085861644772!3d6.184091093777564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssagbado%2C%20agotime!5e0!3m2!1sfr!2stg!4v1741624730957!5m2!1sfr!2stg" frameborder="0" class="google-maps" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<?php get_footer() ?>