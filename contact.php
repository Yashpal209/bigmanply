<!doctype html>
<html lang="en">

<head>
    <title> Contact Us | Bigmanply </title>
    <?php include 'include/headerlink.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>
    <div class="banner shadow">
        <img src="img/banner.png" class="img-fluid w-100" alt="Banner Image">
        <h2>Contact us</h2>
    </div>

    <main>

        <section class="form  py-5">
            <div class="container ">
                <div class="row p-2">
                    <div class="col-md-4 m-0 p-0">
                        <div class="form-section shadow">
                            <form action="action.php" method="POST">
                                <div class="mb-2">
                                    <label class="form-label">Your Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Email *</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Phone *</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Mobile No" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Subject </label>
                                    <input type="text" name="subject" class="form-control" placeholder="Enter Your Subject" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea name="messages" class="form-control" placeholder="Tell us about your needs"></textarea>
                                </div>
                                <button type="submit" name="contactus" class="btn btn-primary">Submit Inquiry</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 m-0 p-0 d-flex  justify-contant-center align-items-center ">
                        <div class="info-section shadow  w-100">
                            <h3 class="fw-bold">Get In Touch </h3>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <img class="rounded-circle img-fluid hover-zoom width-50 " src="img/icons/email-file.gif" alt="">
                                    <h3>Email</h3>
                                    <p><img src="img/icons/chat.png" width="8%" class="img-fluid rounded-circle" alt="Email">info@bigmanpaly.com</p>
                                </div>
                                <div class="col-md-4 ">
                                    <img class="rounded-circle img-fluid hover-zoom width-50 " src="img/icons/incoming-call.gif" alt="">
                                    <h3>Phone</h3>
                                    <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> +91 7004515210 </p>
                                    <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> +91 9162425039 </p>
                                </div>
                                <div class="col-md-4 ">
                                    <img class="rounded-circle img-fluid hover-zoom width-50" src="img/icons/icons8-location.gif" alt="">
                                    <h3>Address</h3>
                                    <p>Near Kamlesh Dubey Chowk, Ratu, Pirra, Jharkhand 835222</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58585.79486933635!2d85.15252974863279!3d23.40224319999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4df000205067d%3A0x71397a21ddd1fdc9!2sSri%20Sidhivinayak%20%26%20Co.!5e0!3m2!1sen!2sin!4v1741178627085!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </main>
    <?php include 'include/footer.php' ?>
</body>

</html>