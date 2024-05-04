
<div id="header" class="container-fluid header-transparent" style="<?php echo $page == 1 ? 'position:fixed!important;transition: all 0.5s;color: white;' :''; ?>">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <a href="<?= $BASE; ?>"><img src="<?= $BASE; ?>assets/img/code.png">Work.me</a>
    </div>

    <div id="navbar" class="navbar">
    <ul>
        <li class="waves-effect waves-light"><a class="nav-link <?= $page==1 ? "active" : ""?>" href="<?=$BASE;?>">Home</a></li>
        <li class="waves-effect waves-light"><a class="nav-link <?= $page==2 ? "active" : ""?>" href="<?=$BASE;?>about-us/">About Us</a></li>

        <li class="waves-effect waves-light"><a class="nav-link <?= $page==5 ? "active" : ""?>" href="<?=$BASE;?>contact-us/">Contact Us</a></li>
    </ul>
      <i class="bi bi-list mobile-nav-toggle" data-bs-toggle="offcanvas" data-bs-target="#navbarr"></i>
    </div>
      <!-- .navbar -->
      <div class="offcanvas offcanvas-end nav-bar" id="navbarr" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-3">
          <h3 class="offcanvas-title">Menu</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link <?= $page==1 ? "active" : ""?>" href="<?=$BASE;?>">Home</a>
          </li>
    
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle fw-normal <?= $page==2 || $page==7 || $page==8 ? "active" : ""?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About us
            </a>
            <ul class="dropdown-menu shadow position-static">
              <li><a class="nav-link <?= $page==2 ? "active" : ""?> dropdown-item" href="<?=$BASE; ?>about-us">About Us</a></li>
              <li><a class="nav-link <?= $page==7 ? "active" : ""?> dropdown-item" href="<?=$BASE;?>awards">Awards</a></li>
              <li><a class="nav-link <?= $page==8 ? "active" : ""?> dropdown-item" href="<?=$BASE;?>careers">Careers</a></li>
            </ul>
          </li>
            <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==3 ? "active" : ""?>" href="<?=$BASE;?>news-events">News and Events</a></li>
            <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==4 ? "active" : ""?>" href="<?=$BASE;?>products">Products</a></li>
            <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==5 ? "active" : ""?>" href="<?=$BASE;?>brochures">Brochures</a></li>
            <li class="nav-item waves-effect waves-light "><a class="nav-link <?= $page==6 ? "active" : ""?>" href="<?=$BASE;?>contact-us">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
