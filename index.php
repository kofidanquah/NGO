<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .info {
            background-color: rgb(190, 190, 190);
        }

        .living {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/background\ 1.avif');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 600px;
        }

        .living p {
            font-size: 38px;
            font-family: "Poppins", sans-serif;
            animation: 1s ease-out 0s 1 slideInLeft;
        }

        h4 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .col-md-4:hover {
            background-color: rgb(250, 250, 240);
            cursor: pointer;
        }

        img .d-block {
            width: max-content;
            height: max-content;
        }

        .carousel {
            width: max-content;
            height: max-content;
            z-index: 1;
        }

        .carousel-item {
            width: max-content;
            height: 10%;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .image-wrapper {
            width: 12rem;
            margin: 0.4rem;
            overflow: hidden;
        }

        .team-image {
            width: 200px;
            height: 150px;
            backface-visibility: hidden;
            transition: all 0.5s;
        }

        .team {
            /* display: flex; */
            /* flex-wrap: wrap; */
            background-color: rgb(84, 95, 113);
            width:max-content;
        }

        .team-image:hover {
            transform: scale(1.3);
            opacity: 0.8;
        }

        
        @keyframes slideInLeft {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0%);
            }
        }

        .text {
            animation: slideInLeft 2s ease-in-out;
        }

        
    </style>
    <title>NGO</title>
</head>

<body>
        <header class="header">
        <?php include("include/header.php"); ?>
            </header>
            
        <div class="container-fluid text-white living ">
            <div class="text">
                <p>Your Support is Powerful.</p>
                <p>Together we can change the World</p>
                <h5>Join us to make a change in the lives of others.</h5>
            </div>
        </div>
        <br><br>
        
        <div class="row container-fluid info">
            <div class="col-md-4">
                <a>
                    <div class="p-4 text-center text-dark hover-bg-white hover-shadow rounded mb-4 transation-3s">
                        <h5 class=" hover-text-success py-3 m-0"><i class="fa fa-building-o"></i> Projects</h5>
                        <p>All Projects and plans set for the year</p>
                    </div>
                </a>
            </div>
    
            <div class="col-md-4">
                <a>
                    <div class="p-4 text-center text-dark hover-bg-white hover-shadow rounded mb-4 transation-3s">
                        <h5 class=" hover-text-success py-3 m-0"><i class="fa fa-calendar"></i> Events</h5>
                        <p>Upcoming events and their locations</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="contact.php">
                    <div class="p-4 text-center text-dark hover-bg-white hover-shadow rounded mb-4 transation-3s">
                        <h5 class=" hover-text-success py-3 m-0"><i class="fa fa-phone"></i> Contact Us</h5>
                        <p>Reach us via phone, address or you can send us your messages via email</p>
                    </div>
                </a>
            </div>
        </div>
        <br><br>
        
        <!-- carousel -->
        <div id="demo" class="carousel container-fluid slide col-sm-8" data-bs-ride="carousel">
            
            <div class="carousel-indicators container-fluid">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
    
            <div class="carousel-inner container-fluid">
                <div class="carousel-item active">
                    <img src="images/img_5terre_wide.jpg" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/img_5terre_wide.jpg" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/img_5terre_wide.jpg" class="d-block img-fluid">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        
        <br><br>
        <hr>
        <!-- Partners -->
        <div class="container-fluid partners" id="partners">
            <h4>Our Partners</h4>
            <div class="row">
                <div class="col-lg-3">
                    <img src="images/unicef.png" class="partner" alt="unicef">
                </div>
                <div class="col-lg-3">
                    <img src="images/WHO.png" class="partner" alt="WHO">
                </div>
                <div class="col-lg-3">
                    <img src="images/gender.jpeg" class="partner" alt="Gender ministry">
                </div>
                <div class="col-lg-3">
                    <img src="images/ges.png" class="partner" alt="GES">
                </div>
            </div>
        </div>
        
        <!-- Team -->
        <div class="row container-fluid team">
            <h4>Our Team</h4>
            <div class="col-sm-3">
                <div class="image-wrapper p-4 text-center">
                    <img class="team-image" src="images/wallpaper4.jpg">
                    <p>This is a dummy text<br>. Just some random words...</p>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="image-wrapper p-4 text-center">
                    <img class="team-image" src="images/sunset.png">
                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="image-wrapper p-4 text-center">
                    <img class="team-image" src="images/background.jpg">
                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                    
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="image-wrapper p-4 text-center">
                    <img class="team-image" src="images/img_5terre_wide.jpg">
                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                </div>
            </div>
            
            <a href="#"> + SEE MORE</a>
        </div>
        
        <!-- footer -->
        <?php include("include/footer.php"); ?>
        
    </body>
    
    </html>