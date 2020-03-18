<?php get_header() ?>
<div class="hero-section">
    <div id="banner" class="owl-carousel">
        <?php
        if( have_rows('banners') ):
            while ( have_rows('banners') ) : the_row();
       ?>
                <div class="item">
                    <img alt="" src="<?php echo get_sub_field('banner_image') ?>">
                </div>
        <?php

            endwhile;
        endif;

        ?>

    </div>
    <div class="caption">
        <div class="inner">
            <?php echo get_field('banner_heading') ?>
            <a  href=" <?php echo get_field('banner_button_link') ?>" class="btn btn-round"><span>Read More</span></a>
        </div>
    </div>
</div>
<section class="fr">
    <div class="container">
        <ul class="icons">
            <?php
            if( have_rows('feature_box') ):
                while ( have_rows('feature_box') ) : the_row();
                    ?>
                    <li data-aos-delay="100"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
                        <div>
                            <i class="circle <?php echo get_sub_field('icon_class') ?>"></i>
                            <strong><?php echo get_sub_field('title') ?></strong>
                            <p><?php echo get_sub_field('description') ?></p>
                        </div>
                    </li>
                <?php
                endwhile;
            endif;
            ?>
        </ul>
        <div class="text-center">
            <a href="<?php echo get_field('feature_button_link') ?>" class="btn"><span>Contact Us</span></a>
        </div>
    </div>
</section>
<section class="video-sec">
    <div class="container">
        <div class="one-half" data-aos-delay="100"  data-aos="fade-up" data-aos-easing="ease-in-cubic">
            <div class="video-box">
                <iframe width="606" height="342" src="<?php echo get_field('video_link') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="one-half" data-aos-delay="100"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
            <h3><?php echo get_field('video_title') ?></h3>
            <p><?php echo get_field('video_description') ?></p>
            <a href="<?php echo get_field('video_section_link') ?>" class="btn"><span>Read More</span></a>
        </div>
    </div>
</section>
<section class="offer-sec">
    <div class="container">
        <h2><span><?php echo get_field('heading') ?></span></h2>
        <p><?php echo get_field('description') ?></p>
        <p class="down-arrow"><img alt="" src="<?php echo get_template_directory_uri() ?>/images/bottom-arrow.png"></p>
        <ul class="icon-tab" data-aos-delay="100"  data-aos="fade-up" data-aos-easing="ease-in-cubic">
            <?php
            $i=1;
            if( have_rows('solutions') ):
                while ( have_rows('solutions') ) : the_row();
                    $active_class='last ';
                    if($i==1){
                        $active_class="first active";
                    }
                    ?>
                    <li><a  class="<?php echo $active_class ?>" href="#tab-<?php echo $i ?>" rel="nofollow"><?php echo get_sub_field('solution_title') ?></a></li>
                <?php
                $i++;
                endwhile;
            endif;
            ?>

        </ul>
        <p><?php echo get_field('solution_sub_title') ?></p>
        <div class="tab-content" data-aos-delay="400"  data-aos="fade-down" data-aos-easing="ease-out-cubic">
            <?php
            $i=1;
            if( have_rows('solutions') ):
                while ( have_rows('solutions') ) : the_row();
                    ?>
                    <ul class="icons" id="tab-<?php echo $i; ?>">
                        <p class="tab-intro"><?php echo get_sub_field('solution_descriptions'); ?></p>
                        <?php
                        $j=100;
                        if( have_rows('offers') ):
                            while ( have_rows('offers') ) : the_row();
                                $active_class='';
                                ?>
                                <li data-aos-delay="<?php echo $j ?>"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
                                    <div class="shadowbox">
                                        <i class="square <?php echo get_sub_field('offer_icon_class') ?>"></i>
                                        <div class="offer-cont">
                                            <strong><?php echo get_sub_field('offer_title') ?></strong>
                                            <p><?php echo get_sub_field('offer_description') ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            $j = $j+100;
                            endwhile;
                        endif;
                        ?>
                    </ul>
                <?php
                $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<section class="choose-sec">
    <div class="container">
        <h2><span>Why choose <i class="softinform-text">SOFT<sub>&#8226;</sub>INFORM</i></span></h2>
        <ul>
            <?php
            $i=100;
            if( have_rows('services') ):
                while ( have_rows('services') ) : the_row();
                    ?>
                    <li data-aos-delay="<?php $i ?>"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
                        <div class="shadowbox">
                            <i class="square <?php echo get_sub_field('service_icon_class') ?>"></i>
                            <strong><?php echo get_sub_field('service_title') ?></strong>
                            <p><?php echo get_sub_field('service_description') ?></p>
                        </div>
                    </li>
                <?php
                $i= $i + 200;
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</section>
<section class="video-sec nl">
    <div class="container" data-aos-delay="100"  data-aos="zoom-down" data-aos-easing="ease-in-cubic">
        <h4>SIGN UP FOR NEWSLETTER!</h4>
        <?php
        if (!empty($_REQUEST['sendmail']) ) {
            ?>

            <div class="alert alert-success alert-dismissible fade show w-50">
                <strong>Mange tak for din forespørgsel. Vi vender tilbage til dig indenfor 1 arbejdsdag.</strong>
                <button type="button" class="popup-close" data-dismiss="alert">X</button>
            </div>
        <?php } ?>
        <form id="form" method="POST" action="newsletter.php">
            <div class="nl-box">
                <input type="text" id="email" class="validate-required" name="email" placeholder="Enter your email id">
                <div class="nl-button"><input type="submit" value="SUBMIT" class="nl-btn"></div>
                <div class="clr"></div>
                <span id="erroremail" class="error"></span>
            </div>
        </form>
    </div>
</section>
<section class="testimonials">
    <div class="container" data-aos-delay="100"  data-aos="zoom-in" data-aos-easing="ease-in-cubic">
        <h2><span>Success storeis from our customers</span></h2>
        <div id="tm-carousel" class="owl-carousel">
            <?php
            if( have_rows('stories') ):
                while ( have_rows('stories') ) : the_row();
                    ?>
                    <div class="item">
                        <div class="shadowbox">
                            <i class="quotes"></i>
                            <p><?php echo get_sub_field('description') ?></p>
                            <div class="pic">
                                <img alt="" src="<?php echo get_sub_field('image')?>">
                            </div>
                            <h5><?php echo get_sub_field('name') ?></h5>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer() ?>

