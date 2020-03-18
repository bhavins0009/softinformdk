<?php get_header(); ?>
    <div class="banner-sub" style="background-image: url(<?php echo get_field('banner_image') ?>)">
        <div class="bo">
            <div class="container">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
<section class="contactus-sec">
    <div class="container">
        <h2><span>Make IT happen</span></h2>
        <div class="left">
            <p>Udfyld formularen og skriv venligst et par ord om dine udviklingsønsker og behov. Vi ser frem til at høre fra dig.</p>
            <p class="mandatory">* All felter skal venligst udfyldes</p>
            <?php
            if (!empty($_REQUEST['sendmail']) ) {
                ?>

                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Mange tak for din forespørgsel. Vi vender tilbage til dig indenfor 1 arbejdsdag.</strong>
                    <button type="button" class="popup-close" data-dismiss="alert">X</button>
                </div>
            <?php } ?>
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
        </div>
        <div class="right">
            <h3><span><strong>LAD OS TALE</strong> OM IT</span> </h3>
            <article class="ci-row">
                <h5 class="phone">Telefon</h5>
                <p>+45 42 50 36 00</p>
            </article>
            <article class="ci-row">
                <h5 class="email">Email</h5>
                <a href="mailto:info@softinform.dk">info@softinform.dk</a>
            </article>
            <article class="ci-row">
                <h5 class="address">Adresse</h5>
                <p>Plantagevej 14, 3460 Birkerød, Danmark</p>
            </article>
        </div>
    </div>
</section>
<section class="gmap">
    <iframe src="" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<?php get_footer(); ?>