<?php
$isHome = false;
$isGallery = true;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gallery | Barzam Resorts</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include 'header.php' ?>

</head>

<body>

    <?php include 'topbar.php' ?>

    <?php include 'navbar.php' ?>

    <main id="main">
        <section class="breadcrumbs mt-50">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Gallery</h2>
                    <ol>
                        <li><a href="index.php">Barzam</a></li>
                        <li>Gallery</li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="inner-page">

            <div class="container">

                <section id="gallery" class="gallery">

                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Gallery</h2>
                            <p>Some photos from Our Resort</p>
                        </div>
                    </div>

                    <div class="container-fluid">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/car/2.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/3.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/4.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/5.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/6.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/7.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/8.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/9.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/10.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/11.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/12.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/13.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/14.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/15.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/16.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/17.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/18.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/car/19.webp" class="d-block w-100" alt="...">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                    </div>

                    <!-- <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                        <div class="row g-0">

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/1.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/1.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/2.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/2.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/3.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/3.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/4.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/4.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/5.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/5.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/6.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/6.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/7.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/7.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/8.webp" class="gallery-lightbox" data-gall="gallery-item">
                                        <img src="assets/img/gallery/8.webp" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div> -->
                </section>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include 'footer.php' ?>

</body>

</html>