<?php
require "config.php";

$network = $firstName = $lastName = $phone = $amount = "";


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!empty($_POST["network"])) {
        $network = test_input($_POST["network"]);
    }

    if (!empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
    }

    if (!empty($_POST["phone"])) {
        $phone = test_input($_POST["phone"]);
    }

    if (!empty($_POST["amount"])) {
        $amount = test_input($_POST["amount"]);
    }


    $_SESSION["network"] = $_POST["network"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["amount"] = $_POST["amount"];

    header("Location:checkout.php");
    die();
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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

    <style>
        input,
        label {
            width: 70%;
            padding: 8px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form {
            background-size: cover;
            padding: 20px;
            margin: auto;
            border-radius: 5px;
            height: 65vh;
            border: 1px solid black;
            width: 450px;
        }

        h4 {
            text-align: center;
            justify-content: center;
            padding: 20px;
            margin-left: 500px;
        }

        img{
            width:65px;
            height:65px;
        }
    </style>
    <title>mobile money</title>
</head>

<body>
    <header class="header">
        <?php include("include/header.php"); ?>
    </header>

    <h4>Mobile Money</h4>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <img src="images/mtn.jpeg"><img src="images/vodafone.png"><img src="images/at.png">
    <br>
        <label for="network" class="form-label">
            <select name="network" class="form-select" required>
                <option selected disabled>Select Network</option>
                <option>MTN</option>
                <option>Vodafone</option>
                <option>AT</option>
            </select>
        </label><br>

        Name<br>
        <input type="text" name="name" autocomplete="off" required><br>
        Mobile Number<br>
        <input type="number" name="phone" autocomplete="off" min="0" required maxlength="10"><br>
        Amount<br>
        <input type="number" name="amount" autocomplete="off" min="1" required><br><br>
        <input type="submit" value="Proceed" class="btn btn-success"><br>
    </form>

</body>

</html>