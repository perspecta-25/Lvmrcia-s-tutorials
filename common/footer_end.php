<section class="contactform-section text-center" id="psvideos">
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h3 class="text-white mb-5">Contact us!</h3>
            <form action = "submit.php" method="POST">
            <label for="name" style="color: white;">Name:</label><br />
            <input type ="text" id="name" name="name" class="form-control mb-3" placeholder="Enter your name..." required><br />
            <label for="email" style="color: white;">Email:</label><br />
            <input type="email" id="email" name="email" class="form-control mb-3" placeholder="Enter your email..." required><br />
            <label for="message" style="color: white;">Message:</label><br />
            <textarea id="message" name="message" class="form-control mb-3" placeholder="Enter your message..." rows="4" required></textarea><br />
                <div class="row input-group-newsletter">
                    <div class="col-auto">
                      <button class="btn btn-primary enabled" id="submitButton" type="submit">Submit!</button>
                    </div>
                </div>
                <p id="responseMsg"></p>
        </div>
    </div>
</div>
</section>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Address</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50">Veliko Turnovo, Bulgaria</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <i class="fas fa-envelope text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Email</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50"><a href="#!">ani.galinova@gmail.com</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Phone</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50">+0 (359) 878709690</div>
                </div>
            </div>
        </div>
    </div>
    <div class="social d-flex justify-content-center">
        <a class="mx-2" href="https://www.tiktok.com/@lvmrcia"><i class="fab fa-tiktok"></i></a>
        <a class="mx-2" href="https://www.instagram.com/lvmrcia/"><i class="fab fa-instagram"></i></a>
    </div>
</div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">&copy; Website 2025</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
