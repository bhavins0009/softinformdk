<?php get_header() ?>
<div class="banner-sub" style="background-image: url(<?php echo get_field('banner_image') ?>)">
    <div class="bo">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
<section class="offer-sec recruitment pm-sec">
    <div class="container">
        <h2><span><?php echo get_field('heading') ?></span></h2>
        <p class="w-75"><?php echo get_field('description') ?></p>
        <ul class="icons">
            <?php
            $i=100;
            if( have_rows('solutions') ):
                while ( have_rows('solutions') ) : the_row();
                    ?>
                    <li data-aos-delay="<?php echo $i ?>"  data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
                        <div class="rc-box">
                            <i class="rc-sq <?php echo get_sub_field('icon_class') ?>"></i>
                            <div class="content-right">
                                <strong><?php echo get_sub_field('title') ?></strong>
                                <p><?php echo get_sub_field('description') ?></p>
                            </div>
                        </div>
                    </li>
                    <?php
                    $i= $i + 100;
                endwhile;
            endif;
            ?>
        </ul>

        <div class="text-center">
            <a href="<?php echo get_field('contact_page_link') ?>" class="btn"><span>Kontakt</span></a>
        </div>
    </div>
</section>
<section class="offer-sec pt0">
    <div class="container">
        <ul class="icons" data-aos-delay="400" data-aos="fade-down" data-aos-easing="ease-out-cubic">
            <?php
            $i=100;
            if( have_rows('offers',2) ):
                while ( have_rows('offers',2) ) : the_row();
                    ?>
                    <li data-aos-delay="<?php echo $i ?>"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
                        <div class="shadowbox">
                            <i class="square <?php echo get_sub_field('offer_icon_class') ?>"></i>
                            <div class="offer-cont">
                                <strong><?php echo get_sub_field('offer_title') ?></strong>
                                <p><?php echo get_sub_field('offer_description') ?></p>
                            </div>
                        </div>
                    </li>
                    <?php
                    $i= $i + 100;
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</section>
<section class="video-sec">
    <div class="container">
        <div class="one-half" data-aos-delay="100"  data-aos="fade-up" data-aos-easing="ease-in-cubic">
            <div class="video-box">
                <iframe width="606" height="342" src="  <?php echo get_field('video_link') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
        <div class="one-half" data-aos-delay="100"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
            <h3>  <?php echo get_field('video_title') ?></h3>
            <p>  <?php echo get_field('video_description') ?></p>
            <a href="  <?php echo get_field('video_button_link') ?>" class="btn"><span>Kontakt</span></a>
        </div>
    </div>
</section>
<section class="pd-sec about-sec" data-aos-delay="800" data-aos="fade-down" aos-duration="3000" data-aos-easing="ease-out-cubic">
    <div class="container">
        <h2><span><?php echo get_field('heading_process') ?></span></h2>
        <h3><span><?php echo get_field('sub_heading_1') ?></span></h3>
        <div class="process-row">
            <?php
            $i=1;
            if( have_rows('your_responsibility') ):
                while ( have_rows('your_responsibility') ) : the_row();
                    if($i%2==0) {
                        $up_down_class='down';
                        $arrow_class='varrow';
                    } else {
                        $up_down_class ='';
                        $arrow_class='harrow';
                    }
                    ?>
                    <div class="col <?php echo $up_down_class; ?> hide" id="<?php echo get_sub_field('id') ?>">
                        <div class="steps step<?php echo $i; ?>">
                            <i class="steps-cirlce"><span><?php echo $i; ?></span></i>
                            <p><?php echo get_sub_field('name') ?></p>
                        </div>
                        <div class="vline<?php echo $i; ?>"></div>
                        <div class="hline<?php echo $i; ?>"></div>
                        <div class="<?php echo $arrow_class; ?> ar<?php echo $i; ?>"></div>
                    </div>
                    <?php
                $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<section class="pd-sec pd-sec2 about-sec" data-aos-delay="800" data-aos="fade-down" aos-duration="6000" data-aos-easing="ease-out-cubic">
    <div class="container">
        <h3><span><?php echo get_field('sub_heading_2') ?></span></h3>
        <div class="process-row">
            <?php
            $i=1;
            if( have_rows('our_responsibility') ):
                while ( have_rows('our_responsibility') ) : the_row();
                    if($i%2==0) {
                        $up_down_class='down';
                        $arrow_class='varrow';
                    } else {
                        $up_down_class ='';
                        $arrow_class='harrow';
                    }
                    ?>
                    <div class="col <?php echo $up_down_class; ?> hide" id="<?php echo get_sub_field('id') ?>">
                        <div class="steps step<?php echo $i; ?>">
                            <i class="steps-cirlce"><span><?php echo $i; ?></span></i>
                            <p><?php echo get_sub_field('name') ?></p>
                        </div>
                        <div class="vline<?php echo $i; ?>"></div>
                        <div class="hline<?php echo $i; ?>"></div>
                        <div class="<?php echo $arrow_class; ?> ar<?php echo $i; ?>"></div>
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
