<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,  user-scalable = no" />
    <title>Soft.Inform</title>
    <link rel="shortcut icon" href="../images/soft-inform-icon.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T9TC963');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1413522755522247');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1413522755522247&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <?php wp_head() ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9TC963"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
$rootUrlLinkActive = empty($url[2]) ? 'current' : '';
?>

<header class="header">
    <div class="topbar">
        <div class="container">
            <span class="phone-num"><a href="tel:+4542503600">+45 42 50 36 00</a></span>
            <div class="tb-right">
                <div class="si">
                    <a href="https://www.facebook.com/SoftInform-105077264228775/" target="_blank" class="fb"></a>
                    <a href="https://www.linkedin.com/company/soft%C2%B7inform-aps/" target="_blank" class="ld"></a>
                </div>
                <div class="lang">
                    <span class="selected"><img alt="British Flag" src="<?php echo get_template_directory_uri() ?>/images/bri-flag.png">English</span>
                    <ul style="display: none">
                        <li><a href="<?php echo site_url() ?>"><img alt="Danish Flag" src="<?php echo get_template_directory_uri() ?>/images/dan-flag.png">Danish</a></li>
                        <li><a href="<?php echo site_url() ?>/en"><img alt="British Flag" src="<?php echo get_template_directory_uri() ?>/images/bri-flag.png">English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middlebar">
        <div class="container">
            <a href="index.php" class="logo"><img alt="" src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
            <button class="navMenu">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <nav class="nav">
                <button class="close" id="nav-close">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-ul'
                    ) );
                ?>
            </nav>
        </div>
    </div>
</header>

