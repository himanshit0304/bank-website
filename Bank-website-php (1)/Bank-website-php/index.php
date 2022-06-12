<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bank</title>
    <link rel="stylesheet" href="static/style/style.css" class="style">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/">



   
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>




    
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <style>
        body {
            font-family: 'Signika', sans-serif;
        }

        .bg-grey {
            background: #292929;
        }

        .logo-footer {
            margin-bottom: 40px;
        }

        footer {
            color: grey;
        }

        footer p,
        a {
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
        }

        footer h6 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 40px;
            position: relative;
        }

        footer h6:after {
            position: absolute;
            content: "";
            background: grey;
            width: 12%;
            height: 1px;
            left: 0;
            bottom: -20px;
        }

        .btn-footer {
            color: grey;

            text-decoration: none;
            border: 1px solid;
            border-radius: 43px;
            font-size: 13px;
            padding: 7px 30px;
            line-height: 47px;
        }

        .btn-footer:hover {

            text-decoration: none;

        }

        .form-footer input[type="text"] {
            border: none;
            border-radius: 16px 0 0 16px;
            outline: none;
            padding-left: 10px;

        }

        ::placeholder {
            font-size: 10px;
            padding-left: 10px;
            font-style: italic;
        }

        .form-footer input[type="button"] {
            border: none;
            background: #232323;
            margin-left: -5px;
            color: #fff;
            outline: none;
            border-radius: 0 16px 16px 0;
            padding: 2px 12px;
        }

        .social .fa {
            color: grey;
            font-size: 22px;
            padding: 10px 15px;
            background: #3c3c3c;
        }

        footer ul li {
            list-style: none;
            display: block;
        }

        footer ul {
            padding-left: 0;
        }

        footer ul li a {
            text-decoration: none;
            color: grey;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #f5f5f5 !important;

        }

        .logo-part {
            border-right: 1px solid grey;
            height: 100%;
        }
    </style>

</head>

