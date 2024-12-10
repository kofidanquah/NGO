<?php 
require "config.php";

// all partners
$query = $conn->prepare("SELECT * FROM partners WHERE `status` = 1 ORDER BY created_at DESC");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

// all team members
$sql = $conn->prepare("SELECT * FROM team WHERE `status` = 1 ORDER BY created_at DESC");
$sql->execute();
$row = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/index.css">
    <title>NGO</title>
</head>

<body>
        <header class="header">
        <?php include "include/header.php"; ?>
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
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
    
            <div class="carousel-inner container-fluid">
                <div class="carousel-item active">
                    <img src="images/img_5terre_wide.jpg" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/image_1.jpg" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/background 1.avif" class="d-block img-fluid">
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
                <?php foreach ($data as $partner){ ?>
                    <div class="col-md-3">
                        <img src="uploads/<?php echo $partner['image'] ?>" class="partner" 
                        width="10px" height="10px" alt="logo">
                    </div>

                    <?php } ?>
                
            </div>
        </div>
        
        <!-- Team -->
        <div class="row container-fluid team">
            <h4>Our Team</h4>
            <div class="row">
                <?php foreach($row as $team){ ?>
                <div class="col-md-3">
                    <div class="p-4 text-center">
                        <img class="team-image" src="uploads/<?php echo $team['image'] ?>">
                        <h6><?php echo $team['name'] ?></h6>
                        <h6><?php echo $team['email'] ?></h6>
                        <!-- <p>This is a dummy text<br>. Just some random words...</p> -->
                    </div>
                </div>
                <?php } ?>
            </div>
            
            <a href="#"> + SEE MORE</a>
        </div>
        
        <!-- footer -->
        <?php include("include/footer.php"); ?>
        
    </body>
    
    </html>