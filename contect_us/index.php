<?php include '../layouts/header-link.php' ?>
<?php include '../layouts/header.php' ?>

<main>
    <section class="aboutus_page py-5">
        <div class="container_fluid inner_section py-4 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="heading text-center mb-3 d-block"><span class="fs-xl-50 fs-md-40 fs-sm-30  fs-25 fw-bold text-white inner_contant inner_heading">Contect Us</span></div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex  justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo f_path ?>" class="text-white fw-bold">Home</a></li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page">Contect Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contect_page my-5">
        <div class="container-fluid py-md-5 inner_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 border-0 rounded p-3 card bg-light shadow">
                        <div class="col-12 row mx-0 py-4">
                            <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                                <a href="mailto: fantasy@gmail.com" class="card cr_btn contect_card h-100 shadow w-100 py-4 border-0 text-dark">
                                    <div class="card-body">
                                        <div class="text-center mb-2"><span><i class="imgs img-envelope-open fs-40"></i></span></div>
                                        <h6 class="card-subtitle mb-2 text-center fs-md-18 fs-16"><span>Customer Support Email</span></h6>
                                        <div class="text-center fs-md-16 fs-14"><span>fantasy@gmail.com</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                                <a href="https://wa.me/1800 1200 1500" class="card cr_btn contect_card h-100 shadow w-100 py-4 border-0 text-dark">
                                    <div class="card-body">
                                        <div class="text-center mb-2"><span><i class="imgb img-whatsapp-square fs-40"></i></span></div>
                                        <h6 class="card-subtitle mb-2 text-center fs-md-18 fs-16"><span>+91 1800 1200 1500</span></h6>
                                        <div class="text-center fs-md-16 fs-14"><span>10:00 am to 7:00 pm ( Mon - Fri )</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                                <a href="#" class="card cr_btn contect_card h-100 shadow w-100 py-4 border-0 text-dark">
                                    <div class="card-body">
                                        <div class="text-center mb-2"><span><i class="imgs img-map-marker-alt fs-40"></i></span></div>
                                        <h6 class="card-subtitle mb-2 text-center fs-md-18 fs-16"><span>Address</span></h6>
                                        <div class="text-center fs-md-16 fs-14"><span>Shreenath Nagar, College Road, Nimbahera Rajasthan</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include '../layouts/footer.php' ?>
    <?php include '../layouts/footer-link.php' ?>
</main>
<script>
    $(function() {
        $('.header').addClass('Header_inner');
    });
</script>