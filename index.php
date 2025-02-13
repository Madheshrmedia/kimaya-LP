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

        .banner {
            display: block;
        }

        .mob-banner {
            display: none;
            padding: 0px;
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

            .banner {
                display: none;
            }

            .mob-banner {
                display: block;
                padding: 0px;
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

            .tis_test_col {
                margin-top: 30px !important;
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

        .navbar-toggler {
            background: white;
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

                    <span><img src="./image/bars-solid.svg" width="20" height="20" /></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#Transformations">Transformation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#faqframe">FAQ</a>
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
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title">Book an Appointment</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-11 mx-auto">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="email" placeholder="Full name"
                                            required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="email" placeholder="Enter Phone No"
                                            required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="email" placeholder="Full name"
                                            required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="date" class="form-label">Choose Branch</label>

                                        <select class="form-select " aria-label="Default select example"
                                            id="validationCustom04" required>
                                            <option value="Anna nagar">Anna nagar</option>
                                            <option value="Adyar">Adyar</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a location
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="message" class="form-label">Type your skin concern</label>
                                        <textarea name="message" class="form-control" rows="3" cols="" id=""></textarea>
                                    </div>


                                    <div class="col-md-6  mt-3">
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

    <!-- mobile banner -->
    <div class="container-fluid mob-banner">
        <img src="./image/mobban.webp" class="img-fluid" alt="best clinic ">
    </div>

    <!-- Ultimate Transformation Package -->
    <div class="container my-5" id="service">
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

    <div class="container my-5" id="Transformations">
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

    <div class="container-fluid my-5 this_testimonial" id="testimonial">
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
<!-- ---start FAQ frame------------ -->
<div class="container" id="faqframe">
    <h1>FAQ’s</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Laser Hair Removal
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>1. Is laser hair removal permanent?</strong>
                    <p>Laser hair removal significantly reduces hair growth, and in many cases, results in permanent
                        hair reduction. However, occasional maintenance sessions may be needed.</p>
                    <strong>2. How many sessions do I need for best results?</strong>
                    <p>Most clients require 6-8 sessions depending on hair type, skin tone, and the area being treated.
                    </p>
                    <strong>3. Does laser hair removal hurt?</strong>
                    <p>The treatment is virtually painless, with only a mild warming sensation. Advanced cooling
                        technology ensures maximum comfort.</p>
                    <strong>4. Is it safe for all skin types?</strong>
                    <p>Yes! Our laser technology is safe and effective for all skin tones and hair types.</p>
                    <strong>5. Are there any side effects?</strong>
                    <p>Temporary redness or slight swelling may occur but usually subsides within a few hours.</p>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Is microblading painful?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What should I expect after the treatment?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    Is microblading safe for all skin types??
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #faqframe {
        margin: 3rem auto;
    }

    .accordion {
        margin-top: 3rem;
    }

    .accordion-button:not(.collapsed) {
        background-color: #DDAB07;
        box-shadow: none;
        color: #FFFFFF;
        font-size: 25px;
        font-weight: 600;
    }

    .accordion-body {
        font-size: 19px;
    }

    .accordion-button {
        font-size: 25px;
    }
</style>
<!-- ---end FAQ frame------------ -->
<!-- ---start counter frame------------ -->
<div class="background-container" id="counterframe">
    <div class="content">
        <div class="row">
            <div class="column" id="colunm1">
                <p style="visibility:hidden">Offer Expires in</p>
                <h1 class="text">Special Discount</h1>
                <button type="button" class="btn btn-secondary" id="limitbutton">Limited Time Only!</button>
            </div>
            <div class="column" id="colunm2">
                <p>Offer Expires in</p>
                <div class="clock-container">
                    <div class="clock-col" style="display:none">
                        <div class="clock-days clock-timer">&nbsp;</div>
                        <div class="clock-label label-days">
                            Days
                        </div>
                    </div>
                    <div class="clock-col">
                        <div class="clock-hours clock-timer">&nbsp;</div>
                        <div class="clock-label label-hour">
                            Hours
                        </div>
                    </div>
                    <div class="clock-col">
                        <div class="clock-minutes clock-timer">&nbsp;</div>
                        <div class="clock-label label-minutes">
                            Minutes
                        </div>
                    </div>
                    <div class="clock-col">
                        <div class="clock-seconds clock-timer">&nbsp;</div>
                        <div class="clock-label label-seconds">
                            Seconds
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" id="bookbutton">Book an Appointment</button>
                </div>

            </div>

        </div>
    </div>
</div>
<style>
    .clock-container {
        position: relative;
        display: flex;
        gap: 51px;
        justify-content: center;
        border-radius: 8px;
        color: #FFFFFF;
        background-color: #000000;
        margin: auto;
        padding: 3rem;

        width: 75%;
    }

    #bookbutton {
        position: absolute;
        padding: 12px 15px;
        width: 70%;
        bottom: -18px;
        left: 50%;
        transform: translateX(-50%);
        color: #FFFFFF;
        background-color: #DDAB07;
        text-transform: uppercase;
        border-radius: 0px;
        border: none;

    }

    .clock-timer {
        font-size: 55px;
        font-weight: bold;
    }

    #colunm2 {
        text-align: center !important;
    }

    #colunm2 p {
        font-size: 28px;
    }

    .text {
        font-size: 60px;
    }

    /* Parent container with background image */
    .background-container {
        background: url('./image/timerbanner.webp') no-repeat center center/cover;
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    /* Inner content */
    #counterframe .content {
        width: 98%;
        max-width: 1200px;

        padding: 20px;

    }

    /* Row styling */
    #counterframe .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    /* Column styling */
    #counterframe .column {
        flex: 1;
        min-width: 250px;
        padding: 20px;

        text-align: left;
    }

    #limitbutton {
        padding: 13px 16px;
        margin-top: 2rem;
        background-color: #FFF4D6;
        color: #122132;
        border: 1px solid #000000;
        font-weight: bold;
    }

    #colunm1 {
        font-weight: bold;
    }

    .clock-label {
        color: #FFC877;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        #counterframe .row {
            flex-direction: column;
        }

        .text {
            font-size: 40px;
        }

        .clock-timer {
            font-size: 35px;
        }
    }
