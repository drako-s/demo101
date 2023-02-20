<section id="hb-services" class="hb-services ver-4 v2 hb-sectionspace hb-haslayout">
				<div class="container">
					<div class="row">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead mb-50">
								<div class="hb-sectiontitle">
									<h2><span>Vítá vás</span>
										Harmonizační centrum
									</h2>
								</div>
								<div class="hb-headcontent">
									<h2><?= $content['price_headline'] ?></h2>
									<div class="hb-description">
										<p><?= $content['price_subheadline'] ?></p>
									</div>
								</div>
							</div>
						</div>
                        <div id="hb-servicesslider" class="hb-servicesslider hb-haslayout owl-carousel owl-theme">
						<?php $i = 1; ?>
						<?php foreach($services as $s) : ?>
							<div class="item">
								<div class="hb-servicebox bg-grey sm-round">
								<h3 class="hb-headingtree"></h3>
									<figure class="hb-serviceimg">
										<img src="images/services/0<?= $i ?>.jpg" alt="<?= $s['services_title']?>" class="img-responsive">
										<figcaption class="hb-imagecontent">
											<a href="?page=pricelist" class="hb-btn">Do ceníku</a>
										</figcaption>
									</figure>
									<div class="hb-servicecontent">
										<h3 class="hb-headingtree"><?= $s['services_title']?></h3>
										<div class="hb-description">
											<p><?= $s['services_content']?></p>
										</div>
									</div>
								</div>
							</div>	
							<?php $i++ ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>