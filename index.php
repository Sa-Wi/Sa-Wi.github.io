<!DOCTYPE html>
<html lang="en">
<?php require 'layouts/head.php'; ?>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- navbar -->
    <?php require 'layouts/navbar.php'; ?>
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Discover the Best of Bali with Dharma Ayuning Bali Tour</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Book your dream Bali vacation with us today</p>
                    <a href="https://api.whatsapp.com/send?phone=6281999496371&text=Hi,%20I%20am%20interested%20in%20booking%20a%20tour%20to%20Bali.%20Can%20you%20please%20provide%20me%20more%20information%3F" target="_blank" rel="noopener noreferrer" class="btn btn-success"><i class="fab fa-whatsapp"></i> Book Now via WhatsApp</a>

                </div>
            </div>
        </div>
    </div>


    <!-- content -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary"><?php echo $NAMA_PERUSAHAAN ?></span></h1>
                    <p class="mb-4">Dharma Ayuning is a travel agency based in Bali, Indonesia. We specialize in providing customized tour packages to our clients, tailored to their individual preferences and interests. Our team is made up of experienced and knowledgeable travel experts who are passionate about showcasing the beauty and culture of Bali to visitors from all over the world. With a commitment to providing exceptional service and unforgettable experiences, Dharma Ayuning is your trusted partner for your next adventure in Bali.</p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Exclusive Balinese Cultural Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Luxury Private Villas & Resorts</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personalized Itineraries & Activities</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Top-notch Transportation & Airport Services</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Professional & Knowledgeable Tour Guides</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Customer Support & Assistance</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/tanah-lot-bali.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Tanah Lot</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/ubud.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Ubud</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/pantai-jimbaran.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Jimbaran</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/mendaki-gunung-batur.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Batur</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center" id="packages-list">
            </div>
        </div>
    </div>
    <div class="text-center mt-2 wow fadeInUp" ta-wow-delay="2">
        <a href="packages.php" class="btn btn-primary btn-lg">See More</a>
    </div>

    <!-- Package End -->



    <!-- footer -->
    <?php require 'layouts/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?php require 'layouts/js.php' ?>
</body>

</html>