</style>
<!-- ---end counter frame------------ -->

<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-3 footer-cardfirst">
                <img src="./image/kimaya_logo.png" class="img-fluid footer-logo" alt="">
                <p class="footer-logo-cont my-4">
                    Take the first step towards achieving your beauty goals with expert care at Kimaya Clinique
                </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn ">
                    Book an Appointment
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
            const message = document.querySelector('textarea[name="message"]').value;
            const location = document.querySelector('select').value;


            // Validate required fields
            if (!name) {
                alert("Please enter your full name.");
                return;
            }

            if (!phone) {
                alert("Please enter your phone number.");
                return;
            } else if (!/^\d{10}$/.test(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return;
            }

            if (!date) {
                alert("Please select a date.");
                return;
            }

            if (!location) {
                alert("Please select a valid location.");
                return;
            }

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
            const whatsappMessage = `This appointment is from the Landing Page.\n\nHello, I would like to confirm my appointment. \n\nName: ${name}\nPhone: ${phone}\nDate: ${date}\nMessage: ${message}\nLocation: ${location}`;

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
<script>
    window.onload = function () {
        const controller = new AbortController();
        // Set the date we're counting down to
        const countDownDate = new Date("Feb 27, 2026 08:30:00").getTime();
        const clockDaysElement = document.querySelector(".clock-days");
        const clockHoursElement = document.querySelector(".clock-hours");
        const clockMinutesElement = document.querySelector(".clock-minutes");
        const clockSecondsElement = document.querySelector(".clock-seconds");
        // Create an animation callback every second:
        animationInterval(1000, controller.signal, (time) => {
            // Get today's date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the results
            clockDaysElement.textContent = days;
            clockHoursElement.textContent = hours;
            clockMinutesElement.textContent = minutes;
            clockSecondsElement.textContent = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                controller.abort();
                document.querySelector(".clock-container").innerHTML = "EXPIRED";
            }
        });
    };

    function animationInterval(ms, signal, callback) {
        // Prefer currentTime, as it'll better sync animtions queued in the
        // same frame, but if it isn't supported, performance.now() is fine.
        const start = document.timeline
            ? document.timeline.currentTime
            : performance.now();

        function frame(time) {
            if (signal.aborted) return;
            callback(time);
            scheduleFrame(time);
        }

        function scheduleFrame(time) {
            const elapsed = time - start;
            const roundedElapsed = Math.round(elapsed / ms) * ms;
            const targetNext = start + roundedElapsed + ms;
            const delay = targetNext - performance.now();
            setTimeout(() => requestAnimationFrame(frame), delay);
        }

        scheduleFrame(start);
    }

</script>

</html>