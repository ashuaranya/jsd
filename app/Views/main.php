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
                    <div class="slide-image object-cover">
                        <img src="<?= base_url('assets/mainsite/images/07-min.jpg') ?>" class="landscape-image" alt="CUSTOM NEW CONSTRUCTION" data-id="20319" data-sizes="auto" srcset="" />
                        <img src="<?= base_url('assets/mainsite/images/img-1.jpg') ?>" class="portrait-image" alt="CUSTOM REMODELING & ADDITIONS" data-id="20333" data-sizes="auto" srcset="" />
                    </div>
                    <div class="slide-text over-image">
                        <div class="wrap text-wrap align-center">
                            <h1 class="widont balance-text">PROVIDING DISTINCTIVE RESIDENTIAL CRAFTSMANSHIP FOR OVER 15 YEARS</h1>
                            <p>BURLINGAME • SAN CARLOS • PALO ALTO</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="fullscreen" id="about">
                <a href="" class="fixed-wrap fixed" data-clear-cookies data-cover="16000">
                    <div class="slide-text over-image">
                        <div class="welcome-text align-center">
                            <h2 class="widont balance-text">WELCOME TO <span class="text-blue">JSD</span> CONSTRUCTION</h2>
                            <p>JSD Construction has earned its reputation for quality, honesty and attention to detail through almost two decades of hard work and determination. We bring a sense of creativity and design which makes our clients feel satisfied knowing we've realized the potential of having built something special, not just what's on the plans. We are dedicated to focusing on each client and our whole team sincerely goes the extra mile to make the job run smoothly from start to finish.</p>
                            <p>Our owner and builder, Jim Schnapp, is involved in every project and spends a great deal of time with each crew. In addition, each job has its project manager charged to keep the job running smoothly. We use cloud-based project management software that allows the homeowners visibility in scheduling, product choices, budgets and direct communication with their project manager to ensure a seamless home building experience. Our employees are highly skilled and experienced carpenters. We choose to work with only quality sub-contractors, most of which we have a long-standing working relationship with. The working relationships we have created with each vendor, sub-contractor and employee ensure your job will be done right, within budget and on time.</p>
                            <p>JSD Construction prides itself on building custom homes and remodels from Burlingame to Los Altos Hills. We strive to give our customers the best service possible on the Peninsula. We realize building a home is the biggest investment, both financially and emotionally, most people will ever undertake and we want to make the experience exciting and fun while providing the highest level of quality and communication.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="fullscreen recent-projects" id="projects">
                <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                    <div class="recent-img slide-image object-cover">
                        <img src="<?= base_url('assets/mainsite/images/recent-project.jpg') ?>" class="landscape-image lazyload" alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto" data-src="<?= base_url('assets/mainsite/images/recent-project.jpg') ?>"/>
                    </div>
                    <div class="recent-project-full">
                        <div class="recent-project-section align-center">
                            <h2>Recent Projects</h2>
                        </div>

                        <div class="recent-project-section align-center">
                            <h3>Southern Comfort</h3>
                            <p>Our latest project exudes the utmost hospitality and charm.</p>
                        </div>
						<button type="button" class="btn-recent btn-more">View More</button>
                    </div>
                </a>
            </div>
            <a class="anchor" id="testimonials"></a>
            <div class="fullscreen testimonials">
                <div class="testi-img slide-image object-cover">
                    <img src="<?= base_url('assets/mainsite/images/img-5.jpg') ?>" class="landscape-image lazyload" alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto" data-src="<?= base_url('assets/mainsite/images/img-5.jpg') ?>"/>
                </div>
                <div class="testimonial-bg">
                    <div class="wrap text-wrap align-center">
                        <img src="<?= base_url('assets/mainsite/images/fancy-divider-top.png') ?>" alt="" width="274" height="36">
                        <div id="carouselExampleIndicators" class="carousel slide testimonial-slider" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p>"When we decided to renovate our vintage 1912 home in Palo Alto we knew we needed a professional team that could handle the magnitude of our project from start to finish. We interviewed several contractors and when we met Jim Schnapp, owner of JSD Construction, we knew at once we found «our man». Every detail of the reconstruction was diligently performed. Jim Schnapp was easily accessible and when impromptu decisions had to be made, Jim was there with his expertise to efficiently resolve the issue at hand. The JSD team was responsive, knowledgeable, ethical and flexible. They were courteous and clean and they left the job site in an orderly manner each day. Jim and his crew share a common goal in making their clients happy. We are thrilled with our newly rebuilt home and wake up each morning feeling as if we are on vacation."</p>

                                    <span class="testi-author">Bill and Rose Thoits <br/>Palo Alto</span>
                                </div>
                                <div class="carousel-item">
                                    <p>"All I want to say is «A big thank you» to Jim Schnapp and the JSD crew. You guys did an amazing job. We enjoyed our new bedroom, bathroom, walk in closet and guest bathroom so much. Our remodel was a big success! JSD construction did a beautiful job in making our dream into reality. Jim and his crew are very professional and they do high quality work. All of our friends was amazed by your professional work. We will highly recommend you through mother's club and friends."</p>

                                    <span class="testi-author">Scott and Jackie Jeffries <br/>San Carlos</span>
                                </div>
                                <div class="carousel-item">
                                    <p>"JS Designs remodeled my home this year. I found this company to be time efficient, knowledgeable, trustworthy, and their craftsmanship was impeccable. JS Designs turned a nice looking home into the home of my dreams. The integrity that went into the finished product is truly amazing. From the windows, to the doors, to the tiles JS Designs installed in my home the finished product takes my breath away. I highly recommend this company to people who are remodeling, or to those who are starting from scratch. I can guarantee you will be both enthralled and breath taken by the quality of their craftsmanship and commitment to excellence."</p>

                                    <span class="testi-author">Molly Meyer<br/>San Carlos</span>
                                </div>
                                <div class="carousel-item">
                                    <p>"JS Design helped us build our dream house. From the professionalism they showed when working with the city and others involved with the project to the accuracy of the costs and timeliness presented to the fun we had working with the crew, they made what can be a challenging process at times as enjoyable as possible."</p>

                                    <span class="testi-author">Scott and Jackie Jeffries<br/>San Carlos</span>
                                </div>
                                <div class="carousel-item">
                                    <p>"JS Design Construction is an impressive company. They did a kitchen and bathroom remodel on our home recently and it turned out even more beautiful than we had hoped. We are proud to show our friends and family the finished product and everyone who has seen it just goes on and on about how beautiful everything looks. A painter friend came in and looked at the kitchen cabinets and was amazed at the quality of the work.</p>
                                    <p>With a pre-arranged appointment, we would be happy to show our home to prospective clients."</p>

                                    <span class="testi-author">Anonymous<br/>San Carlos</span>
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
                <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20321">
                    <div class="contact-img slide-image object-cover">
                        <img src="<?= base_url('assets/mainsite/images/08.jpg') ?>" class="landscape-image lazyload" alt="Contact" data-id="20318" data-sizes="auto" data-src="<?= base_url('assets/mainsite/images/08.jpg') ?>"/>
                    </div> 

                    <div class="contact-section">
						<h4>GOT A PROJECT, NEED A BID?</h4>
						<div class="contact-section-full">
							<div class="contact-map">
								<div class="mapouter">
									<div class="gmap_canvas">
										<iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Old County Road, Belmont, CA 94002 650-592-1943 fax&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
									</div>
								</div>
							</div>
							<div class="jsd-contact-form">
								<p>Whether you are just starting to think about your construction project or have already started working on it, don't hesitate to contact JSD Construction for a free consultation to learn how we can help you achieve your goals on time, on budget and with the least hassle.</p>
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
				</a>
			</div>

			<!-- #content-wrap -->
			<div class="fullscreen jsd-footer" id="footer">
                <div class="fixed-wrap fixed" data-clear-cookies data-cover="20321">
					<div class="content-footer">
						<p>From the first steps of the project we will meet and discuss your plans, needs and wants. We will work with your budget. We will provide you with a proposal which will be as complete as possible, detailing all the items specified in your plans or discussed in meetings. There will be no surprises later. All work outside of our proposal will be discussed ahead of time and agreed upon before the work begins. We guarantee fair costs. We want your complete satisfaction and will help you plan for it. You will be guided through the entire job and kept abreast of every stage of the job. You will have a project manager with whom you will be in constant contact with.</p>
					</div>
					<footer class="main-footer concrete-bg black-text body-copy">
						<div class="content-footer-bottom">
							<p>403 Old County Road,<br />
							Belmont, CA 94002<br />
							650-592-1943 fax
							</p>
							<p class="civilization">
								<a href="https://builtbycivilization.com/" title="built by Civilization">
									<svg class="civilization" id="civilization" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140.5 40.1" version="1.1" role="img" focusable="false" aria-labelledby="search-icon">
								</a>
							</p>
						</div>
						<div>
							<p>
								<a href="index.html">info@jsdconstructions.com</a><br />
								P 650-591-1902<br />
								F 650-591-1902<br />
							</p>
						</div>
						<div>
							<p>         
								<a target="_blank" href="https://www.instagram.com/JSD Constructionkundig/" rel="noreferrer">Instagram</a><br />
								<a target="_blank" href="https://twitter.com/JSD Constructionkundig" rel="noreferrer">Twitter</a><br />
								<a target="_blank" href="https://www.linkedin.com/company/93459" rel="noreferrer">LinkedIn</a><br />
							</p>
						</div>
					</footer>
				</div>
			</div>
		</div>
        <div class="safari-fix" id="safari-fix"></div>
        </section>
    </div>
    <!-- #content -->
</div>
<?php
	echo view('common/main_site_footer.php');
?>