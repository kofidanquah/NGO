<?php
require "config.php";

if (isset($_SESSION["network"])) {
    $network = $_SESSION["network"];
    $name = $_SESSION["name"];
    $phone = $_SESSION["phone"];
    $amount = $_SESSION["amount"];

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

    <link rel="stylesheet" href="css/checkout.css">
    <title>checkout</title>
</head>

<body>
    <header class="header">
        <?php include("include/header.php"); ?>
    </header>

    <button class="btn btn-dark px-3" onclick="goBack()"><i class="fa fa-arrow-left"></i> Back</button>

    <div class="col-md-5 container-fluid">
        <h4>Checkout</h4>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="network" class="form-label">
                <select name="network" class="form-select" required>
                    <option <?php echo $network == "MTN" ? "selected" : ""; ?>>MTN</option>
                    <option <?php echo $network == "Vodafone" ? "selected" : ""; ?>>Vodafone</option>
                    <option <?php echo $network == "AT" ? "selected" : ""; ?>>AT</option>
                </select>
            </label><br>

            Name<br>
            <input type="text" name="name" value="<?php echo $name; ?>" autocomplete="off" required><br>
            Mobile Number<br>
            <input type="number" name="phone" value="<?php echo $phone; ?>" autocomplete="off" required><br>
            Amount<br>
            <input type="number" name="amount" value="<?php echo $amount; ?>" autocomplete="off" required><br><br>
            <input type="submit" value="Donate" class="btn btn-success"><br>
        </form>
    </div>
</body>


<script>
    function goBack() {
    window.history.back()
    }
</script>
</html>