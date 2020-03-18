<?php get_header(); ?>
<div class="banner-sub" style="background-image: url(<?php echo get_field('banner_image') ?>)">
    <div class="bo">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
<section class="offer-sec">
    <div class="container">
        <h2><span><?php echo get_field('heading') ?></span></h2>
        <p class="w-75"><?php echo get_field('description') ?></p>
        <ul class="icons mt-1" data-aos-delay="400"  data-aos="fade-down" data-aos-easing="ease-out-cubic">
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
                <iframe width="606" height="342" src="<?php echo get_field('video_link') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="one-half" data-aos-delay="100"  data-aos="fade-down" data-aos-easing="ease-in-cubic">
            <h3><?php echo get_field('video_title') ?></h3>
            <p><?php echo get_field('video_description') ?></p>
            <a href="<?php echo get_field('video_button_link') ?>" class="btn">Kontakt os</a>
        </div>
    </div>
</section>
<section class="recruitment">
    <div class="container">
        <h2><span>REKRUTTERING</span></h2>
        <ul class="icons">
            <?php
            $i=100;
            if( have_rows('Recruitment') ):
                while ( have_rows('Recruitment') ) : the_row();
                    ?>
                    <li data-aos-delay="<?php echo $i ?>"  data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
                        <div class="rc-box">
                            <i class="rc-sq <?php echo get_sub_field('recruitment_icon_class') ?>"></i>
                            <div class="content-right">
                                <strong><?php echo get_sub_field('recruitment_title') ?></strong>
                                <p><?php echo get_sub_field('recruitment_description') ?></p>
                            </div>
                        </div>
                    </li>
                    <?php
                    $i= $i + 100;
                endwhile;
            endif;
            ?>
            <div class="text-center">
                <a href="<?php echo get_field('recruitment_button_link') ?>" class="btn"><span>Kontakt</span></a>
            </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <h2><span>Vores ledergruppe</span></h2>
        <ul>
            <?php
            $i=100;
            if( have_rows('management_team') ):
                while ( have_rows('management_team') ) : the_row();
                    ?>
                    <li data-aos-delay="<?php echo $i ?>"  data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-box">
                            <figure class="profile">
                                <img src="<?php echo get_sub_field('image') ?>">
                            </figure>
                            <div class="content-right">
                                <strong><?php echo get_sub_field('name') ?></strong>
                                <span><?php echo get_sub_field('position') ?></span>
                                <p><?php echo get_sub_field('description_short') ?> <a href="javasscript:;" id="<?php echo get_sub_field('id') ?>" class="rm-link rm-open">Læs mere</a></p>
                                <div class="team-si">
                                    <a target="_blank" href="<?php echo get_sub_field('facebook_link') ?>" class="fb"></a>
                                    <a target="_blank" href="<?php echo get_sub_field('linkedin_link') ?>" class="ld"></a>
                                </div>
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
<?php
if( have_rows('management_team') ):
    while ( have_rows('management_team') ) : the_row();
        ?>
        <div class="rm-overlay" id="pd-<?php echo get_sub_field('id') ?>">
            <div class="rm-content">
                <a href="javascript:;" class="rm-close"></a>
                <h6><?php echo get_sub_field('name') ?></h6>
                <p><?php echo get_sub_field('description_full') ?></p>
            </div>
        </div>
    <?php
    endwhile;
endif;
?>
<?php  echo get_footer(); ?>
<div class="nav-overlay"></div>