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
    <div class="content" id="content" data-pagename="JSD Construction Kundig — A collaborative global design practice whose work expands the context of built and natural landscapes.">
        <section class="hero home-hero offblack-bg white-text" id="home-hero">
            <?php foreach ($projects as $project) :?>
                <div class="fullscreen recent-projects" id="projects">
                    <a href="javascript:void(0);" class="fixed-wrap fixed" data-clear-cookies data-cover="20318">
                        <?php if(trim($project['project_image']) !== '') { ?>
                            <div class="recent-img slide-image object-cover">
                                <img src="<?= base_url('assets/mainsite/images/recent-project.jpg') ?>"
                                     class="landscape-image lazyload"
                                     alt="photo of Costa Rica Treehouse" data-id="20318" data-sizes="auto"
                                     data-src="<?= base_url('assets/uploads/'.$project['project_image']) ?>"/>
                            </div>
                        <?php } ?>
                        <div class="recent-project-full">
                            <div class="recent-project-section align-center">
                                <h2><?= trim($project['title']) ?></h2>
                            </div>

                            <div class="recent-project-section">
                                <?= trim($project['details']) ?>
                            </div>
                            <button onclick="location.href ='<?= base_url('details/'.$project['project_id']) ?>';" class="btn-recent btn-more">Detail View</button>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
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
<?php
	echo view('common/main_site_footer.php');
?>