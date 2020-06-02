<?php
function get_url($url) {
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

$data_json = get_url("http://api.oshw.tn/covid-initiative/getdata.php");
$data_array = json_decode($data_json, true);

/* variables */
$date = date_format(date_create($data_array["fields"]["Date"]),"d/m/Y");
$units = $data_array["fields"]["Unités produites"];
$places = $data_array["fields"]["Lieux de fabrication"];
$volunteers = $data_array["fields"]["Volentaires"];
$delivered_hospitals = $data_array["fields"]["Hôpital livrés"];
$visors = $data_array["fields"]["Visières"];
$connectors = $data_array["fields"]["Connecteurs"];
$protective_suits = $data_array["fields"]["Combinaisons"];

?><!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/index-meta.jpg">
  <meta property="og:image" content="assets/images/index-meta.jpg">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/asset-7-final-symb-244x225.png" type="image/x-icon">
  <meta name="description" content=""COVID 19 Makers Response Hub Tunisia" is an initiative powered by OpenFab Tunisia in partnership with the local makers and the tech community to encourage the adoption of Open Source collaboration and Open Source Hardware culture. ">

  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <section class="menu cid-rVY66UlCbq" once="menu" id="menu2-0">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://oshw.tn">
                        <img src="assets/images/asset-7-final-symb-244x225.png" alt="" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="https://oshw.tn">Open Source Hardware Tunisia #COVID-19</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="./index.html#content4-17">
                        About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#map1-u">
                        Makers</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#clients-4">
                        Partners</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#content5-1f">
                        Projets</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#toggle1-21">FAQ</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="projects.html#content4-1u"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>Wiki</a> <a class="btn btn-sm btn-primary display-4" href="https://join.slack.com/share/zt-ebwsw1ds-jfJyoP_MAyqO8sXhUYD3vw" target="_blank"><span class="mbri-chat mbr-iconfont mbr-iconfont-btn"></span>Slack</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info">Mobirise</a></section><section class="header1 cid-rVY6asszqy mbr-fullscreen mbr-parallax-background" id="header1-1">



    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(70, 80, 82);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1"><div>Initiatives des Makers Tunisiens contre COVID19&nbsp;<span style="color: inherit; font-size: 4.25rem;"></span></div></h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">&nbsp;Une initiative pour soutenir les efforts de collaboration des Makers &amp; Makerspaces qui se sont mobilisés pour produire des équipements de protection sanitaire d'urgence pour les établissements sanitaires en Tunisie.</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"></p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="index.html#content4-17"><span class="mbri-down mbr-iconfont mbr-iconfont-btn"></span>
                        EN SAVOIR PLUS</a></div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content4 cid-rXc7uGGH7E" id="content4-17">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">REJOINDRE LE RESEAU</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">*Dernier récapitulatif de la production datée le <?php echo $date; ?>
</h3>

            </div>
        </div>
    </div>
</section>

<section class="features7 cid-rXcLyc2Z3b" id="features7-1a">




    <div class="container">
        <div class="row justify-content-center">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-protect" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong><?php echo $units; ?></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7"><strong>
                           Unités produites</strong></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-pin" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong><?php echo $places; ?></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7"><strong>
                           Lieux de fabrication</strong></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-users" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                    </div>
                    <div class="media-body card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong><?php echo $volunteers; ?></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7"><strong>Volentaires</strong><br></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-delivery" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong><?php echo $delivered_hospitals; ?></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7"><strong>Hôpital livrés</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map1 cid-rXbBZByp4w" id="map1-u">



    <iframe class="airtable-embed" src="https://airtable.com/embed/shr7DUKsI12OH88b6?backgroundColor=red" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
</section>

<section class="features3 cid-rVY6iEtbgb" id="features3-2">




    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-3.jpeg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">Voulez-vous nous aider à produire ?&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Vous êtes un particulier, une entreprises ou une association située en Tunisie, et vous êtes équipés de machines de fabrication? Découpeuses laser, imprimantes 3D, machines à coudres... Rejoignez le réseaux<br></p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="https://airtable.com/shrRTzX0lF9ZfylhP" class="btn btn-primary display-4">Rejoindre la production</a></div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-1.jpeg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">Appartenez-vous à une structure hospitaliéres en tunisie ?&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Vous, ou des personnes que vous connaissez, avez besoin de PPE ? Le matériel est fourni gratuitement et bénévolement, mais ne remplace pas un équipement médical certifié, c'est une solution d'urgence pour pallier le manque.<br></p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="https://airtable.com/shr8YyZ9ibS2vKh4Z" class="btn btn-primary display-4">
                            Demander du matériel</a></div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-1-676x507.png" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">Voulez-vous soutenir l'action ?</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Nous mettons tout cela en oeuvre gratuitement et bénévolement, donc Si vous voulez contribuer à l'effort les sommes récupérées sont/seront utilisées pour rembourser les achats de matières premières et autres dépenses de la communauté.<br></p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="page2.html" class="btn btn-primary display-4">En savoir plus</a></div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rXcTrjDBzK" id="content4-1c">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">

                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><strong>
                    Vous voulez proposer d'autres services !</strong></h3>
                <div class="mbr-section-btn align-center py-4"><a class="btn btn-primary display-4" href="https://airtable.com/shriGGpDi7c2wNsQA" target="_blank">Contactez nous</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-rXcY4OO5hC mbr-parallax-background" id="content5-1f">



    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(70, 80, 82);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">PROJETS</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Une collection de projets de la communauté pour aider les équipes médicales dans leur lutte contre le COVID-19</h3>


            </div>
        </div>
    </div>
</section>

<section class="services1 cid-rXbCdBks9x" id="services1-v">
    <!---->

    <!---->
    <!--Overlay-->

    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">


            </div>
            <!--Card-1-->
            <div class="card col-12 col-md-6 p-3 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/sharedobjects-faceshield-photos-5-large-516x516.png" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">Visières de Protection</h4>
                        <p class="mbr-text mbr-fonts-style display-7"></p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-center"><a href="projects.html" class="btn btn-warning-outline display-4">
                                EN SAVOIR PLUS</a></div>
                    </div>
                </div>
            </div>
            <!--Card-2-->
            <div class="card col-12 col-md-6 p-3 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/masque-decathlon-4-696x391.jpeg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">Connecteurs pour le masque EasyBreath</h4>
                        <p class="mbr-text mbr-fonts-style display-7"></p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-center"><a href="projects.html" class="btn btn-warning-outline display-4">
                                EN SAVOIR PLUS</a></div>
                    </div>
                </div>
            </div>
            <!--Card-3-->
            <div class="card col-12 col-md-6 p-3 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/unnamed-3-512x357.jpeg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5"><br>Combinaisons de protection</h4>
                        <p class="mbr-text mbr-fonts-style display-7"></p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-center"><a href="projects.html" class="btn btn-warning-outline display-4">
                                EN SAVOIR PLUS</a></div>
                    </div>
                </div>
            </div>
            <!--Card-4-->
            <div class="card col-12 col-md-6 p-3 col-lg-3 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/pousse-seringue-fresenius-pilote-c-506x506.jpg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">Pousse-seringue électrique</h4>
                        <p class="mbr-text mbr-fonts-style display-7"></p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-center"><a href="projects.html" class="btn btn-warning-outline display-4">
                                EN SAVOIR PLUS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counters1 counters cid-rXbLtSifiE" id="counters1-w">





    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Bilan de Production&nbsp;</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">Dernier récapitulatif de la production : <?php echo $date; ?></h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-protect" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2"><?php echo $visors; ?></h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">&nbsp;Visières de Protection&nbsp;</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-link" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2"><?php echo $connectors; ?></h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Connecteurs / EasyBreath de Décathlon</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-users" style="color: rgb(231, 0, 19); fill: rgb(231, 0, 19);"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2"><?php echo $protective_suits; ?></h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Combinaisons de protection</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
   </div>
</section>

<section class="mbr-section content8 cid-rXc0bfaR1m" id="content8-13">


<!--
    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="https://mobirise.co">EN SAVOIR PLUS</a></div>
            </div>
        </div>
    </div>
</section>
-->
<section class="mbr-section content5 cid-rXcZHCLitK mbr-parallax-background" id="content5-1g">



    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(231, 0, 19);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Photos</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Présentation de l'opération en photos</h3>


            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rXcZPMgLgb" id="gallery3-1h">



    <div>
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Impressionnant"><div href="#lb-gallery3-1h" data-slide-to="0" data-toggle="modal"><img src="assets/images/90595630-10221876647805316-2104546078257840128-n-1-960x540-768x432.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Adaptatif"><div href="#lb-gallery3-1h" data-slide-to="1" data-toggle="modal"><img src="assets/images/visiere-corona-fablab-djagora-mpbs-2000x1261-800x450.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Créatif"><div href="#lb-gallery3-1h" data-slide-to="2" data-toggle="modal"><img src="assets/images/91728795-2843560549030718-1992115168867254272-n-960x720-768x432.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animé"><div href="#lb-gallery3-1h" data-slide-to="3" data-toggle="modal"><img src="assets/images/90671790-4236114883080700-8572274712976031744-o-2000x1500-800x450.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Impressionnant"><div href="#lb-gallery3-1h" data-slide-to="4" data-toggle="modal"><img src="assets/images/91907908-1556849257797773-7337615758773452800-n-960x720-800x450.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Impressionnant"><div href="#lb-gallery3-1h" data-slide-to="5" data-toggle="modal"><img src="assets/images/95821753-257531798625698-4564533080018124800-n-1-720x351-624x351.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Adaptatif"><div href="#lb-gallery3-1h" data-slide-to="6" data-toggle="modal"><img src="assets/images/95097828-1098280910527989-8936058253968670720-n-720x960-717x403.jpeg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animé"><div href="#lb-gallery3-1h" data-slide-to="7" data-toggle="modal"><img src="assets/images/90608428-4244004725625049-8680740792026791936-o-716x960-716x402.jpeg" alt="" title=""><span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-1h"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="assets/images/90595630-10221876647805316-2104546078257840128-n-1-960x540.jpeg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/visiere-corona-fablab-djagora-mpbs-2000x1261.jpeg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/91728795-2843560549030718-1992115168867254272-n-960x720.jpeg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/90671790-4236114883080700-8572274712976031744-o-2000x1500.jpeg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/91907908-1556849257797773-7337615758773452800-n-960x720.jpeg" alt="" title=""></div><div class="carousel-item active"><img src="assets/images/95821753-257531798625698-4564533080018124800-n-1-720x351.jpeg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/95097828-1098280910527989-8936058253968670720-n-720x960.jpeg" alt="" title=""></div><div class="carousel-item active"><img src="assets/images/90608428-4244004725625049-8680740792026791936-o-716x960.jpeg" alt="" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-1h"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-1h"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>

<section class="clients cid-rW4E3Vpb0o" data-interval="false" id="clients-4">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Acteurs et partenairs</h2>

                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" data-visible="6">





            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <a href="https://fablabs.tn/"><img src="assets/images/tunisian-fablabs-logo-404x285.jpg" class="img-responsive clients-img" alt="" title=""></a>
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/el-fabspace-logo-2-1-1319x1322.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/18076751-1973190496261419-497052270086858601-o-960x960.jpeg" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <a href="https://openfab.tn/"><img src="assets/images/openfab-tn-logo-slogan-bas-vecto-192x263.png" class="img-responsive clients-img" alt="" title=""></a>
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/92830134-124533915857036-7029859490631516160-n-500x500.jpeg" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="toggle1 cid-rXN3hz29tW" id="toggle1-21">




        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">
                       <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">Foire aux questions&nbsp;</h2>
                    </div>
                    <div class="clearfix"></div>
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse1_31" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;À QUI S’ADRESSE CE SITE ?</h4>
                                </a>
                            </div>
                            <div id="collapse1_31" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_31" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;EST-CE QUE LES PRODUITES SONT GRATUITS ?</h4>
                                </a>

                            </div>
                            <div id="collapse2_31" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse3_31" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;COMMENT AVOIR CONFIANCE ET ÉVITER LES ARNAQUES ?</h4>
                                </a>
                            </div>
                            <div id="collapse3_31" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_31" aria-expanded="false" aria-controls="collapse4">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;QUEL EST NOTRE RAYON D’ACTION ?</h4>
                                </a>
                            </div>
                            <div id="collapse4_31" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</section>

<section class="mbr-section mbr-section__comments" id="facebook-comments-block-f" data-rv-view="1942" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">

    <div class="mbr-section__container mbr-section__container--isolated addons-container">
        <div class="addons-row">
            <div class="addons-container-inner"><div class="facebookPlaceholder" data-numposts="5"><h2>FACEBOOK COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img src="assets/images/facebook-comments.jpg"></div></div>


        </div>
    </div>
</section>

<section class="cid-rW4E9kMCsK" id="social-buttons1-5">





    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    SHARE THIS PAGE!
                </h2>
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-rW4EjdId22 mbr-reveal" id="footer4-7">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="https://openfab.tn/">
                        <img src="assets/images/logo-openfab-tn-140x140.png" alt="" title="">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7"><strong>OpenFab Tunisia</strong></p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7"><br><a href="mailto:contact@openfab.tn" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    About</p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">"COVID 19 Makers Response Hub Tunisia" is an initiative powered by OpenFab Tunisia in partnership with the local makers and the tech community to encourage the adoption of Open Source collaboration and Open Source Hardware culture.&nbsp;<br></p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">



                <p class="mb-4 mbr-fonts-style foot-title display-7"><br>CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com/openfabtn" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/OpenFab.tn/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://github.com/OpenFabTN" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-github socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://openfab.tn/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social mbri-globe"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="mailto:contact@openfab.tn">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-mail socicon"></span>
                            </a>
                        </div>

                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyrights 2020 OpenFab Tunisia - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-customerchat" page_id="783185208482828"></div>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>

  <input name="animation" type="hidden">
  </body>
</html>
