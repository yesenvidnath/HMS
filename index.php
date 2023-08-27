<?php
  include('template-parts/header.php');
?>
    <section class="nav-section">
        <!-- Navigation Bar -->
        <div class="container-fluid ">
            <nav class="navbar navbar-expand-lg navbar-light navbar-main-padding nav-conain-main">
                
            <img src="./img/logo.png" alt="" class="logo-img">
            <div class="container-fluid">
                  <button 
                
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
                    >

                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-0 text-center">

                        <li class="nav-item" >
                            <a class="nav-link" href="#" id="nav-item-1">Home</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="#" id="nav-item-2">About</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="#" id="nav-item-3">Services</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="#" id="nav-item-4">Testimonials</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="#" id="nav-item-5">Portfolio</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="#" id="nav-item-6">Contacts</a>
                        </li>
                    
                    </ul>
                  </div>

                  <!-- login Switch -->

                    <button onclick="document.getElementById('id01').style.display='block'" class="login-btn">Login</button>
                    <?php
                     include('template-parts/modal/modal.php');
                    ?>
                </div>
            </nav>
        </div>
    </section>

<!-- Hero Section -->
<section class="hero-section">
    <div class="bg-img">
    <img src="./img/bg.jpg" alt="" class="main-head-img">
        <div class="text-secion-main">

            <h2 id="hero-head">Welcome To</h2>
            <h3 id="hero-sub">Arogya Hospital</h3>

        </div>
    </div>
</section>

<section class="our-teams-section">
    <div class="container-fluid">
        <div class="col-md-8 offset-md-2 text-section ">

            <h2 id="body-sec-head">Our Teams Are Here</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
        </div>

        <!-- Card Section -->

        <div class="card-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 col-style-main">
                        <div class="card">
                            <img src="./img/card-img-1.png" alt="Card Image First" class="">
                            <div class="bottom-half">

                                <h4 class="card-title">Hugo Silva</h4>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-4 col-style-main">
                        <div class="card">
                            <img src="./img/card-img-2.png" alt="Card Image First" class="">
                            <div class="bottom-half bg-color-bottom-half">

                                <h4 class="card-title">Imanol Arias</h4>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-style-main">
                        <div class="card">
                            <img src="./img/card-img-3.png" alt="Card Image First" class="">
                            <div class="bottom-half">

                                <h4 class="card-title">Javier Bardem</h4>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
  include('template-parts/footer.php');
?>