<header class="shadow bg-white sticky-top ">
    <div class="container ">
        <div class="row g-0 gg">
            <div class="col-6 col-md-2">
                <a href="index.php" class=" align-items-center">
                    <img src="img/logo.png" class="logo" width="100%" alt="Home Furniture Logo">
                </a>
            </div>
            <div class="col-sm-6 col-md-8 hide navvv">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto fw-bold">
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Products</a>
                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="door.php">Door</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="wooden.php">Wooden Doors</a></li>
                                                <li><a class="dropdown-item" href="glass.php">Glass Doors</a></li>
                                                <li><a class="dropdown-item" href="metal.php">Metal Doors</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="plywood.php">Plywoods</a></li>
                                        <li><a class="dropdown-item" href="G20-doors-ply.pdf">Doors Ply</a></li>
                                        <li><a class="dropdown-item" href="pdf/Kaka-Profile-Door-Catalogue.pdf">WPC Doors</a></li>
                                        <li><a class="dropdown-item" href="pdf/PVC-FLUTED-WALL-&-CEILING-PANEL.pdf">PVC Fluted Wall & Ceiling Panel</a></li>
                                        <li><a class="dropdown-item" href="pdf/KAKA-PVC-Laminate.pdf">PVC Laminate</a></li>
                                        <li><a class="dropdown-item" href="pdf/Kaka-Stretta-Charcoal-Louvers-V-1.pdf">Stretta Charcoal Louver</a></li>
                                        <li><a class="dropdown-item" href="pdf/Kaka-Larga-Charcoal-Louvers-V-2.pdf">Larga Charcoal Louver</a></li>
                                        <li><a class="dropdown-item" href="pdf/KAKA-PVC-SOLID-PLY-CATALOG-NEW.pdf">Solid Ply</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Addition Products</a>
                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                        <li><a class="dropdown-item" href="lock.php">Door Lock</a></li>
                                        <li><a class="dropdown-item" href="pdf/hardware.pdf">Hardware</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=" col-6 col-md-2 mmmmm ">
                <button class="btn btn-dark mobile-nav mt-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-xl fa-bars"></i></button>
                <a type="button" class="btn btn-primary hide mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> Enquiry Now</a>
            </div>
        </div>

    </div>
</header>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header ">
        <h5 class="btn btn-light" id="offcanvasRightLabel">Menu</h5>

        <div class="col-6 col-md-2 bg-white rounded"> 
            <a href="index.php" class=" align-items-center">
                <img src="img/logo.png" class="logo" width="100%" alt="Home Furniture Logo">
            </a>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="list-group-item"><a href="about.php" class="text-decoration-none">About Us</a></li>

            <li class="list-group-item dropdown">
                <a href="#" class="dropdown-toggle text-decoration-none" id="productsDropdown" data-bs-toggle="dropdown">
                    Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                    <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="door.php" id="submenuDoor">Door</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="product.php?type=wooden">Wooden Doors</a></li>
                            <li><a class="dropdown-item" href="product.php?type=glass">Glass Doors</a></li>
                            <li><a class="dropdown-item" href="product.php?type=metal">Metal Doors</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="product.php">Plywoods</a></li>
                    <li><a class="dropdown-item" href="product.php">WPC Doors</a></li>
                    <li><a class="dropdown-item" href="product.php">WPC Frames</a></li>
                    <li><a class="dropdown-item" href="product.php">WPC Sheets</a></li>
                    <li><a class="dropdown-item" href="product.php">Louver</a></li>
                    <li><a class="dropdown-item" href="product.php">Setrin Ply</a></li>
                </ul>
            </li>

            <!-- Additional Products Dropdown -->
            <li class="list-group-item dropdown">
                <a href="#" class="dropdown-toggle text-decoration-none" id="additionalProductsDropdown" data-bs-toggle="dropdown">
                    Additional Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="additionalProductsDropdown">
                    <li><a class="dropdown-item" href="products.php?category=sofa">Door Lock</a></li>
                    <li><a class="dropdown-item" href="products.php?category=table">Hardware</a></li>
                </ul>
            </li>

            <li class="list-group-item"><a href="services" class="text-decoration-none">Services</a></li>
            <li class="list-group-item"><a href="contact.php" class="text-decoration-none">Contact</a></li>
        </ul>
        <div class="offcanvas-footer">
            <!-- <h6>Contact Us</h6> -->
            <p class="mb-1"><img src="img/icons/chat.png" width="8%" class="img-fluid rounded-circle" alt="Email"> Email: info@bigmanpaly.com</p>
            <p class="mb-1"><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> Phone: +91 7004515210 </p>
            <p class="mb-1"><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> Phone: +91 9162425039</p>
            <p><i class="bi bi-geo-alt"></i> 123, Main Street, City</p>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Get a Free Consultation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-section">
                    <form id="contactForm">
                        <div class="mb-2">
                            <label class="form-label">Your Name *</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Phone *</label>
                            <input type="text" class="form-control" placeholder="Enter Your Mobile No">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" placeholder="Tell us about your needs"></textarea>
                        </div>
                        <button type="submit" class="btn btn-black">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>