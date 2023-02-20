<?php 
if(isset($_GET['page'])) 
    $page = $_GET['page'];
else 
    $page = 'home';

include_once('Db.php');
include_once('Utils.php');
include_once('credentials.php');

function loadConfig() {
if(file_exists('config.ini'))
    {
      $config = parse_ini_file("config.ini");
      return array("orderID" => $config["orderID"]);
    } else
    return array();
}

$configData = loadConfig();

$content = Db::queryOne('SELECT aboutus.*, contacts.*, metatags.*, domains.*, cta.*, headlines.*, opening_time.* FROM aboutus 
          LEFT JOIN contacts ON aboutus.order_id = contacts.order_id
          LEFT JOIN metatags ON aboutus.order_id = metatags.order_id
          LEFT JOIN domains ON aboutus.order_id = domains.order_id
          LEFT JOIN cta ON aboutus.order_id = cta.order_id
          LEFT JOIN headlines ON aboutus.order_id = headlines.order_id
          LEFT JOIN opening_time ON aboutus.order_id = opening_time.order_id
          WHERE aboutus.order_id = ?', array($configData['orderID']));

$features = Db::queryAll('SELECT * FROM `features` WHERE `order_id` = ?', array($configData['orderID']));
$faqs = Db::queryAll('SELECT * FROM `faq` WHERE `order_id` = ?', array($configData['orderID']));
$services = Db::queryAll('SELECT * FROM `services` WHERE `order_id` = ?', array($configData['orderID']));

?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="cs"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= $content['meta_description']?>">
  	<meta name="keywords" content="<?= $content['meta_keywords']?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="canonical" href="https://www.<?= $content['domain']?>" />
	<title><?= $content['meta_title'] ?></title>
	<!-- For Facebook -->
	<meta property="og:title" content="<?= $content['og_title']?>" /> <!-- max. 88 characters-->
	<meta property="og:type" content="website" /> 
	<meta property="og:image" content="images/slide5.jpg">
	<meta property="og:url" content="https://<?= $content['domain']?>" />
	<meta property="og:description" content="<?= $content['og_description']?>" /> <!-- around 200 characters-->
	<meta property="og:locale" content="cs_CZ" />
	<!-- font awesome 6 free -->
	<script src="https://kit.fontawesome.com/a4fa5c84b6.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="hb-home hb-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="hb-wrapper" class="hb-wrapper hb-haslayout">
		<!--************************************
				Header V2 Start
		*************************************-->
		<header id="hb-header" class="hb-header v2 hb-haslayout">   
			<div class="hb-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<strong class="hb-logo"><a href="./"><span class="logo"><?= $content['c_brand'] ?></span></a></strong>
							<a href="?page=contact" class="hb-btn hidden-xs">Domluvit termín</a>
							<div class="hb-info-area hidden-xs">
								<ul class="list-unstyled hb-info">
									<li><i class="ti-location-pin hidden-sm"></i><span><?= $content['c_address'] ?></em></span></li>
									<li><i class="ti-email hidden-sm"></i><span><?= $content['c_phone'] ?><a href="mailto:<?= $content['c_email'] ?>"><?= $content['c_email'] ?></a></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hb-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="hb-addnav">
								<div class="hb-searcharea">
									<ul class="list-unstyled">
									<?php if(!empty($content['c_facebook'])) : ?>
									<li>
									<a href="<?=$content['c_facebook']?>">
									<i class="fab fa-facebook"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_twitter'])) : ?>
									<li>
									<a href="<?= $content['c_twitter'] ?>">
										<i class="fab fa-twitter"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_instagram'])) : ?>
									<li>
									<a href="<?= $content['c_instagram'] ?>">
										<i class="fab fa-instagram"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_youtube'])) : ?>
									<li>
									<a href="<?= $content['c_youtube'] ?>">
										<i class="fab fa-youtube"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_discord'])) : ?>
									<li>
									<a href="<?= $content['c_discord'] ?>">
										<i class="fab fa-discord"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_linkedin'])) : ?>
									<li>
									<a href="<?= $content['c_linkedin'] ?>">
										<i class="fab fa-linkedin"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_mastodon'])) : ?>
									<li>
									<a href="<?= $content['c_mastodon'] ?>">
										<i class="fab fa-mastodon"></i>
									</a>
									</li>
									<?php endif; ?>
                                    </ul>
								</div>

							</div>
							<nav id="hb-nav" class="hb-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hb-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="hb-navigation" class="collapse navbar-collapse hb-navigation">
									<ul>                                                                    
										<li class="menu-item-has-children">
											<a href="./">Úvod</a>											
										</li>
										<li class="menu-item-has-children">
											<a href="?page=services">Služby</a>
										</li>
                                        <li><a href="?page=pricelist">Ceník</a></li>
										<li class="menu-item-has-children">
											<a href="?page=gift">Dárkové poukazy</a>			
										</li>
										<li><a href="?page=contact">Kontakt</a></li>
									</ul>
								</div>
							</nav>
                            
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header V2 End
		*************************************-->
		<div class="search-popup">
			<div class="holder">
				<div class="block">
					<a href="#" class="close-btn"><i class="fa fa-times"></i></a>
					<form action="#" class="search-form">
						<fieldset>
							<input type="search" class="form-control" placeholder="Search">
							<button type="submit" class="btn-primary"><i class="fa fa-search"></i></button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
        <!--************************************
				Main Start
		*************************************-->
        <?php
            if (preg_match('/^[a-z0-9]+$/', $page)) 
            {
                $zobrazit = include($page . '.php' );
                if (!$zobrazit)
                $zobrazit = include('404.php');
				
            }
            else 
                echo('Neplatný parametr.');

            ?>


        <!--************************************
				Main END
		*************************************-->



        <!--************************************
				Footer Start
		*************************************-->
		<?php
            $thisYear = date('Y');
        ?>
		<footer id="hb-footer" class="hb-footer hb-haslayout">
			<div class="hb-footer-area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="hb-col">
								<strong class="hb-logo">
									<a href="javascript:void"><span class="logo"><?=$content['c_brand']?></span></a>
								</strong>	
								<span></span>				

								<div class="hb-timeandday">
								
								<div class="d-flex justify-content-between">
									<span >Pondělí: </span>
									<?php if($content['mon_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['mon_hour_start'] ?></span> : <span><?= $content['mon_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['mon_hour_end'] ?></span> : <span><?= $content['mon_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div> 
								<div class="d-flex justify-content-between">
									<span class="headline-color">Úterý: </span>
									<?php if($content['tue_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['tue_hour_start'] ?></span> : <span><?= $content['tue_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['tue_hour_end'] ?></span> : <span><?= $content['tue_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div>
								<div class="d-flex justify-content-between">
									<span class="headline-color">Středa: </span>
									<?php if($content['wen_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['wen_hour_start'] ?></span> : <span><?= $content['wen_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['wen_hour_end'] ?></span> : <span><?= $content['wen_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div>     
								<div class="d-flex justify-content-between">
									<span class="headline-color">Čtvrtek: </span>
									<?php if($content['thu_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['thu_hour_start'] ?></span> : <span><?= $content['thu_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['thu_hour_end'] ?></span> : <span><?= $content['thu_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div>
								<div class="d-flex justify-content-between">
									<span class="headline-color">Pátek: </span>
									<?php if($content['fri_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['fri_hour_start'] ?></span> : <span><?= $content['fri_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['fri_hour_end'] ?></span> : <span><?= $content['fri_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div> 
								<div class="d-flex justify-content-between">
									<span class="headline-color">Sobota: </span>
									<?php if($content['sat_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['sat_hour_start'] ?></span> : <span><?= $content['sat_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['sat_hour_end'] ?></span> : <span><?= $content['sat_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div>                                                                     
								<div class="d-flex justify-content-between">
									<span class="headline-color">Neděle: </span>
									<?php if($content['sun_hour_start']) : ?>
									<div class="d-flex">
										<div><span><?= $content['sun_hour_start'] ?></span> : <span><?= $content['sun_min_start'] ?></span></div>
										<div>&nbsp;-&nbsp;<span><?= $content['sun_hour_end'] ?></span> : <span><?= $content['sun_min_end'] ?></span></div>
									</div>
									<?php else : ?>
									<div><span class="text-danger">Zavřeno</span></div>
									<?php endif; ?>
								</div> 
								</div>
							


								<ul class="list-unstyled hb-socialicons">
								<?php if(!empty($content['c_facebook'])) : ?>
									<li>
									<a href="<?=$content['c_facebook']?>">
									<i class="fab fa-facebook"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_twitter'])) : ?>
									<li>
									<a href="<?= $content['c_twitter'] ?>">
										<i class="fab fa-twitter"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_instagram'])) : ?>
									<li>
									<a href="<?= $content['c_instagram'] ?>">
										<i class="fab fa-instagram"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_youtube'])) : ?>
									<li>
									<a href="<?= $content['c_youtube'] ?>">
										<i class="fab fa-youtube"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_discord'])) : ?>
									<li>
									<a href="<?= $content['c_discord'] ?>">
										<i class="fab fa-discord"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_linkedin'])) : ?>
									<li>
									<a href="<?= $content['c_linkedin'] ?>">
										<i class="fab fa-linkedin"></i>
									</a>
									</li>
									<?php endif; ?>
									<?php if(!empty($content['c_mastodon'])) : ?>
									<li>
									<a href="<?= $content['c_mastodon'] ?>">
										<i class="fab fa-mastodon"></i>
									</a>
									</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="hb-col">
								<h3>Kontakty</h3>
								<ul class="list-unstyled hb-info">
									<li><span><?=$content['c_phone']?><a href="mailto:<?=$content['c_email']?>"><?=$content['c_email']?></a></span>
									</li>
									<li><span><?=$content['c_address']?></em></span></li>
								</ul>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="hb-col h-100">
								<h3>Rychlé odkazy</h3>
								<ul class="list-unstyled">
									<li>
										<a href="./">Úvod</a>
									</li>
									<li><a href="?page=services">Služby</a></li>
									<li>
										<a href="?page=pricelist">Ceník</a>
									</li>
									<li>
										<a href="?page=gift">Poukazy</a>
									</li>
									<li>
										<a href="?page=contact">Kontakt</a>
									</li>
								</ul>
							</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hb-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<span class="hb-copyright">©2022 - <?= $thisYear ?> Vytvořil s láskou <a href="https://www.stanislav-drako.cz">Stanislav Drako</a>.</span>
							<ul class="list-unstyled hb-footernav">
								<li>Web neshromažďuje osobní údaje</li>
								<li><a href="?page=contact">Kontakt</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
		<span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span>
		<div id="loader" class="loader-holder">
			<div class="block">
			    <div class="dot white"></div>
			    <div class="dot"></div>
			    <div class="dot"></div>
			    <div class="dot"></div>
			    <div class="dot"></div>
			</div>
		</div>
	</div>

	<?php if($features && empty($_GET['page'])) : ?>
	<div class="modal">
		<div class="events">
			<div class="text-center">
				<h2><?= $content['feat_headline'] ?></h2>
				<p class="subheadline text-center">
				<?= $content['feat_subheadline'] ?>
				</p>
			</div>
		<?php foreach($features as $f)  : ?>
		
			<div class="box">
				<div class="hb-servicebox bg-grey sm-round">
					<h3 class="hb-headingtree"></h3>
						<figure class="hb-serviceimg">
							<img src="images/lookdown.webp" alt="<?= $s['services_title']?>" class="img-responsive">
						</figure>
						<div class="hb-servicecontent">
							<h3 class="hb-headingtree"><?= $f['f_title']?></h3>
							<div class="hb-description">
								<p><?= $f['f_content']?></p>
							</div>
						</div>
				</div>
			</div>	
		<?php endforeach; ?>
				
		</div>
		<div>
			<button id="modalBtn" class="hb-btn">Pokračovat</button>
		</div>
	</div>
	<?php endif; ?>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/isotop.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/main.js"></script>
</body>
</html>