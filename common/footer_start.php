<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
            <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- Email address input-->
                <div class="row input-group-newsletter">
                    <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                    <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                </div>
                <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3 mt-2 text-white">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, please confirm through your email address. <br />
                        <br />

                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                </div>
            </form>
        </div>
    </div>
</div>
