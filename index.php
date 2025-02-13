<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimaya Clinique</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/KimayaFavicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- count api -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.umd.js"></script>



    <style>
        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Black.otf') format('opentype');
            font-weight: 900;
            /* Black */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Bold.otf') format('opentype');
            font-weight: 700;
            /* Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-.otf') format('opentype');
            font-weight: 400;
            /* Book */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-Italic.otf') format('opentype');
            font-weight: 400;
            /* Book Italic */
            font-style: italic;
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Medium.otf') format('opentype');
            font-weight: 500;
            /* Medium */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Semi-Bold.otf') format('opentype');
            font-weight: 600;
            /* Semi-Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Thin.otf') format('opentype');
            font-weight: 100;
            /* Thin */
        }

        * {
            font-family: 'Magenta' !important;
        }

        body {
            overflow-x: hidden;
        }

        #headerall {
            background: #000000 !important;
            z-index: 7;
            position: relative;
        }


        .header .navbar .navbar-nav .nav-item .nav-link {
            color: #ffffff;
            font-size: 18px;
        }

        .header {
            padding: 0px;
        }

        .header-cont a {
            margin-right: 15px;
            /* Adjust spacing as needed */
        }

        .header-cont a:last-child {
            margin-right: 0;
            /* Removes margin from the last item */
        }

        .header-logo {
            width: 150px;
        }

        .getstart {
            color: white !important;
        }

        .topbar {
            background-color: #162F33;
        }

        /* .header-logo {
            width: 70px;
            height: 70px;
        } */

        .header-icon {
            width: 40px;
            margin-right: 10px;
        }

        .contact-info {
            color: black;
            text-decoration: none;
        }

        .contact-info p {
            margin: 0;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 8px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 10px 25px;
            background: #DDAB07;
            color: white;
            /* margin-left: 30px; */
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            margin-right: 30px;
            font-weight: 300;
        }

        /* .navbar-brand {
            display: none;
        } */

        .header-icon {
            width: 25px;
        }

        h2,
        h4,
        h5 {
            font-weight: 500 !important;
        }

        @media only screen and (max-width: 600px) {


            /* .navbar-brand {
                display: block;
            } */

            .navbar {
                padding: 5px !important;
                background: #040404;
            }

            .navbar-toggler {
                border-color: white;
                margin-right: 10px;
            }

            .nav-container {
                padding: 0px;
            }

            .navbar-collapse {
                padding: 10px 30px;
            }

            .header-cont {
                display: block !important;
            }

            .contact-info {
                margin-bottom: 25px;
            }

            .booknow-btn {
                margin-left: 0px;
            }

            .pop_upicon {
                display: none !important;
            }

            .modal-title {
                font-size: 28px !important;
            }

            .pop_upimg {
                display: none !important;
            }

            .header-cont {
                display: none !important;
            }


        }

        .pop_upicon {
            width: 180px;
        }

        .modal-title {
            font-size: 34px;
        }

        .span_title {
            color: #DDAB07;
        }

        .position-relative {
            position: relative;
        }

        .icon-select {
            left: 15px;
            /* Adjust as needed */
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            /* Adjust icon size */
            color: #6c757d;
            /* Optional: set icon color */
        }

        .form-select.ps-5 {
            padding-left: 2.5rem;
            /* Adjust padding to make space for the icon */
        }

        .btn_pop {
            background: #DDAB07;
            color: white;
        }

        .btn_pop:hover {
            background: gray;
            color: white;
        }

        .btn-close {
            margin: 0px 10px !important;
        }

        .pop_upicon {
            width: 110px;
        }

        .banner-img {
            /* margin-top: -60px; */
            padding: 0px;
        }

        .banner-head {
            line-height: 60px;
            font-size: 44px;
        }

        .banner-cont {
            font-size: 24px;
        }

        .banner-span {
            color: #F21D1D;
            font-weight: mixed;
        }

        .counter {
            font-size: 48px;
        }

        .rev-test {
            margin-top: 60px;
        }

        .ban-testi {
            margin-left: 50px;
        }

        .ban-test-cont {
            font-size: 22px;
        }

        .ban-rev {
            width: 130px;
        }

        .banner-maincont {
            position: absolute;
            margin-top: 50px;
            margin-left: 75px;
        }

        .banner-btn {
            text-decoration: none;
            padding: 14px 28px;
            background: #DDAB07;
            color: white;
            font-size: 18px;
        }

        .comp {
            width: 335px;
            padding: 7px 105px;
            margin-left: -105px;
            border-radius: 20px;
            font-size: 22px;
            text-transform: uppercase;
            background: linear-gradient(0deg, #EFD78A 0%, #FFE285 41%, #FFD243 100%);
            margin-top: 25px;
        }


        .comp-btn {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
        }

        .comp-btn-nail {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
            margin-left: 25px;
        }

        .comp-cont {
            margin-top: 40px;
        }

        .utp_head {
            font-size: 48px;
        }

        .utp_card_header {
            background: #DDAB07;
            color: white;
            font-size: 24px;
            border-color: #DDAB07;
        }

        .utp_card {
            border-color: #DDAB07;
        }

        .utp_card_body {
            font-size: 20px;
        }

        .utp_card_text {
            color: #616366;
        }

        .utp_card {
            margin-top: -65px;
        }


        .comp-card {

            padding: 7px 50px;
            /* right: -15px;
            position: absolute; */
            border-radius: 20px;
            font-size: 22px;
            text-transform: uppercase;
            background: #DDAB07;
            color: white;
            margin-top: 25px;
        }

        .comp-btn-nail_card {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
            width: 105px;
            /* margin-left: 25px; */
        }

        .comp_card_cont {
            width: 140px;
            margin-top: 40px;
            text-align: center;
        }

        .upt_card_app {
            margin-top: 40px;
        }

        .upt_sep_col {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .this_testimonial {
            background: rgba(221, 171, 7, 0.1);
        }

        .tis_test_card {
            border-radius: 15px;
            border-color: #DDAB07;
        }

        .tis_tci {
            width: 50px;
        }

        .tis_test_card_txt {
            font-size: 20px;
            color: #664A33;
        }

        .card-footer {
            background: #EFD78A;
            border-bottom-left-radius: 13px !important;
            border-bottom-right-radius: 13px !important;
        }
    </style>
</head>


<body>
    <header class="header header-sticky" id="headerall">

        <nav class="navbar navbar-expand-lg navbar-light shadow px-5 sticky-top">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="./index.php"><img src="./image/kimaya_logo.png" alt="kimaya logo"
                        class="header-logo"></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span><i class="fas fa-bars" style="color:white"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.php">Transformation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">FAQ</a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont align-items-center">

                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                            Book an Appointment
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">MAKE AN <span class="span_title">
                            APPOINMENT
                        </span></h5>
                    <img src="./image/popup.png" class="pop_upicon ms-auto" alt="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./image/popl.webp" class="img-fluid pop_upimg" alt="">
                        </div>
                        <div class="col-md-7">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="email" placeholder="Full name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="email" placeholder="Enter Phone No">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="email" placeholder="Full name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Service</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Service">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea name="message" class="form-control" rows="3" cols="" id=""></textarea>
                                    </div>
                                    <div class="col-md-6 mt-3 position-relative">
                                        <i class="fas fa-map-marker-alt position-absolute icon-select ms-3"></i>
                                        <select class="form-select ps-5" aria-label="Default select example"
                                            id="validationCustom04">
                                            <option selected>Select Location</option>
                                            <option value="Anna nagar">Anna nagar</option>
                                            <option value="Adyar">Adyar</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a location
                                        </div>
                                    </div>

                                    <div class="col-md-6 ms-auto mt-3">
                                        <button class="btn btn_pop" type="submit">Confirm Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- banner -->
    <div class="container-fluid banner">
        <div class="row">
            <img src="./image/dban.webp" class="img-fluid banner-img" alt="best aesthetic clinic">

            <div class="col-md-10 banner-maincont">
                <h1 class="banner-head">
                    Transform Your Beauty and Confidence with <br> Kimaya’s Radiant Glow Transformation Package!
                </h1>
                <p class="banner-cont py-3">
                    New year <del>New</del> ( <span class="banner-span"> <b> Gold </b></span> ) you
                </p>

                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="banner-btn">
                    Book an Appointment
                </a>


                <div class="rev-test d-flex">
                    <img src="./image/ban-rev.webp" class="ban-rev" alt="best aesthetic clinic">
                    <div class="ban-testi text-center">
                        <div id="counter" class="counter"></div>
                        <p class="ban-test-cont">
                            Transformations So Far
                        </p>
                    </div>
                </div>

                <p class="comp">
                    complimentary
                </p>

                <div class="d-flex comp-cont">
                    <p class="comp-btn">
                        PEDICURE
                    </p>
                    <p class="comp-btn-nail">
                        NAILS
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ultimate Transformation Package -->
    <div class="container my-5">
        <div class="row">
            <h1 class="utp_head ">
                What we have in this Ultimate Transformation Package?
            </h1>
            <div class="col-md-4 mt-5">
                <img src="./image/utp1.webp" class="img-fluid" alt="">
                <div class="card utp_card">
                    <div class="card-header utp_card_header text-center">
                        Laser Hair Removal
                    </div>
                    <div class="card-body utp_card_body p-4">
                        <div class="card-title utp_card_title">
                            <b>Smooth Skin, No More Shaving!</b>
                        </div>
                        <p class="card-text utp_card_text">Smooth, hair-free skin with no shaving or waxing! Our
                            pain-free laser
                            treatment reduces hair growth at the root for long-lasting results.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/utp2.webp" class="img-fluid" alt="">
                <div class="card utp_card">
                    <div class="card-header utp_card_header text-center">
                        Gluta IV Skin Glow Treatment
                    </div>
                    <div class="card-body utp_card_body p-4">
                        <div class="card-title utp_card_title">
                            <b>Brighten, Detox, and Glow from Within!</b>
                        </div>
                        <p class="card-text utp_card_text">Brighten your skin, reduce dark spots, and detox from within!
                            This treatment evens skin tone and fights signs of aging for a radiant glow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/utp3.webp" class="img-fluid" alt="">
                <div class="card utp_card">
                    <div class="card-header utp_card_header text-center">
                        Hair Regrowth Treatment
                    </div>
                    <div class="card-body utp_card_body p-4">
                        <div class="card-title utp_card_title">
                            <b>Stronger, Fuller Hair!</b>
                        </div>
                        <p class="card-text utp_card_text">Stronger, fuller hair starts here! This advanced treatment
                            nourishes your scalp, strengthens roots, and promotes healthy hair growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/utp4.webp" class="img-fluid" alt="">
                <div class="card utp_card">
                    <div class="card-header utp_card_header text-center">
                        Face Rejuvenation Therapy
                    </div>
                    <div class="card-body utp_card_body p-4">
                        <div class="card-title utp_card_title">
                            <b>Get a Natural Glow, Instantly!</b>
                        </div>
                        <p class="card-text utp_card_text">Get a youthful glow naturally! This treatment smooths fine
                            lines, improves skin texture, and restores radiance using your body’s healing power.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/utp5.webp" class="img-fluid" alt="">
                <div class="card utp_card">
                    <div class="card-header utp_card_header text-center">
                        Advanced Glow Facial
                    </div>
                    <div class="card-body utp_card_body p-4">
                        <div class="card-title utp_card_title">
                            <b>Deep Hydration & Instant Glow! </b>
                        </div>
                        <p class="card-text utp_card_text">Hydrate, refresh, and glow instantly! This deep-nourishing
                            facial targets dullness and dryness, giving you smooth, radiant skin with no downtime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5 upt_sep_col">
                <div class="upt_sep_card">
                    <p class="comp-card">
                        Complimentary Services
                    </p>
                    <div class="comp_card_cont mx-auto">
                        <p class="comp-btn mx-auto">
                            PEDICURE
                        </p>
                        <p class="comp-btn-nail_card mx-auto ">
                            NAILS
                        </p>


                    </div>
                    <div class="text-center upt_card_app">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="banner-btn">
                            Book an Appointment
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Before and After Transformations -->

    <div class="container my-5">
        <div class="row">
            <h1 class="utp_head ">
                Before and After Transformations
            </h1>

            <div class="col-md-4 mt-5">
                <img src="./image/ba1.webp" class="img-fluid" alt="best aesthetic clinic">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/ba2.webp" class="img-fluid" alt="top aesthetic clinic">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/ba3.webp" class="img-fluid" alt="top aesthetic clinic">
            </div>
            <div class="text-center mt-5">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="banner-btn">
                    Book an Appointment
                </a>
            </div>
        </div>
    </div>

    <!-- This could be you! -->

    <div class="container-fluid my-5 this_testimonial">
        <div class="row p-5">
            <h1>This could be you!</h1>

            <div class="col-md-4 my-auto tis_test_col">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/ttc1.webp" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">Having wonderful experiences with the clinic stating off
                            with my nails
                            which always i get flawless and beautiful nails by Jenni akka my saviour. Seconding about
                            skin treatments where I struggled with my acne for years didn’t find solution and not
                            believed any treatments too. But the skin peeling treatment showed my skin which I use to
                            have during my school days. Thanks kimaya!</p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci1.png" class="tis_tci" alt="">
                        <p class="ps-3">- Shruthi Chandrasekar </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 tis_test_col my-auto">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/ttc2.webp" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">I just had the most amazing facial experience! From
                            start to finish, it was pure relaxation. The esthetician was knowledgeable and tailored the
                            treatment to suit my skin type. My skin feels rejuvenated, hydrated, and so much smoother.
                            The products used were high-quality and left a lovely glow without any irritation. It’s like
                            my face got a fresh start! I highly recommend this facial to anyone looking to pamper
                            themselves and give their skin the care it deserves.</p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci2.webp" class="tis_tci" alt="">
                        <p class="ps-3">-Preethika Palaniswamy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 tis_test_col my-auto">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/ttc3.webp" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">I came to know about this place through my friend.. Came
                            here to get consultation for my skin and was super happy with their warm welcome and their
                            service . Admin Nandhini and Manager Aishwarya was soo professional and helped me with my
                            package. Highly recommended place for all your skin and hair concern .</p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci3.png" class="tis_tci" alt="">
                        <p class="ps-3">-A R M Vicky</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    footer {
        background: #122132;
    }

    .footer-cardfirst,
    .footer-cardsec,
    .footer-cardthir,
    .footer-cardfour {
        color: white;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
        padding: 0px 50px;
    }

    .footer-cardfiv {
        color: white;
        padding: 0px 50px;
    }

    .ser-head {
        font-size: 28px;
    }

    .foot-fb {
        width: 30px;
        margin-bottom: 22px;
    }

    .footer-row {
        padding-top: 50px;
    }

    .foot-serlink a {
        text-decoration: none;
        color: white;
        margin-top: 10px;
        display: inline-block;
        /* Ensure margin is applied correctly on each link */
    }

    .ser-head {
        margin: 30px 0px;
    }

    .foot-serhed,
    .foot-addhed {
        font-weight: 900;
    }

    .add-smal {
        margin-bottom: 10px;
        display: inline-block;
    }

    .end-footer {
        background: #CDB167;
    }
</style>

<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-3 footer-cardfirst">
                <img src="./image/kimaya_logo.png" class="img-fluid footer-logo" alt="">
                <p class="footer-logo-cont mt-5">
                    Take the first step towards achieving your beauty goals with expert care at Kimaya Clinique
                </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                    Book Appointment
                </a>
            </div>
            <div class="col-md-3 footer-cardsec">
                <p class="ser-det">
                    Skin | Hair | Laser | Dental | Nails
                </p>
                <h5 class="ser-head">
                    Visit the best skin clinic now!
                </h5>

                <p class="ser-time">
                    Monday - Sunday <br>
                    10:30 am- 08:30 pm
                </p>

            </div>
            <div class="col-md-2 footer-cardthir">
                <p class="foot-serhed">
                    Links
                </p>
                <div class="foot-serlink">
                    <a href="#" class="foot-alink">Service</a> <br>
                    <a href="#" class="foot-alink">Before & after</a> <br>
                    <a href="#" class="foot-alink">Testimonial</a>
                </div>
            </div>
            <div class="col-md-3 footer-cardfour">
                <p class="foot-addhed">
                    Say hello to us
                </p>
                <p class="foot-eid mt-4">
                    info@kimayaclinique.com
                </p>
                <p class="foot-add">
                    <small class="add-smal">Address</small><br>
                    No 1, First Floor, 2nd Ave, AD Block, Anna Nagar, Chennai, Tamil Nadu 600040
                    <br>
                    <br>
                    NEW NO 29, OLD NO 24, Gandhi Nagar 1st Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020
                </p>
            </div>
            <div class="col-md-1 footer-cardfiv">
                <a href="#" target="_blank"><img src="./image/fb-icon.png" class="foot-fb" alt=""></a><br>
                <a href="#" target="_blank"><img src="./image/ig-icon.png" class="foot-fb" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<section class="end-footer">
    <p class="text-center py-3 mb-0">
        © 2024-2027, All Rights Reserved
    </p>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>



    var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        loop: true, // Enable looping
        autoplay: {
            delay: 4000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".aesthetic_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });

    var swiper = new Swiper(".af_p_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }


    });


    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()


    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.btn_pop').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent form submission

            // Retrieve form values
            const name = document.querySelector('input[placeholder="Full name"]').value;
            const phone = document.querySelector('input[placeholder="Enter Phone No"]').value;
            const date = document.querySelector('input[type="date"]').value;
            const service = document.querySelector('input[placeholder="Enter Service"]').value;
            const message = document.querySelector('textarea[name="message"]').value;
            const location = document.querySelector('select').value;

            // Determine WhatsApp number based on location
            let whatsappNumber;
            if (location === "Anna nagar") {
                whatsappNumber = "+919884567000";
            } else if (location === "Adyar") {
                whatsappNumber = "+919884287000";
            } else {
                alert("Please select a valid location.");
                return;
            }

            // Construct the WhatsApp message
            const whatsappMessage = `This appointment is from the website.\n\nHello, I would like to confirm my appointment. \n\nName: ${name}\nPhone: ${phone}\nDate: ${date}\nService: ${service}\nMessage: ${message}\nLocation: ${location}`;

            // Open WhatsApp with the drafted message
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            window.open(whatsappURL, '_blank');
        });
    });


    // counter
    const counter = new countUp.CountUp('counter', 5000, {
        duration: 4,
        suffix: "+"  // Add "+" at the end of the count
    });

    if (!counter.error) {
        counter.start();
    } else {
        console.error(counter.error);
    }





</script>

</html>