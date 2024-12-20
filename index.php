<!doctype html>
<html lang="en">

<head>
    <title>Car Registration Website</title>
    <link rel="icon" href="img/car icon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="180">

    <!-- Navigation Bar -->

    <div id="home"></div>
    <nav class="navbar scroll navbar-expand-lg navbar-dark text-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="img/logo3.png" class="img-fluid rounded-circle" alt="logo"  width="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#register">Register</a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <div id="google_translate_element"></div>

        </div>
    </nav>

    <!-- Navigation Bar End -->

    <!-- Hero Page -->

    <div class="container-fluid background">
        <div class="container hero">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center"><i class="fas fa-car" style="color: #4feaff"></i> CAR REGISTRATION</h1>
                    <h3 class="text-center" id="motto"><img src="img/logo3.png" class="img-fluid rounded-circle" alt="logo"  width="75px"> <i id="supernova">Supernova</i>, gets to you in <b id="supernova" class=>EXPLODING</b> speed</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="special_promotion">
                        <h2 class="text-danger mt-5 font-weight-bold" id="promotion"><img src="https://www.flaticon.com/premium-icon/icons/svg/1598/1598629.svg" class="img-fluid mr-2" width="50px">Special Promotion!</h2>
                        <p class="lead">
                              50% <i class="fas fa-tag"></i> discount from 12 December 2020 until 2021!
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <a href="#register"><button class="btn btn-1 ml-lg-5">Register</button></a>
                    <a href="#about"><button class="btn btn-2">Learn More</button></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Hero Page End -->

    <!-- Whatsapp Widget -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-38f8e67b-6392-44b8-a39d-54c9721c2f86"></div>

    <!-- Register Page-->

    <div class="container-fluid mt-5 text-center" id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-5">
                    <span class="d-flex align-items-center pr-2"><i class="fas fa-asterisk"
                            style="font-size: 1.25rem"></i>
                    </span>
                    <h1 class="display-4">Register Now!</h1>
                    <span class="d-flex align-items-center pl-2" style="font-size: 1.25rem"><i
                            class="fas fa-asterisk"></i></span>
                </div>
                <div class="col-lg-12 d-flex justify-content-center mt-3">
                    <h4>Please Select <i class="far fa-check-circle text-success"></i></h4>

                </div>
            </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="card" id="card-1">
                
                <label class="text-left">
                    <div class="card-body" id="card1-body">
                    <input type="radio" name="radio1" id="myRadio" class="pr-1" value="private" checked>

                        <a id="card-link"><img src="img/car.svg" class="card-img-top img-fluid" width="90%" height="90%" ></a>
                        <h5 class="text-center pt-lg-3 font-weight-bold pb-md-4 pb-lg-0">Private Vehicle</h5>
                    </div>
                </label>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card" id="card-2">
                <label class="text-left">
                    <div class="card-body" id="card2-body">
                    <input type="radio" name="radio1" id="myRadio" value="business">
                        <a id="card-link"><img src="img/business_car.svg" class="img-fluid mx-auto d-block" width="90%" height="90%"></a>
                        <h5 class="text-center pt-lg-4 font-weight-bold pb-md-4 pb-lg-0">Business Vehicle
                            <!--<span><i class="fas fa-exclamation-circle mr-2 text-danger" id="comingSoon"></i><span
                                    class="text-danger" id="comingSoon">Not supported yet
                                </span>-->
                        </h5>
                    </div>
            </div>
            </label>
        </div>
        <div class="col-lg-1"></div>

    </div>
    <div class="row pb-5">
        <div class="col-lg-12 text-center">
            <button class="btn btn-primary mt-3 mb-3 font-size-larger btn-lg" id="quote-btn" type="button" data-toggle="modal"
                data-target="#privateForm">
                Get Free Quote
            </button>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Register Page End -->


    <!-- Register Form (Pop Up) -->
    <!-- Modal -->

    <div class="modal fade" id="privateForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="exampleModalLabel">Vehicle and
                        Owner Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action = "process.php" method="POST">
                    <div class="modal-body">
    
                        <div class="form-group">
                            <label>Full Name(As per NRIC)</label>
                            <input type="text" name="Name" class="form-control" placeholder="Theng Pei Yi" maxlength="20"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>NRIC</label>
                            <input type="number" name="nric" class="form-control" maxlength="12" placeholder="059190120194"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Vehicle Registration Number</label>
                            <input type="text" name="vrn" class="form-control" placeholder="PGA9234" maxlength="7"
                                required>
                        </div>
    
                        <label class="d-block">Is your vehicle used for e-hailing services?</label>
                        <div class="form-check d-flex ml-auto">
                            <div>
                                <input type="radio" name="e-hailing" class="form-check-input"
                                    style="cursor:pointer!important" value="Yes">
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                            <div style="margin-left: 10%!important">
                                <input type="radio" name="e-hailing" class="form-check-input"
                                    style="cursor:pointer!important" value="No" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h5 class="font-weight-bold">We will send you a Quote</h5>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="thengpy05@gmail.com"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_num" class="form-control" placeholder="0134048128"
                                maxlength="10"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Postcode(Vehicle Location)</label>
                            <input type="number" name="postcode" class="form-control" placeholder="11920" maxlength="5"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-check" style="cursor:pointer!important">
                            <a href="T&C.html" target="_blank"><input class="form-check-input" type="checkbox"
                                    style="cursor:pointer!important" id="defaultCheck1" required>
                                <label class="form-check-label" style="cursor:pointer!important">
                                    Terms & Conditions
                                </label>
                        </div></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="insertdata_private" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Business Form -->
 <div class="modal fade" id="businessForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="exampleModalLabel">Vehicle and
                        Company Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action = "process.php" method="POST">
                    <div class="modal-body">
    
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="companyName" class="form-control" placeholder="Enter Company Name" maxlength="20"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Business Registration Number</label>
                            <input type="number" name="businessRN" class="form-control" maxlength="8" placeholder="12345678"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Vehicle Registration Number</label>
                            <input type="text" name="vrn" class="form-control" placeholder="PGA9234" maxlength="15"
                                required>
                        </div>
    
                        <h5 class="font-weight-bold">We will send you a Quote</h5>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="thengpy05@gmail.com"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_num" class="form-control" placeholder="0134048128"
                                maxlength="10"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Postcode(Vehicle Location)</label>
                            <input type="number" name="postcode" class="form-control" placeholder="11920" maxlength="5"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-check" style="cursor:pointer!important">
                            <a href="T&C.html" target="_blank"><input class="form-check-input" type="checkbox"
                                    style="cursor:pointer!important" id="defaultCheck1" required>
                                <label class="form-check-label" style="cursor:pointer!important">
                                    Terms & Conditions
                                </label>
                        </div></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="insertdata_business" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Modal End -->
    <!-- Register Form End -->
    <hr>

    <!-- About -->

    <div class="container-fluid mt-5" id="about">
        <div class="row mb-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 mt-5" id="about-img">
                <img src="img/city_driver.svg" class="img-fluid mt-2">
            </div>
            <div class="col-lg-6 mt-3 d-flex flex-column justify-content-center ml-5" id="about-content">
                <h2 class="text-center">About  <span id="supernova-about"><i class="fas fa-asterisk mr-1" style="color: #ff6666;font-size: 1.35rem"></i><b style="color: #ff6666; font-weight: 800; font-size: 2.45rem;">SUPERNOVA</b><i class="fas fa-asterisk ml-1" style="color: #ff6666; font-size: 1.35rem;"></i></span></h2>

                <p class="lead mt-3" style="max-width: 1000px;"><i class="fas fa-star" style="color: #4feaff"></i> 
                Supernova is a new car registration service emerging from the dark ends of this world!<br><br><i class="fas fa-star" style="color: #4feaff"></i> Supernova is more than just a car registration platform, it offers services such as carpooling services, insurance, towing services, road tax renewing, and many more.
                    <br><br><i class="fas fa-star" style="color: #4feaff"></i> Our services are customer-centered, what the customer wants, we want it too.</p>
            </div>
            <div class="col-lg-1 mb-5"></div>

        </div>
    </div>
    <hr>
    <!-- About End -->

    <!-- Customer Review Section -->
        <div class="container-fluid">

            <h2 class="text-center pb-2 pt-4">Why Choose <i class="fas fa-asterisk mr-1" style="color: #ff6666;font-size: 1.35rem"></i><b style="color: #ff6666; font-weight: 800; font-size: 2.45rem;">SUPERNOVA</b><i class="fas fa-asterisk ml-1" style="color: #ff6666; font-size: 1.35rem;"></i></span> ?</h2>
            <h4 class="text-center pb-3">96%  Good  Reviews <i class="far fa-thumbs-up text-primary"></i> from Our Customers!</h4>
        
            <div class="row mt-4 ml-lg-5">
            <div class="col-lg-3">
                <div class="card" id="customer-review-card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img src="img/avataaars3.svg" width="50px">Quah Yee Loo</h5>
                        <p class="card-text">The best! Good service and quick response... thank you</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" id="customer-review-card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img src="img/avataaars2.svg" width="50px"> Theng Pei Yi</h5>
                        <p class="card-text">Just like Supernova! I have done my car registration in just a few minutes.</p>
                    </div>
                </div>
            </div>
                <div class="col-lg-6 d-none d-lg-block mt-sm-5"><img src="img/review.svg" class="img-fluid d-block mx-auto my-auto pt-1" alt="review" width="56%"></div>

        </div>

        <div class="row mt-3 mr-lg-5 pb-5 mb-2">
                <div class="col-lg-6"><img src="img/reviews.jpg" class="img-fluid d-block mx-auto my-auto" alt="review" width="63%"></div>

            <div class="col-lg-3">
                <div class="card" id="customer-review-card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img src="img/avataaars4.svg" width="50px">Maram Shrijan</h5>
                        <p class="card-text">Various types of service and reasonable price. Awesome!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" id="customer-review-card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img src="img/avataaars.svg" width="50px"> Ms. Teh</h5>
                        <p class="card-text">The first time using this website. Impressed by the speed of response! Recommended!</p>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        


