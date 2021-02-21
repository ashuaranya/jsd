<a class="skip-to-content" href="#content">Skip to Content</a>
<header id="header" class="main-header" role="banner">
    <a href="index.html" class="header-logo" id="header-logo">JSD</a>
	<button class="menu-button" id="menuBtn" type="button" aria-label="Menu" aria-controls="main-menu">
		<i></i>
		<i></i>
		<i></i>
	</button>
    <menu class="main-menu hide" id="mainMenu" role="navigation">
        <ul class="site-menu body-copy">
            <?php foreach ($navs as $nav) :?>
                <li><a href="<?= $nav['link'] ?>"><?= $nav['title'] ?></a></li>
            <?php endforeach;?>

        </ul>
    </menu>
</header>
