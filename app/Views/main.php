<?php
echo view('common/main_site_header.php');
echo view('common/main_site_nav.php');
?>
<div class="modal search-modal black-text" id="search">
    <!-- <div class="modal-wrap"> -->
    <!-- <form method="get" action="https://JSD Constructionkundig.com"> -->
    <div class="search-input-wrap align-center">
        <input name="s" type="text" id="search-input" placeholder="Start Typing to Search" alt="Search" autocomplete="off" autocorrect="off" spellcheck="false" />
    </div>
    <div class="wrap grid-wrap flush-top">
        <div class="search-results flex-grid body-copy" id="search-results"></div>
    </div>
    <!-- </form> -->
    <!-- </div> -->
</div>
<div class="content-wrap" id="content-wrap">
    <div class="content" id="content" data-pagename="JSD Construction Kundig — A collaborative global design practice whose work expands the context of built and natural landscapes.">
        <section class="hero home-hero offblack-bg white-text" id="home-hero">
            <div class="fullscreen home-slider">
                <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20319">
                    <?php if(trim($contents['home']['background_image']) !== '') { ?>
                    <div class="slide-image object-cover">
                        <img src="<?= base_url('assets/uploads/'.$contents['home']['background_image']) ?>" class="landscape-image" alt="CUSTOM NEW CONSTRUCTION" data-id="20319" data-sizes="auto" srcset="" />
                        <img src="<?= base_url('assets/uploads/'.$contents['home']['background_image']) ?>" class="portrait-image" alt="CUSTOM REMODELING & ADDITIONS" data-id="20333" data-sizes="auto" srcset="" />
                    </div>
                    <?php } ?>
                    <div class="slide-text over-image">
                        <div class="wrap text-wrap align-center">
                            <h1 class="widont balance-text"><?= trim($contents['home']['heading']) ?></h1>
                            <p><?= $contents['home']['subheading'] ?></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="fullscreen" id="about">
                <a href="" class="fixed-wrap fixed" data-clear-cookies data-cover="16000">
                    <?php if(trim($contents['about']['background_image']) !== '') { ?>
                        <div class="slide-image object-cover">
                            <img src="<?= base_url('assets/uploads/'.$contents['about']['background_image']) ?>" class="landscape-image" alt="CUSTOM NEW CONSTRUCTION" data-id="20319" data-sizes="auto" srcset="" />
                            <img src="<?= base_url('assets/uploads/'.$contents['about']['background_image']) ?>" class="portrait-image" alt="CUSTOM REMODELING & ADDITIONS" data-id="20333" data-sizes="auto" srcset="" />
                        </div>
                    <?php } ?>
                    <div class="slide-text over-image">
                        <div class="welcome-text align-center">
                            <h2 class="widont balance-text"><?= trim($contents['about']['heading']) ?></h2>
                            <?= trim($contents['about']['subheading']) ?>
                        </div>
                    </div>
                </a>
            </div>

            <div class="fullscreen recent-projects" id="projects">
                <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                    <?php if(trim($contents['projects']['background_image']) !== '') { ?>
                    <div class="recent-img slide-image object-cover">
                        <img src="<?= base_url('assets/mainsite/images/recent-project.jpg') ?>"
                             class="landscape-image lazyload"
                             alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                             data-src="<?= base_url('assets/uploads/'.$contents['projects']['background_image']) ?>"/>
                    </div>
                    <?php } ?>
                    <div class="recent-project-full">
                        <div class="recent-project-section align-center">
                            <h2><?= trim($contents['projects']['heading']) ?></h2>
                        </div>

                        <div class="recent-project-section">
                            <?= trim($contents['projects']['subheading']) ?>
                        </div>
						<button onclick="location.href ='<?= base_url('projects') ?>';" class="btn-recent btn-more">More Projects</button>
                    </div>
                </a>
            </div>
            <a class="anchor" id="testimonials"></a>
            <div class="fullscreen testimonials">
                <div class="testi-img slide-image object-cover">
                    <img src="<?= base_url('assets/mainsite/images/img-5.jpg') ?>" class="landscape-image lazyload" alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto" data-src="<?= base_url('assets/uploads/'.$contents['testimonial']['background_image']) ?>"/>
                </div>
                <div class="testimonial-bg">
                    <div class="wrap text-wrap align-center">
                        <img src="<?= base_url('assets/mainsite/images/fancy-divider-top.png') ?>" alt="" width="274" height="36">
                        <div id="carouselExampleIndicators" class="carousel slide testimonial-slider" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?= trim($contents['testimonial']['heading']) ?>
                                </div>
                                <div class="carousel-item">
                                    <?= trim($contents['testimonial']['subheading']) ?>
                                </div>
                                <div class="carousel-item">
                                    <?= trim($contents['testimonial']['extra']) ?>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <img src="<?= base_url('assets/mainsite/images/fancy-divider-bottom.png') ?>" alt="" width="274" height="36">
						<button type="button" class="btn-testimonial btn-more">View More</button>
                    </div>
                </div>
            </div>

            <div class="fullscreen contact-us" id="contact">
                <div class="fixed-wrap fixed" data-clear-cookies data-cover="20321">
                    <div class="contact-img slide-image object-cover">
                        <img src="<?= base_url('assets/mainsite/images/08.jpg') ?>" class="landscape-image lazyload" alt="Contact" data-id="20318" data-sizes="auto" data-src="<?= base_url('assets/uploads/'.$contents['contactus']['background_image']) ?>"/>
                    </div>
                    <div class="contact-section">
						<h4><?= $contents['contactus']['heading']; ?></h4>
						<div class="contact-section-full">
							<div class="contact-map">
								<div class="mapouter">
									<div class="gmap_canvas">
										<iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Old County Road, Belmont, CA 94002 650-592-1943 fax&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
									</div>
								</div>
							</div>
							<div class="jsd-contact-form">
                                <?= $contents['contactus']['subheading']; ?>
								<form class="form-contact">
									<div class="form-group">
										<input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" required="">
									</div>
									<div class="form-group">
										<input type="text" id="email" name="email" class="form-control" value="" placeholder="Email" required="">
									</div>
									<div class="form-group">
										<input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone">
									</div>
									<div class="form-group">
										<textarea class="form-control" rows="6" id="message" name="message" placeholder="Message" required=""></textarea>
									</div>
									<button type="submit" name="submit" class="btn btn-primary btn-submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- #content-wrap -->
			<div class="fullscreen jsd-footer" id="footer">
                <div class="fixed-wrap fixed" data-clear-cookies data-cover="20321">
					<div class="content-footer">
                        <?= $contents['footer']['heading']; ?>
					</div>
					<footer class="main-footer concrete-bg black-text body-copy">
                        <?= $contents['footer']['subheading']; ?>
					</footer>
				</div>
			</div>
		</div>
        <div class="safari-fix" id="safari-fix"></div>
        </section>
    </div>
    <!-- #content -->
</div>
<script>
	function redirect(url) {
		window.location.href = url;
	}
</script>
<?php
	echo view('common/main_site_footer.php');
?>