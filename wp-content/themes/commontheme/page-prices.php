<?php get_header(); ?>
<div class="banner-sub" style="background-image: url(<?php echo get_field('banner_image') ?>)">
    <div class="bo">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
<section class="plan-sec">
    <div class="container">
        <h2><span>VORES PRISER</span></h2>
        <ul class="icons" data-aos-delay="400"  data-aos="fade-down" data-aos-easing="ease-out-cubic">
            <?php
            if( have_rows('prices_box') ):
                while ( have_rows('prices_box') ) : the_row();
                    ?>
                    <li>
                        <div class="plan-cont">
                            <i class="circle <?php echo get_sub_field('icon_class') ?>"></i>
                            <strong><?php echo get_sub_field('title') ?></strong>
                            <div class="price-text"><span><?php echo get_sub_field('price_text') ?></span></div>
                            <p><?php echo get_sub_field('description') ?></p>
                            <a href="<?php echo get_sub_field('button_link') ?>" class="btn btn-round"><span>Læs mereE</span></a>
                        </div>
                    </li>
                <?php
                endwhile;
            endif;
            ?>

            </ul>
    </div>
</section>
<section class="plan-sec-btm recruitment">
    <div class="container">
        <ul class="icons">
            <?php
            $i = 300;
            if( have_rows('features') ):
                while ( have_rows('features') ) : the_row();
                    ?>
                    <li data-aos-delay="<?php echo $i ?>" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" class="aos-init aos-animate">
                        <div class="rc-box">
                            <i class="rc-sq <?php echo get_sub_field('icon_class') ?>"></i>
                            <div class="content-right">
                                <strong><?php echo get_sub_field('title') ?></strong>
                                <p><?php echo get_sub_field('description') ?></p>
                            </div>
                        </div>
                    </li>
                <?php
                $i = $i + 200;
                endwhile;
            endif;
            ?>
        </ul>
        <div class="text-center">
            <a href="<?php echo get_sub_field('contact_page_link') ?>" class="btn"><span>Kontakt os</span></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
