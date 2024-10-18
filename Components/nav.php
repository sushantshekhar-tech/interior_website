

<style>
    .navbar {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 1rem;
    }
    .freya-logo img {
        max-height: 30px; /* Desired height */
        width: auto; /* Maintains aspect ratio */
    }
    .navbar-nav .nav-link {
        color: #343a40;
        font-weight: 500;
        padding: 10px 15px;
        transition: color 0.3s ease, background-color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
        color: #495057;
        background-color: #d6d6d6;
        border-radius: 15px;
    }
    .navbar-nav .fab {
        font-size: 15px;
        color: #212529;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .navbar-nav .fab:hover {
        color: #f8c291;
        transform: scale(1.1);
    }
    .navbar-toggler {
        padding: 0.5rem;
        border: none;
        outline: none;
    }
    .navbar-toggler .fa-bars {
        display: inline;
    }
    .navbar-toggler .fa-times {
        display: none;
    }
    .navbar-toggler.collapsed .fa-bars {
        display: none;
    }
    .navbar-toggler.collapsed .fa-times {
        display: inline;
    }

    @media (max-width: 991.98px) { 
        .freya-logo img {
            max-height: 35px; 
        }
    }

   
    .navbar-nav.ms-auto .nav-link {
        padding-left: 8px; 
        padding-right: 8px; 
    }
</style>

<div class="fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm mx-3 my-3 p-2 sticky-top">
            <a class="navbar-brand" href="index.php">
                <div class="freya-logo"><img src="img/snmr.png" alt="logo"></div>
            </a>
            <!-- Custom Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </button>

            <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="project.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                </ul>

                <!-- Social media icons -->
                <ul class="navbar-nav ms-auto flex-row justify-content-end">
                    <li><a class="nav-link px-2" href="https://bit.ly/SNMR-Facebbok"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a class="nav-link px-2" href="https://www.linkedin.com/company/snmrgroup/"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nav-link px-2" href="https://bit.ly/3utQ1eH"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nav-link px-2" href="https://www.instagram.com/snmrgroup?igsh=Mmg3NGF5ZzFuOWVs"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- jQuery (for handling the toggler icon) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+CpDoj0iSTeYLmpSfKE+AbpSA2XoK" crossorigin="anonymous"></script>


<script>
   
   $(document).ready(function () {
    $('.navbar-toggler').click(function () {
        $(this).toggleClass('collapsed'); 
    });
});

</script>
