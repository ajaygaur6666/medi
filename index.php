<?php
session_start();
$msg_error='';
if(isset($_SESSION['msg']))
{
    $msg_error=$_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Living Green Organics</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="" />
                        <span>
              Living Green Organics
            </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product.html"> Product </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="client.html"> Testimonials </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact us</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Franchise</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Careers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- hero section -->
        <section class="hero_section">
            <div class="hero_detail">
                <h1>

                    <span>
            
          </span>
                    <span>
            
          </span>
                    <span>
            LIVING GREENS ORGANIC
          </span>
                    <span>
            
          </span>
                    <span>
            
          </span>
                </h1>
                <h3>
                    Your one stop solution to urban farming
                    </h2>
            </div>
            <div class="hero_btn-box">
                <a href="">
          Contact Us
        </a>
            </div>
        </section>
        <!-- end hero section -->
    </div>
    <!-- end hero area -->


    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="about_container">
            <div class="container">
                <div class="detail">
                    <h2 class="custom_heading">
                        About Us
                    </h2>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of g it
                    </p>
                    <div>
                        <a href="">
              Read More
            </a>
                    </div>
                </div>
                <div class="detail-2">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of g it
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- end about section -->

    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="d-flex justify-content-center">
            <h2 class="custom_heading">
                Our Products
            </h2>
        </div>
        <div class="container layout_padding2">
            <div class="img-box box-1">
                <img src="images/p-1.jpg" alt="">
            </div>
            <div class="img-box box-2">
                <img src="images/p-2.jpg" alt="">
            </div>
            <div class="img-box box-3">
                <img src="images/p-3.jpg" alt="">
            </div>
            <div class="img-box box-4">
                <img src="images/p-4.jpg" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="">
        See More
      </a>
        </div>
    </section>


    <!-- end product section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="d-flex flex-column align-items-center text-center">
                <h2 class="custom_heading ">
                    Why choose Us
                </h2>
                <p class="">
                    Living Greens is India’s first and largest Urban Organic Farming company that has created innovative products to convert un-used urban spaces (rooftops, plots, gardens, farmhouses etc) into organic food producing spaces. Started with a “mad dream” of
                    converting rooftops into lush green organic farms, today Living Greens, led by PrateekTiwari and SiddharthAgarwal, has not only covered more than 100,000 square feet of rooftop space (spread over 15 cities) under urban organic farming
                    but has also developed a robust business model for creating city franchisees.
                </p>
            </div>
        </div>
        <div class="why_container my-4">
            <div class="img_box">
                <img src="images/why-img.jpg" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="">
        Read More
      </a>
        </div>
    </section>

    <!-- end why section -->



    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container">
            <div class="col-md-6">
                <div class="d-flex mb-4 ml-4 ml-md-0">
                    <h2 class="custom_heading text-center">
                        CONTACT US
                    </h2>
                </div>
                <form action="">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Pone Number" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex justify-content-center mt-4 ">
                        <button>
              SEND
            </button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <!-- end contact section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="d-flex justify-content-center">
            <h2 class="custom_heading">
                Testimonial
            </h2>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container layout_padding">
                            <div class="img_box">
                                <img src="images/client.png" alt="">
                            </div>

                            <div class="detail_box">
                                <h5>
                                    <span>
                    MORIS
                  </span>

                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding">
                            <div class="img_box">
                                <img src="images/client.png" alt="">
                            </div>

                            <div class="detail_box">
                                <h5>
                                    <span>
                    MORIS
                  </span>

                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding">
                            <div class="img_box">
                                <img src="images/client.png" alt="">
                            </div>

                            <div class="detail_box">
                                <h5>
                                    <span>
                    MORIS
                  </span>
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="container layout_padding-top  layout_padding2-bottom">
            <div class="logo-box">
                <a href="index.html">
                    <img src="images/info-logo.png" alt="">
                </a>
            </div>
            <div class="info_items">
                <a href="">
                    <div class="item ">
                        <div class="img-box box-1">
                            <img src="images/location-white.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <p>
                                <a href="https://www.google.co.in/maps/dir/26.9095931,75.818531/living+greens+organics+pvt.+ltd/@26.900228,75.7503024,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x396db4f1716dab9b:0xa433738985f76843!2m2!1d75.7510244!2d26.8846218?entry=ttu">  583/584, Nirman Nagar-AB, King's Road, Jaipur, Rajasthan 302019 
                            </p>
                        </a>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-3">
                            <img src="images/envelope-white.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <p>
                                ceo@thelivinggreens.com
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-2">
                            <img src="images/telephone-white.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <p>
                                +02 1234567890
                            </p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://thelivinggreens.com/">Living Greens Organic</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>