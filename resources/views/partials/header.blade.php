
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Wibday</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="bulltheme">

    <link rel="shortcut icon" href="images/favicon.ico"><!-- Favicon Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"><!-- Google Fonts -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}"><!-- plugins Css -->
    <link rel="stylesheet" href="{{asset('css/fonts-icons.css')}} "><!-- Font Icons Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"><!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/helper.css')}}"><!-- Helper Css -->
</head>
<body>

    <!-- Start PreLoader
    ================================================== -->
    <div id="pre-loader" class="pre-loader">
        <div class="cube-wrapper">
            <div class="cube-folding">
                <span class="leaf1"></span>
                <span class="leaf2"></span>
                <span class="leaf3"></span>
                <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Loading</span>
        </div>
        <div class="pre-loader-logo"><a href="/"><img src="{{asset('images/logos.png')}}" alt=""></a></div>
    </div>
    <!-- End PreLoader
    ================================================== -->

    <!-- Start Header
    ================================================== -->
    <header class="header">
        <nav class="navbar navbar-expand-lg p-0 navbar-custom">
            <div class="header-logo">
              <a href="/"><img src="{{asset('images/logos.png')}}" alt=""></a>
            </div>
            <div class="header-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link page-scroll" href="/">Accueil <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="#services">Agence</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="#faq">Service</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="#portfolio">Nos Références</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll btn-hire-me btn-blue text-center text-white ml-lg-10 mr-lg-10" href="#hire-us">Postuler</a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link header-follow" href="#SocialIcon"><span class="ti-sharethis"></span></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link js-fr-offcanvas-open" aria-controls="offcanvas-2" href="#OffCanvas"><span class="ti-more-alt"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="header-social d-flex align-items-center">
                <ul class="list-unstyled mb-0 list-inline header-social-inner">
                    <li class="list-inline-item d-none d-sm-inline-block">Follow Us:</li>
                    <li class="list-inline-item"><a href="#"><span class="d-none d-md-inline-block">Facebook</span><i class="fab fa-facebook-f ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="#"><span class="d-none d-md-inline-block">Twitter</span><i class="fab fa-twitter ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="#"><span class="d-none d-md-inline-block">Instagram</span><i class="fab fa-instagram ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="#"><span class="d-none d-md-inline-block">Linkedin</span><i class="fab fa-linkedin-in ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="#"><span class="d-none d-md-inline-block">Youtube</span><i class="fab fa-youtube ml-2"></i></a></li>
                </ul>
                <a class="header-follow-close d-flex justify-content-center align-items-center" href="#"><span class="ti-close"></span></a>
            </div>
            <div class="mobile-menu d-md-block d-lg-none">
                <a class="header-follow d-flex justify-content-center align-items-center" href="#"><span class="ti-sharethis"></span></a>
                <a class="d-flex justify-content-center align-items-center js-fr-offcanvas-open" aria-controls="offcanvas-2" href="#"><span class="ti-more-alt"></span></a>
                <a class="navbar-toggler d-flex justify-content-center align-items-center" data-toggle="collapse" href="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </div>
        </nav>

        <!-- Start offcanvas -->
        <div class="fr-offcanvas js-fr-offcanvas bg-white" id="offcanvas-2">
            <button type="button" class="btn btn-black btn-block w-100 fr-offcanvas-close js-fr-offcanvas-close fr-offcanvas-close-btn"><span class="ti-close mr-2"></span>Close</button>
            <div class="row text-center mb-30">
                <div class="col-lg-12">
                    <h2 class="text-black fw-3">Get in touch today</h2>
                </div>
                <div class="col-lg-12">
                    <p>It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate</p>
                </div>
            </div>
            <form class="needs-validation mb-50" method="post" action="contact.php">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="messages"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <div class="position-relative">
                                <input type="text" name="name" class="form-control" required="required" data-error="Name is required.">
                                <label>Name<span class="text-danger">*</span></label>
                                <span class="focus-border bg-blue"></span>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <div class="position-relative">
                                <input type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                <label>Email<span class="text-danger">*</span></label>
                                <span class="focus-border bg-blue"></span>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <div class="position-relative">
                                <input type="tel" name="phone" class="form-control">
                                <label>Phone</label>
                                <span class="focus-border bg-blue"></span>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <div class="position-relative">
                                <input type="text" name="subject" class="form-control" required="required" data-error="Subject is required.">
                                <label>Subject<span class="text-danger">*</span></label>
                                <span class="focus-border bg-blue"></span>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <div class="position-relative">
                                <textarea name="message" class="form-control" rows="5" required="required" data-error="Please,leave us a message."></textarea>
                                <label>Message<span class="text-danger">*</span></label>
                                <span class="focus-border bg-blue"></span>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-send btn-blue">Send message<i class="far fa-paper-plane pl-3"></i></button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="media mb-30">
                        <span class="ti-mobile h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Customer care:</h6>
                            <p>+001 234 567 890</p>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <span class="ti-email h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Email Address:</h6>
                            <p>support@website.com</p>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <span class="ti-location-pin h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Office Address:</h6>
                            <p>4461 Cedar Street Moro, AR 72368</p>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <span class="ti-calendar h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Office Time:</h6>
                            <p>Mon - Fri 08:00 - 19:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0 social-black">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End offcanvas -->
    </header>
    <!-- End Header
    ================================================== -->