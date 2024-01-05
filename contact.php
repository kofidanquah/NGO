<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/contact.css">
    <title>contact us</title>
</head>

<body>
    <header class="header">
        <?php include("include/header.php"); ?>

    </header><br>
    <br><br>

    <div class="row container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-3 bg-secondary text-white px-5 p-5">
            <h3 class="text-dark">Contacts</h3>
            <br>
            <h4>
                <i class="fa fa-map-marker"></i>
                Address
            </h4>
            No.1 Oxford Street, Accra. <br>
            No.1 Oxford Street, Accra. <br>
            <br>

            <h4>
                <i class="fa fa-phone"></i>
                Call us
            </h4>
            +1 234 567 890<br>
            +1 234 567 890<br>
            <br>

            <h4>
                <i class="fa fa-envelope"></i>
                Email
            </h4>
            realhousingagency@gmail.com<br>
            realhousingagency@gmail.com<br>

        </div>

        <div class="col-md-1"></div>

        <div class="col-md-7">
            <form method=post action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h4>Send us a Message</h4>
                <div class="row">
                    <div class="col sm 6">
                        <input type="text" name="name" placeholder="Your Name*" autocomplete="off" required>
                    </div>

                    <div class="col sm 6">
                        <input type="email" name="email" placeholder="Email*" autocomplete="off" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col sm 6">
                        <input type="number" name="phone" placeholder="Phone" autocomplete="off" max-length="10">
                    </div>

                    <div class="col sm 6">
                        <input type="text" name="subject" placeholder="Subject" autocomplete="off"><br><br>
                    </div>
                </div>

                <div>
                    <textarea cols="55" rows="7"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Send Mesage</button>
            </form>
        </div>

    </div>

</body>

</html>