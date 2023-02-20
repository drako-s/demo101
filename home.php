<!--************************************
				Home Slider Start
		*************************************-->
		<div id="hb-homeslider" class="hb-homeslider owl-carousel owl-theme hb-haslayout">
			<div class="item hero">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 ">
							<div class="hb-slidercontent-area">
								<figure class="hb-sliderimg">
									
									<figcaption class="hb-slidercontent">
										<h1><span>Cesta k vnitřní harmonii</span>Masážní salon</h1>
										<div class="hb-description hero">
											<p>Po dlouhém pracovním týdnu není nic lepšího, než se nechat hýčkat.
                                            Je to příležitost uniknout ze stresu každodenního života k relaxaci a omlazení těla i mysli. </p>
										</div>
										<a href="?page=contact" class="hb-btn">Domluvit termín</a>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="item hero">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hb-slidercontent-area">
								<figure class="hb-sliderimg">
									
									<figcaption class="hb-slidercontent">
										<h1><span>Mobilní masér</span>Soukromé Masáže</h1>
										<div class="hb-description hero">
											<p>
                                                Hledáte profesionálního maséra k Vám domů nebo do kanceláře? Už nehledejte! Nabízím různé masážní techniky a balíčky, které vyhovují vašim potřebám a rozpočtu.</p>
										</div>
										<a href="?page=services" class="hb-btn">Zobrazit ceník</a>
									</figcaption> 
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="hb-main" class="hb-main hb-haslayout">
			<!--************************************
						Services Start
			*************************************-->
            <?php
            include_once('servicelist.php');
            ?>
            
			<!--************************************
						Services End
			*************************************-->
			<!--************************************
						Why Choose US Start
			*************************************-->
			<section id="hb-whychooseus" class="hb-whychooseus hb-sectionspace hb-bg hb-haslayout">
				<div class="container">
					<div class="row">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead mb-50">
								<div class="hb-sectiontitle">
									<h2><span><?= $content['about_subtitle'] ?></span>
									<?= $content['about_title'] ?>
									</h2>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<figure class="hb-whychooseus-img">
								<img src="images/adel1.webp" alt="Adéla Eckertová">
							</figure>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="hb-whychooseus-content">
								<div class="hb-whychooseus-title pb-3">
									<h3 class="hb-twoheading"></h3>
								</div>
                                <div class="about-desc">
                                    <p>
									<?= $content['about_content'] ?>
                                    </p>
                                </div>
                                <br>
								<div id="hb-statisticscounters" class="hb-statisticscounters">
									<div class="hb-counter">
										<h3><span data-from="0" data-to="175" data-speed="2000" data-refresh-interval="50">175</span></h3>
										<h4>Klientů</h4>
									</div>
									<div class="hb-counter">
										<h3><span data-from="0" data-to="6" data-speed="2000" data-refresh-interval="50">6</span></h3>
										<h4>Let praxe</h4>
									</div>
									<div class="hb-counter">
										<h3><span data-from="0" data-to="<?= count($services) ?>" data-speed="2000" data-refresh-interval="50"><?= count($services) ?></span></h3>
										<h4>Procedur</h4>
									</div>
									<div class="hb-counter">
										<h3><span data-from="0" data-to="2" data-speed="2000" data-refresh-interval="50">2</span></h3>
										<h4>Děti</h4>
									</div>
								</div>
								<div class="hb-btnarea">
									<a href="?page=gift" class="hb-btn"><i class="fa fa-gift"></i>Dárkový poukaz</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
						Why Choose US End
			*************************************-->
			<!--************************************
						Pricing Plan Start
			*************************************-->
            <?php
            include_once('pricelist.php');
            ?>
			<!--************************************
						Pricing Plan End
			*************************************-->
            			<!--************************************
						Appointment Start
			*************************************-->
			<section id="hb-appointment" class="hb-appointment hb-sectionspace hb-haslayout hb-bg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="hb-sectionhead">
								<div class="hb-sectiontitle">
									<h2><span><?= $content['c_brand']?></span>
										Rezervace
									</h2>
								</div>
							</div>
							<div class="hb-appointmentcontent">
								<h3>Chcete si rezervovat termín nebo máte dotaz?</h3>
								<div class="hb-description">
									<p>Zavolejte mi : <strong><?= $content['c_phone']?></strong> a pokud se nedovoláte, nezoufejte. <br/>Nejspíše se věnuji jinému klientovi a určitě zavolám zpět.</p>
								</div>
								<div class="hb-btnarea">
									<a href="?page=contact" class="hb-btn">Rezervovat termín</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
						Appointment End
			*************************************-->
			<!--************************************
						Our Gallery Start
			*************************************-->
			<?php
				include_once('gallery.php');
			?>

			<!--************************************
						Our Gallery End
			*************************************-->

			<!--************************************
						Testimonial Start
			*************************************-->
			<section id="hb-testimonial" class="hb-testimonial hb-sectionspace hb-haslayout">
            <div class="container">
					<div class="row">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead mb-50">
								<div class="hb-sectiontitle">
									<h2><span>Hodnocení</span>
                                    Říkají o mně
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="hb-testimonialarea hb-haslayout">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="hb-testimonialbox hb-haslayout">
									<div class="hb-testimonialcontentbox">
										<div class="hb-description">
											<p>Velmi milé a pečující prostředí. Není to pouze jít na masáž. Je to jít strávit čas a prostor pro sebe a se sebou, pod taktovkou Adélky. Vřele doporučuji vyzkoušet!</p>
										</div>
									</div>
									<div class="hb-testimonialutherbox">

										<div class="hb-uthername">
											<h3>Andrea Firlová</h3>
											<span></span> -
											<span class="hb-stars"><span></span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="hb-testimonialbox hb-haslayout">
									<div class="hb-testimonialcontentbox active">
										<div class="hb-description">
											<p>Krásné prostředí, které lahodí oku i duši a ještě lepší masérka . Už se těším na příště!</p>
										</div>
									</div>
									<div class="hb-testimonialutherbox">
										<div class="hb-uthername">
											<h3>Lucie Valchařová</h3>
											<span></span> -
											<span class="hb-stars"><span></span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="hb-testimonialbox hb-haslayout">
									<div class="hb-testimonialcontentbox">
										<div class="hb-description">
											<p>Dobrý den, navštívil jsem centrum a podstoupil jsem celkovou masáž, neskutečně se mi ulevilo, poznal jsem to hned první noc. Konečně jsem se vyspal bez bolestí. Určitě plánuji další návštěvy. Děkuji mnohokrát a přeji hezký den.</p>
										</div>
									</div>
									<div class="hb-testimonialutherbox">
										<div class="hb-uthername">
											<h3>Kamil Didi</h3>
											<span></span> -
											<span class="hb-stars"><span></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
						Testimonial End
			*************************************-->
			
		</main>
		<!--************************************
				Main End
		*************************************-->