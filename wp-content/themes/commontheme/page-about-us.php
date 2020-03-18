<?php get_header() ?>
<div class="banner-sub" style="background-image: url(<?php echo get_field('banner_image') ?>)">
    <div class="bo">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
<section class="about-sec">
    <div class="container">
        <div class="one-half">
            <figure class="ab-img">
                <img alt="" src="<?php echo get_field('image_left') ?>" class="left">
                <img alt="" src="<?php echo get_field('image_right') ?>" class="right">
            </figure>
        </div>
        <div class="one-half">
            <h3><span><?php echo get_field('about_us_heading') ?></span></h3>
            <?php echo get_field('about_us_description') ?>
            <h3 class="mt-20"><span><?php echo get_field('vision_title') ?></span></h3>
            <i><?php echo get_field('vision_description') ?></i>
            <i class="author"><strong><?php echo get_field('vision_author') ?> <br>
                    <?php echo get_field('author_position') ?>
                    </strong></i>
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
            <a href="<?php echo get_field('video_button_link') ?>" class="btn">Kontakt</a>
        </div>
    </div>
</section>
<section class="team pt-100">
    <div class="container">
        <h2><span>Vores ledergruppe</span></h2>
        <ul>
            <?php
            $i=100;
            if( have_rows('management_team',76) ):
                while ( have_rows('management_team',76) ) : the_row();
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
if( have_rows('management_team',76) ):
    while ( have_rows('management_team',76) ) : the_row();
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
<?php get_footer() ?>
<div class="nav-overlay"></div>