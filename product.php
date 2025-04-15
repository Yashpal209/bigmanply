<!doctype html>
<html lang="en">

<head>
    <title> Products | Bigmanply </title>
    <?php include 'include/headerlink.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>
    <div class="banner shadow">
        <img src="img/banner.png" class="img-fluid w-100" alt="Banner Image">
        <h2>Products</h2>
    </div>

    <main>
        <section class=" bg-light py-2">
            <div class="container">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Products</a></li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="category py-5">
            <div class="container text-center">
                <h2>Explore Our Categories</h2>
                <p>Find the best home products tailored for you.</p>
                <div class="row text-center">
                    <div class="col-md-3 my-4">
                        <div class="card  shadow p-3">
                            <img src="img/categories/1.png" class="img-fluid rounded" alt="Doors" style="max-width: 100%;">
                            <h5 class="mt-3">Doors</h5>
                            <a href="door.php" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/2.png" class="img-fluid rounded" alt="Plywoods" style="max-width: 100%;">
                            <h5 class="mt-3">Plywoods</h5>
                            <a href="plywood.php" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/13.png" class="img-fluid rounded" alt="Doors Ply" style="max-width: 100%;">
                            <h5 class="mt-3">WPC Doors </h5>
                            <a href="pdf/Kaka-Profile-Door-Catalogue.pdf" target="_blank" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/4.png" class="img-fluid rounded" alt="Luvar" style="max-width: 100%;">
                            <h5 class="mt-3">Louvers</h5>
                            <a href="pdf/Kaka-Stretta-Charcoal-Louvers-V-1.pdf" target="_blank" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/5.png" class="img-fluid rounded" alt="Door Locks" style="max-width: 100%;">
                            <h5 class="mt-3">Door Locks</h5>
                            <a href="lock.php" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/6.png" class="img-fluid rounded" alt="Hardware Products" style="max-width: 100%;">
                            <h5 class="mt-3">Hardware Products</h5>
                            <a href="pdf/hardware.pdf" target="_blank" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/7.png" class="img-fluid rounded" alt="Kitchen cabinetry" style="max-width: 100%;">
                            <h5 class="mt-3">Kitchen Cabinetry</h5>
                            <a href="kitchan.php" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                    <div class="col-md-3 my-4">
                        <div class="card shadow p-3">
                            <img src="img/categories/8.png" class="img-fluid rounded" alt="Wardrobes" style="max-width: 100%;">
                            <h5 class="mt-3">Wardrobes</h5>
                            <a href="wardrobes.php" class="btn btn-primary w-100"> See More Products</a>
                        </div>
                    </div>
                </div>

                <!-- <div class="row text-center">
                    <div class="col-md-12">
                        <a href="product.php" class="btn btn-dark">See More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="contact-section py-5 bg-light">
            <div class="container text-center">
                <h2 class="mb-3">Get in Touch</h2>
                <p class="mb-4">For any inquiries about our services, feel free to contact us directly.</p>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow p-3">
                            <h5 class="mb-2">📞 Call Us</h5>
                            <p><a href="tel:+919162425039" class="text-dark text-decoration-none">+91 9162425039</a>
                                <a href="tel:+917004515210" class="text-dark text-decoration-none">+91 7004515210</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3">
                            <h5 class="mb-2">📧 Email Us</h5>
                            <p><a href="mailto:info@bigmanply.com" class="text-dark text-decoration-none">info@bigmanply.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3">
                            <h5 class="mb-2">📍 Visit Us</h5>
                            <p>123 Business Road, Jharkhand, India</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="https://wa.me/917004515210" class="btn btn-success gg"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </section>

    </main>
    <?php include 'include/footer.php' ?>
</body>

</html>