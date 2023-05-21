<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Dharma Ayuning</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                                                                    echo 'active';
                                                                } ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') {
                                                                    echo 'active';
                                                                } ?>">About</a>
                <a href="service.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'service.php') {
                                                                    echo 'active';
                                                                } ?>">Services</a>
                <a href="packages.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'package.php') {
                                                                    echo 'active';
                                                                } ?>">Packages</a>
                <a href="contact.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') {
                                                                    echo 'active';
                                                                } ?>">Contact</a>
            </div>

        </div>
    </nav>


</div>
<!-- Navbar & Hero End -->