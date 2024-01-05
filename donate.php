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
        body {
            font-family: 'Courier New', Courier, monospace;
            /* background-image: url(images/img_5terre_wide.jpg); */
        }

        /* .main {
        } */

        .method,
        .dropdown-content {
            margin-left: 550px;
        }

        button {
            padding: 8px, 20px;
            margin: 8px, 0;
        }

        .dropbtn {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }
    </style>
    <title>Donate</title>
</head>

<body>
    <header class="header container-fluid">
        <?php include("include/header.php"); ?>
    </header>
    <div class="main">
        <div class="heading">
            <h2>Donation Page</h2>
        </div>
        <hr>
        <div class="container-fluid">
            <h5>
                Donate to help us facilitate a lasting and positive change in the lives of underserved and disadvantaged communities and individuals by providing them with opportunities to develop and become self-dependent and self-reliant.

            </h5>
        </div><br>

        <div class="container-fluid">
            <div class="dropdown">
                <button onclick="myFunction()" class="btn btn-primary method dropbtn">Payment Method</button>

                <div id="myDropdown" class="dropdown-content">
                    <a href="mobileMoney.php">Mobile Money</a>
                    <a href="card.php">Card</a>

                </div>
            </div>
        </div>


        <div class="container-fluid">
        </div>
    </div>

</body>
<script src="donate.js">
</script>

</html>