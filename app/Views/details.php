<?php
echo view('common/main_site_header.php');
?>
<header id="header" class="main-header" role="banner">
    <a href="<?= base_url('/') ?>" class="header-logo" id="header-logo">JSD</a>
    <button class="menu-button" id="menuBtn" type="button" aria-label="Menu" aria-controls="main-menu">
        <i></i>
        <i></i>
        <i></i>
    </button>
    <menu class="main-menu hide" id="mainMenu" role="navigation">
        <ul class="site-menu body-copy">
            <?php foreach ($navs as $nav) :?>
                <li><a href="#" onclick="location.href ='<?= base_url('/'.$nav['link']) ?>'"><?= $nav['title'] ?></a></li>
            <?php endforeach;?>

        </ul>
    </menu>
</header>
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
    <div class="content details-content" id="content" data-pagename="JSD Construction Kundig — A collaborative global design practice whose work expands the context of built and natural landscapes.">
        <section class="hero home-hero white-text" id="home-hero">
            <div  class="row details-section-full">
                <div class="tabs">
                    <ul id="tab-links">
                        <li><a href="#exteriors" class="active" title="Exteriors">Exteriors</a></li>
                        <li><a href="#interiors" title="Interiors">Interiors</a></li>
                        <li><a href="#kitchens" title="Kitchens">Kitchens</a></li>
                        <li><a href="#bathrooms" title="Bathrooms">Bathrooms</a></li>
                    </ul>

                    <section id="exteriors" class="active">
                        <div class="fullscreen recent-projects" id="projects">
                            <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                                <div class="recent-img slide-image object-cover">
                                    <img src="<?= base_url('assets/mainsite/images/08.jpg')?>"
                                         class="landscape-image lazyload"
                                         alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                                         data-src="<?= base_url('assets/mainsite/images/08.jpg')?>"/>
                                </div>
                            </a>
                        </div>
                        <div class="fullscreen recent-projects" id="projects">
                            <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                                <div class="recent-img slide-image object-cover">
                                    <img src="<?= base_url('assets/mainsite/images/02.jpg')?>"
                                         class="landscape-image lazyload"
                                         alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                                         data-src="<?= base_url('assets/mainsite/images/02.jpg')?>"/>
                                </div>
                            </a>
                        </div>
                        <div class="fullscreen recent-projects" id="projects">
                            <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                                <div class="recent-img slide-image object-cover">
                                    <img src="<?= base_url('assets/mainsite/images/14.jpg')?>"
                                         class="landscape-image lazyload"
                                         alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                                         data-src="<?= base_url('assets/mainsite/images/14.jpg')?>"/>
                                </div>
                            </a>
                        </div>
<!--                        <div id="jsdCarousel" class="carousel slide" data-ride="carousel">-->
<!--                            <ol class="carousel-indicators">-->
<!--                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--                            </ol>-->
<!--                            <div class="carousel-inner">-->
<!--                                <div class="carousel-item active">-->
<!--                                    <img class="carousel-img" src="--><?//= base_url('assets/mainsite/images/16.jpg') ?><!--" alt="First slide" data-src="--><?//= base_url('assets/mainsite/images/16.jpg') ?><!--">-->
<!--                                </div>-->
<!--                                <div class="carousel-item">-->
<!--                                    <img class="carousel-img" src="--><?//= base_url('assets/mainsite/images/17.jpg')?><!--" alt="Second slide" data-src="--><?//= base_url('assets/mainsite/images/17.jpg')?><!--">-->
<!--                                </div>-->
<!--                                <div class="carousel-item">-->
<!--                                    <img class="carousel-img" src="--><?//= base_url('assets/mainsite/images/18.jpg')?><!--" alt="Third slide" data-src="--><?//= base_url('assets/mainsite/images/18.jpg')?><!--">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                                <span class="sr-only">Previous</span>-->
<!--                            </a>-->
<!--                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                                <span class="sr-only">Next</span>-->
<!--                            </a>-->
<!--                        </div>-->
                    </section>

                    <section id="interiors">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/20.jpg')?>" alt="First slide" data-src="<?= base_url('assets/mainsite/images/20.jpg') ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/21.jpg')?>" alt="Second slide" data-src="<?= base_url('assets/mainsite/images/21.jpg') ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/22.jpg')?>" alt="Third slide" data-src="<?= base_url('assets/mainsite/images/22.jpg') ?>">
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
                    </section>

                    <section id="kitchens">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/02.jpg')?>" alt="First slide" data-src="<?= base_url('assets/mainsite/images/02.jpg') ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/05.jpg')?>" alt="Second slide" data-src="<?= base_url('assets/mainsite/images/05.jpg') ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="<?= base_url('assets/mainsite/images/07-min.jpg')?>" alt="Third slide" data-src="<?= base_url('assets/mainsite/images/07-min.jpg') ?>">
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
                    </section>

                    <section id="bathrooms">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="fullscreen recent-projects" id="projects">
                                        <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                                                <div class="recent-img slide-image object-cover">
                                                    <img src="<?= base_url('assets/mainsite/images/08.jpg')?>"
                                                         class="landscape-image lazyload"
                                                         alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                                                         data-src="<?= base_url('assets/mainsite/images/08.jpg')?>"/>
                                                </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url('assets/mainsite/images/13.jpg')?>" alt="Second slide" data-src="<?= base_url('assets/mainsite/images/13.jpg') ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url('assets/mainsite/images/14.jpg')?>" alt="Third slide" data-src="<?= base_url('assets/mainsite/images/14.jpg') ?>">
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
                    </section>
                </div>
            </div>

            <!-- #content-wrap -->
<!--			<div class="fullscreen jsd-footer" id="footer">-->
<!--                <div class="fixed-wrap fixed" data-clear-cookies data-cover="20321">-->
<!--					<div class="content-footer">-->
<!--                        --><?//= $contents['footer']['heading']; ?>
<!--					</div>-->
<!--					<footer class="main-footer concrete-bg black-text body-copy">-->
<!--                        --><?//= $contents['footer']['subheading']; ?>
<!--					</footer>-->
<!--				</div>-->
<!--			</div>-->
		</div>
        <div class="safari-fix" id="safari-fix"></div>
        </section>
    </div>
    <!-- #content -->
</div>
<?php
	echo view('common/main_site_footer.php');
?>