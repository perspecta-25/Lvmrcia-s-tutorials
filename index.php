    <?php
    include 'common/header_start.php';
    include 'common/header_end.php';
    include 'common/navbar.php';
    ?>
   
    <main>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text">After Effects and Photoshop</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, understandable, easy guide to using AE and PS.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Edit professionaly with Adobe</h2>
                    <p class="text-white-50">
                        Adobe After Effects is the go-to software for creating motion graphics and visual effects. With its intuitive interface and advanced capabilities, you can create eye-catching animations and effects that will take your projects to the next level.
                        Adobe Photoshop is the industry standard for editing images and creating graphics. With its powerful tools and features, you can create stunning visuals for your website or project. </p>
                </div>
            </div>
            <img class="img-fluid" src="/assets/img/ipad.png" alt="..." />

        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid project-img" style="max-width: 700px; max-height: 500px;" src="/assets/img/ae.png" alt="..." />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4><a href="after_effects.php" style="color: inherit;">After Effects</a></h4>
                        <p class="text-black-50 mb-0">Adobe After Effects is a powerful motion graphics and visual effects software used for creating animations, compositing, and cinematic visual effects. It allows users to animate text, apply complex transitions, simulate particles, and integrate 3D elements into video projects, making it essential for video editors and motion designers.</p>
                    </div>
                </div>
            </div>
            <!-- Featured Project 2 Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4><a href="photoshop.php" style="color: inherit;">Photoshop</a></h4>
                        <p class="text-black-50 mb-0">Adobe Photoshop is a versatile image editing tool designed for photo manipulation, graphic design, and digital painting. It offers advanced tools for retouching, compositing, layer-based editing, and working with typography, enabling artists and designers to create detailed and professional-quality visuals.</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <img class="img-fluid project-img" style="max-width: none; max-height: 500px;" src="/assets/img/photoshop.png" alt="..." />
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="/assets/img/demo-image-01.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Before</h4>
                                <p class="mb-0 text-white-50">Before touching up sharpness, brightness & contrast and applying any filters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="/assets/img/demo-image-02.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">After</h4>
                                <p class="mb-0 text-white-50">After touching up sharpness, brightness & contrast and applying Magicfilters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <?php
        include 'common/footer_start.php';
        ?>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <?php
        include 'common/footer_end.php';
        ?>
    </section>
    </body>

    </html>