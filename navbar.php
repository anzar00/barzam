<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

    <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <?php
        if ($isHome) {
          echo "<li><a class='nav-link scrollto active' href='#hero'>Home</a></li>";
        } else
          echo "<li><a class='nav-link scrollto' href='./index.php#hero'>Home</a></li>";
        ?>
        <li><a class="nav-link scrollto" href="./index.php#about">About</a></li>
        <li><a class="nav-link scrollto" href="./index.php#menu">Our Services</a></li>
        <li><a class="nav-link scrollto" href="./index.php#specials">Our Tarrif</a></li>
        <?php
        if ($isGallery) {
          echo "<li><a class='nav-link scrollto active' href='./gallery.php#hero'>Gallery</a></li>";
        } else
          echo "<li><a class='nav-link scrollto' href='./gallery.php'>Gallery</a></li>";
        ?>
        <li><a class="nav-link scrollto" href="./index.php#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
    <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book Rooms</a>

  </div>
</header>
<!-- End Header -->