<hr>

    <!-- Customer Review Section End -->

    <!-- Contact -->
    <div class="container-fluid mt-5 text-center" id="contact">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div id="contact_us" style="margin-right: rem!important;">
                    <h2 class="mt-5" id="contact-border"><i class="fas fa-phone-square-alt mr-2 text-primary"
                            id="contact-icon"></i>Contact Us
                    </h2>
                    <div class="d-flex justify-content-center">
                        <p class="lead text-center"><img src="img/logo3.png" width='80px;'> CAR REGISTRATION SERVICE
                        </p>
                    </div>
                    <ul class="social pt-1 pb-3 pb-lg-auto">
                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a>
                        </li>
                        <li><a href="https://messenger.com/" target="_blank"><i
                                    class="fab fa-facebook-messenger"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                    <hr>
                    <p class="lead text-left"><i class="fas fa-star" style="color: #4feaff"></i> We respond faster than the Star can Implode! <i class="fas fa-star" style="color: #4feaff"></i></p>
                    <p class="text-left pt-2"><a href="tel:+60134048128" id="contact-link"><i class="fas fa-phone-volume text-danger"></i>
                            Phone: 013-404-8128</a></p>
                    <p class="text-left"><a href="mailto:+thengpy05@gmail.com" id="contact-link"><i class="fas fa-envelope text-danger"></i>
                            Email :
                            thengpy05@gmail.com</p>
                    </a>
                    <p style="font-size: 1.2rem!important;" class="text-left"><i class="fas fa-map-marker-alt text-danger"></i> Address: 
                        Taman Widuri, 11920 Bayan Lepas, Penang</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/contact.svg" alt="contact" class="mt-5 mb-5 mx-auto" id="contact-img">
            </div>
            <div class="col-lg-1"></div>

        </div>

    </div>
    </div>
    <!-- Contact End -->

    <!-- COPY RIGHT -->
    <div class="container-fluid pb-3">
        <hr>
        <div class="d-flex justify-content-center align-items-center">
            &copy; 2020 Supernova. All rights reserved.
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="jQuery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
        // Google Translate
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }

        (function () {
            var gtConstEvalStartTime = new Date();
            function d(b) { var a = document.getElementsByTagName("head")[0]; a || (a = document.body.parentNode.appendChild(document.createElement("head"))); a.appendChild(b) } function _loadJs(b) { var a = document.createElement("script"); a.type = "text/javascript"; a.charset = "UTF-8"; a.src = b; d(a) } function _loadCss(b) { var a = document.createElement("link"); a.type = "text/css"; a.rel = "stylesheet"; a.charset = "UTF-8"; a.href = b; d(a) } function _isNS(b) { b = b.split("."); for (var a = window, c = 0; c < b.length; ++c)if (!(a = a[b[c]])) return !1; return !0 }
            function _setupNS(b) { b = b.split("."); for (var a = window, c = 0; c < b.length; ++c)a.hasOwnProperty ? a.hasOwnProperty(b[c]) ? a = a[b[c]] : a = a[b[c]] = {} : a = a[b[c]] || (a[b[c]] = {}); return a } window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () { document.readyState = "complete" }, !1);
            if (_isNS('google.translate.Element')) { return } (function () { var c = _setupNS('google.translate._const'); c._cest = gtConstEvalStartTime; gtConstEvalStartTime = undefined; c._cl = 'en'; c._cuc = 'googleTranslateElementInit'; c._cac = ''; c._cam = ''; c._ctkk = '440335.1449305758'; var h = 'translate.googleapis.com'; var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://'; var b = s + h; c._pah = h; c._pas = s; c._pbi = b + '/translate_static/img/te_bk.gif'; c._pci = b + '/translate_static/img/te_ctrl3.gif'; c._pli = b + '/translate_static/img/loading.gif'; c._plla = h + '/translate_a/l'; c._pmi = b + '/translate_static/img/mini_google.png'; c._ps = b + '/translate_static/css/translateelement.css'; c._puh = 'translate.google.com'; _loadCss(c._ps); _loadJs(b + '/translate_static/js/element/main.js'); })();
        })();

        //navbar collapse hide onclick
        $('.navbar-nav>li>a').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });


    </script>

</body>

</html>