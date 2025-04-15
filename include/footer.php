<footer class="shadow  footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="img/shortlogo.png" class="rounded" width="30%" alt="Bigmanpaly Logo">
                <p style="text-align:justify;margin-top:20px">
                    Bigmanply brings you the finest in home interior designs, furniture, and décor solutions.
                    Transform your space with our expertly curated collections and innovative design ideas.
                    Elevate your home with style and functionality, crafted just for you!
                </p>
                <a href="#"><img src="img/icons/facebook.png" width="8%" alt="Facebook"></a>
                <a href="#"><img src="img/icons/instagram.png" width="9%" alt="instagram"></a>
            </div>

            <div class="col-md-2">
                <h3><p class="footer-link d-inline" href="#">Our Product</p></h3>
                <p><a href="door.php">Doors</a></p>
                <p><a href="lock.php">Door Locks</a></p>
                <p><a href="PlyWood.php">PlyWood</a></p>
                <p><a href="kitchan.php">Kitchen Cabinetry</a></p>
            </div>

            <div class="col-md-2">
                <h3><p class="footer-link d-inline" href="#">Quick Links</p></h3>
                <p><a href="index.php">Home</a></p>
                <p><a href="product.php">Product</a></p>
                <p><a href="services.php">Services</a></p>
                <p><a href="about.php">About Us</a></p>
                <p><a href="contact.php">Contact Us</a></p>
            </div>

            <div class="col-md-4">
                <h3><p class="footer-link d-inline" href="#">Contact Us</p></h3>
                <p class="text-white">Subscribe to Our Newsletter</p>
                <div class="input-group py-3">
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Email" aria-describedby="subscribe-btn">
                    <a class="btn btn-primary" id="subscribe-btn">Subscribe</a>
                </div>
                <p><img src="img/icons/chat.png" width="8%" class="img-fluid rounded-circle" alt="Email"> Email: info@bigmanpaly.com</p>
                <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> Phone: +91 7004515210 </p>
                <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> Phone: +91 9162425039 </p>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-start">
                    © 2025 Bigmanply. All Rights Reserved.
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms & Conditions</a> 
                    <br>
                    Designed by <a href="https://www.jharkhanditservices.com/" target="_blank">Jharkhand IT Services</a>
                </p>
            </div>

        </div>
    </div>
</footer>

<div class="floating-icons">
    <a href="mailto:info@bigmanpaly.com" class="call-icon"><img src="img/icons/email-file.gif" class="img-fluid rounded-circle" alt="Email"></a>
    <a href="tel:9162425039" class="msg-icon"><img src="img/icons/incoming-call.gif" class="img-fluid rounded-circle" alt="Phone"></a>
</div>

<a href="https://wa.me/917004515210" class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
</a>
<button id="topBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
<script>
    window.onload = function() {
        setTimeout(() => {
            document.getElementById("preloader").style.display = "none";
        }, 1000); 
    };
</script>


<script>
    let topBtn = document.getElementById("topBtn");
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }
    };

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            var dropdowns = document.querySelectorAll(".dropdown-item.dropdown-toggle");

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener("click", function (event) {
                    event.stopPropagation(); // Prevent parent dropdowns from closing
                    let nextMenu = this.nextElementSibling;
                    if (nextMenu && nextMenu.classList.contains("dropdown-menu")) {
                        nextMenu.classList.toggle("show");
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener("click", function (event) {
                document.querySelectorAll(".dropdown-menu.show").forEach(function (openMenu) {
                    if (!openMenu.parentElement.contains(event.target)) {
                        openMenu.classList.remove("show");
                    }
                });
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            480: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1440: {
                slidesPerView: 4,
            }
        }
    });
    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            425: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });
</script>
<script>
    var swiper = new Swiper(".about-slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            425: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 6,
            }
        }
    });
</script>
<!-- <script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent page refresh
    alert('Thank you! Your message has been submitted.');
    this.reset(); // Clear form after submission
}); -->
</script>