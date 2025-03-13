<header class="shadow bg-white sticky-top ">
    <div class="container p-2 overflow">
        <div class="row align-items-center">
            <div class="col-md-3 col-6 ">
                <a href="index.php" class=" align-items-center">
                    <img src="img/logo.png" class="logo" width="100%" alt="Home Furniture Logo">
                </a>
            </div>

            <div class="col-md-6 hide">
                <div class="row g-2">
                    <div class="col-md-8">
                        <a><img src="img/icons/chat.png" width="8%" class="img-fluid rounded-circle" alt="Email"> info@bigmanpaly.com</a><br>
                        <a><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> (+91) 98765 43210 </a>
                    </div>
                    <div class="col-md-4 pt-2 align-items-center ">
                        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Enqury Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 text-end">
                <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-xl fa-bars"></i></button>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="btn btn-light" id="offcanvasRightLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="about" class="text-decoration-none">About Us</a></li>
            <li class="list-group-item dropdown">
                <a href="#" class="dropdown-toggle text-decoration-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="products.php?category=sofa">Doors</a></li>
                    <li><a class="dropdown-item" href="products.php?category=sofa">Sofas</a></li>
                    <li><a class="dropdown-item" href="products.php?category=table">Tables</a></li>
                    <li><a class="dropdown-item" href="products.php?category=chair">Chairs</a></li>
                </ul>
            </li>
            <li class="list-group-item dropdown">
                <a href="#" class="dropdown-toggle text-decoration-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Addition Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="products.php?category=sofa">Door Lock</a></li>
                    <li><a class="dropdown-item" href="products.php?category=table">Hardware</a></li>
                </ul>
            </li>
            <li class="list-group-item"><a href="services" class="text-decoration-none">Services</a></li>
            <li class="list-group-item"><a href="contact.php" class="text-decoration-none">Contact</a></li>
        </ul>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Get a Free Interior Consultation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-section">

                    <form>
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
                            <textarea class="form-control" placeholder="Tell us about your interior needs"></textarea>
                        </div>
                        <button type="submit" class="btn btn-black">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>