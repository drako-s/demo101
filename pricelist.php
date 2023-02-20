<section id="hb-pricinglist" class="hb-pricinglist hb-sectionspace hb-haslayout">
				<div class="container">
					<div class="row justify-content-center">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead mb-50">
								<div class="hb-sectiontitle">
									<h2><span><?= $content['c_brand'] ?></span>
										Ceny
									</h2>
								</div>
							</div>
						</div>
						<div class="hb-pricinglist-area col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-3">
							<div class="col-xs-12 col-md-6">
								<ul class="hb-pricinglistbox">
									<?php foreach($services as $s) : ?>
									<li>
									    <h3><?= $s['services_title']?></h3>
									    <span><?= $s['services_price']?></span>
                                    </li>
									<?php endforeach; ?>
								</ul>
							</div>							
						</div>
					</div>
				</div>
			</section>
            <section id="hb-pricingplan" class="hb-pricingplan hb-sectionspace hb-haslayout hb-bg">
				<div class="container">
					<div class="row">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead mb-50">
								<div class="hb-sectiontitle">
									<h2><span>Výhodná cena</span>
										Permanentky
									</h2>
								</div>
							</div>
						</div>
						<div class="hb-pricingplan-area">
                                                
							<div class="col-xs-10 col-sm-8 col-md-3 ">
								<div class="hb-pricingbox active">
									<figure class="hb-pricing-img">
										<img src="images/services/perma01.jpg" alt="Maderoterapie">
									</figure>
									<div class="pricingcontent">
										<h3>
											Populární
                                        </h3>
                                        <p>Maderoterapie 5x</p>
										<ul class="list-unstyled hb-pricinglist">
											<li>5x procedur</li>
											<li>699 ,- / procedura</li>
											<li>Ušetříte 500,-</li>
										</ul>
										<div class="hb-btnarea">
											<a href="?page=contact" class="hb-btn changebtn">3 495 ,-</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-10 col-sm-8 col-md-3">
								<div class="hb-pricingbox active">
									<figure class="hb-pricing-img">
										<img src="images/services/perma01.jpg" alt="images description">
									</figure>
									<div class="pricingcontent">
										<h3>
											Nejvýhodnější											
										</h3>
                                        <p>Maderoterapie 10x</p>
										<ul class="list-unstyled hb-pricinglist">
											<li>10x procedur</li>
											<li>649 ,- / procedura</li>
											<li>Ušetříte 1500,-</li>
			
										</ul>
										<div class="hb-btnarea">
											<a href="?page=contact" class="hb-btn changebtn">6 490,-</a>
										</div>
									</div>
								</div>
							</div>
                            
						</div>
					</div>
				</div>
			</section>
			<?php
			include_once('gift.php');
			?>