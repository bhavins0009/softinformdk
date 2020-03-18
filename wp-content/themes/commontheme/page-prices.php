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
            <li>
                <div class="plan-cont">
                    <i class="circle pd"></i>
                    <strong>Projektudvikling</strong>
                    <div class="price-text"><span>300 kr. i timen</span></div>
                    <p>Hvis dit IT projekt er lille, og du ikke har brug for personlige programmører over en længere periode.</p>
                    <a href="project-development.php" class="btn btn-round"><span>Læs mereE</span></a>
                </div>
            </li>
            <li>
                <div class="plan-cont">
                    <i class="circle os"></i>
                    <strong>Outsourcing</strong>
                    <div class="price-text"><span>25.000 kr. om måneden pr. programmør (min. 12 måneder)</span></div>
                    <p>Hvis dit IT projekt er mellemstort eller stort, og du har brug for programmører til udvikling, test og support der arbejder 150 timer om måneden for dig.</p>
                    <a href="outsourcing.php" class="btn btn-round"><span>Læs mere</span></a>
                </div>
            </li>
            <li>
                <div class="plan-cont">
                    <i class="circle rq"></i>
                    <strong>Få tilbud</strong>
                    <div class="price-text"><span>Få tilbud</span></div>
                    <p>Send din opgavebeskrivelse, så vender vi tilbage med et godt tilbud.</p>
                    <a href="contact-us.php" class="btn btn-round"><span>Læs mere</span></a>
                </div>
            </li>

        </ul>
    </div>
</section>
<section class="plan-sec-btm recruitment">
    <div class="container">
        <ul class="icons">
            <li data-aos-delay="300" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" class="aos-init aos-animate">
                <div class="rc-box">
                    <i class="rc-sq one"></i>
                    <div class="content-right">
                        <strong>Projektstyring</strong>
                        <p>Det er meget vigtigt for udviklingsprojekters succes, at projektstyringen er så god som mulig, specielt når udviklingen foregår ”udenfor huset”.  Vi har gjort det enkelt for dig, fordi Soft▪Inform står for projektstyringen. Du er i trygge og erfarne hænder, og du skal i princippet kun fokusere på at lave gode og præcise opgavebeskrivelser, og naturligvis lave den afsluttende test og godkendelse.
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos-delay="500" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" class="aos-init aos-animate">
                <div class="rc-box">
                    <i class="rc-sq two"></i>
                    <div class="content-right">
                        <strong>100% tilfredsheds garanti</strong>
                        <p>Vores medarbejdere er alle professionelle programmører med lang erhvervserfaring, og vi er så sikre på kvaliteten af vores arbejde, at hvis du ikke er tilfreds, refunderer vi 100% af første måneds betaling. Fuld tilfredshed eller pengene tilbage.</p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="text-center">
            <a href="contact-us.php" class="btn"><span>Kontakt os</span></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