<body>

    <!--Navigation Bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar lazy">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <h4><span class="nav-link-white">Bank</span></h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark text-light"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="#home"><span class="nav-link-white">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#services"><span class="nav-link-white">Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogs"><span class="nav-link-white">Blog</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#careers"><span class="nav-link-white">Careers</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact"><span class="nav-link-white">Contact Us</span></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Header-->
    <header class="mainHead " id="home">

        <div class="row">
            <!--    image block   -->
            <div class="pink col">
                <img src="static/images/img7.jpg" alt="" class="mainImage">
            </div>

            <div class="col ">
                <div class="side-text ">
                    <h3> Higher Standards</h3>
                    <p>
                        Our clients always come first. We serve them through a global network powered by partnership, integrity, and a shared purpose of advancing sustainable economic growth and financial opportunity.

                    </p>
                    <div class="buttons">

                        <a href="sections/login/signup.php" class="btn btn-outline-secondary mx-0 ml-4" id="left">Join us</a>
                        <a href="sections/login/login.php" class="btn btn-dark">
                            Log In
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </header>





    <main>
        <div class="container py-5 my-5" id="services">
            <h2 class="pb-2 border-bottom text-center">OUR SERVICES</h2>
            <div class="row g-5 py-5">

                <div class="col-md-4 d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <i class="fas fa-wallet fa-2x"></i>
                    </div>
                    <div>
                        <h2>INDIVIDUAL BANKING</h2>
                        <p>We provide one of the best individual banking services. We have skilled employees to provide you with the best Individual banking experience you need.</p>
                        <a href="#" class="btn btn-dark">
                            Explore Individual Banking
                        </a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                    <div>
                        <h2>ONLINE BANKING</h2>
                        <p>Our Online Banking services are fast and secure. You can fully rely on our services. We always try to provide you the safest online banking experience. Start with easy steps.</p>
                        <a href="#" class="btn btn-dark">
                            Start With Online Banking
                        </a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <i class="fas fa-unlock-alt fa-2x"></i>
                    </div>
                    <div>
                        <h2>SECURITY</h2>
                        <p>We provide the safest online banking platform. Our skilled staff always tries to keep your transactions and information secure from any possible threat.</p>
                        <a href="#" class="btn btn-dark">
                            Experience Security
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h2 class="display-3 fw-bold lh-1 mb-3 money ">GET MORE FROM YOUR MONEY</h2>
                    <p class="lead">We provide one of the best interest rates in the market. Also our easy loan services provides you the best option to make your dream come true</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Learn more </button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Join us</button>
                    </div>
                </div>
                <div class="col-lg-4  p-0 position-relative overflow-hidden shadow-lg">
                    <div>
                        <img class="d-block rounded-lg-3" src="static/images/money1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8  px-1 py-2">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-4">

                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold lh-1 mb-3 money ">THE FUTURE OF PAYMENT IS HERE</h2>
                    <p class="lead">With the rise in technology, we have made our banking experience completely digital. We have skilled employees tranined in latest technologies to bring the future of banking in your hands.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Learn More</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Join us</button>
                    </div>
                </div>

                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="static/images/tech.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container py-5" id="blogs">
            <h2 class="pb-2 border-bottom">EXPLORE MORE</h2>

            <div class="row row-cols-3 align-items-stretch py-5">
                <div class="col col-lg-4 col-md-6 col-sm-12" style="height: 30rem;">
                    <a href="men.php">
                        <div class="
                card card-cover
                h-100
                overflow-hidden
                text-white
                bg-dark
                rounded-5
                shadow-lg
              " style="
                background-image: url('static/images/success.jfif');
                background-position: center;
              ">
                            <div class="
                  d-flex
                  flex-column
                  h-100
                  p-5
                  pb-3
                  text-white text-shadow-1
                ">


                                <ul class="d-flex list-unstyled mt-auto">



                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>

                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12" style="height: 30rem;">
                    <a href="women.php">
                        <div class="
                card card-cover
                h-100
                overflow-hidden
                text-white
                bg-dark
                rounded-5
                shadow-lg
              " style="
                background-image: url('static/images/economy.jpg');
                background-position: center;
              ">
                            <div class="
                  d-flex
                  flex-column
                  h-100
                  p-5
                  pb-3
                  text-white text-shadow-1
                ">

                                <ul class="d-flex list-unstyled mt-auto">

                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>

                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col" style="height: 30rem;">
                    <a href="kids.php">
                        <div class="
                card card-cover
                h-100
                overflow-hidden
                text-white
                bg-dark
                rounded-5
                shadow-lg
              " style="
                background-image: url('static/images/world.png');
                background-position: center;
              ">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">

                                <ul class="d-flex list-unstyled mt-auto">

                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>

                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <section class="py-5 text-center container" id="careers">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">CAREERS</h1>
                    <p class="lead text-muted">Interested in working with us Come Join us !!
                    <p>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="static/images/students.jpg">
                            <div class="card-body">
                                <p class="card-text">We provide one of the best internship and research programs for students.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="static/images/professional.jpg">
                            <div class="card-body">
                                <p class="card-text">Whatever your skills are we have a place for you. We provide many employement opportunities to every professional out there.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="static/images/possibilities.jpg" height="280px">

                            <div class="card-body">
                                <p class="card-text">The possibilities are limitless and with creativity and innovation we are determined to create an impact. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>

    <footer id = "contact" class="container-fluid bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part">
                                
                                <p>7637 Ring road India</p>

                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> About us</h6>
                            <p>Get in touch</p>
                            <a href="#" class="btn-footer"> More Info </a><br>
                            <a href="#" class="btn-footer"> Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <h6> More Links</h6>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li> <a href="#"> Home</a> </li>
                                        <li> <a href="#"> About</a> </li>
                                        <li> <a href="#"> Service</a> </li>
                                        <li> <a href="#"> Team</a> </li>
                                        <li> <a href="#"> Help</a> </li>
                                        <li> <a href="#"> Contact</a> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 px-4">
                                    <ul>
                                       
                                        <li> <a href="#"> Fax</a> </li>
                                        <li> <a href="#"> Terms</a> </li>
                                        <li> <a href="#"> Policy</a> </li>
                                        <li> <a href="#"> Refunds</a> </li>
                                        <li> <a href="#"> Paypal</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="static/js/script.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>




    <script>
        $('.lazy').Lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });
    </script>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "cee605b5-b04c-44cf-bf98-304a85a96794", // The ID of this integration.
            region: "us-south", // The region your integration is hosted in.
            serviceInstanceID: "31ebd00c-4579-45ed-ae55-cb37621891ac", // The ID of your service instance.
            onLoad: function(instance) {
                instance.render();
            }
        };
        setTimeout(function() {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>
</body>

</html>