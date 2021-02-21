<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JSD Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($active_link == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?= ($active_link == 'navbar') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('navs-list') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Manage Navbar</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= ($active_link == 'content') ? 'active' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="<?= ($active_link == 'content') ? true : false ?>" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Page Content</span>
        </a>
        <div id="collapsePages" class="collapse <?= (in_array($active_link, ['footer','contactus','testimonial','projects','about','home'])) ? 'show' : '' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($active_link == 'home') ? 'active' : '' ?>" href="<?= base_url('content/edit-content/home') ?>">Home</a>
                <?php foreach($left_navs as $left_nav) : ?>
                    <a class="collapse-item <?= ($left_nav['nav_type'] == $active_link) ? 'active' : '' ?>" href="<?= base_url('content/edit-content/'.$left_nav['nav_type']) ?>"><?= $left_nav['title'] ?></a>
                <?php endforeach;?>
                <a class="collapse-item <?= ($active_link == 'footer') ? 'active' : '' ?>" href="<?= base_url('content/edit-content/footer') ?>">Footer</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->