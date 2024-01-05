<?php
require "../config.php";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location:adminlogin.php");
    die();
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

    <title>Donations</title>
</head>

<body>
    <div class="">
        <?php include("../include/sidenav.php") ?>
    </div>

    <div class="main">
        <h4>Donations</h4>
        <br>

        <table class="table">
            <tr>
                <th>S/N</th>
                <th>NAME</th>
                <th>NUMBER</th>
                <th>AMOUNT</th>
                <th>NETWORK</th>
                <th>TRANSACTION ID</th>
                <th>DATE</th>
            </tr>

            <?php
            $sql = "SELECT * FROM mobilemoney";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();


            foreach ($result as $row) {
                $id = $row["ID"];
                $name = $row["NAME"];
                $number = $row["NUMBER"];
                $amount = $row["AMOUNT"];
                $network = $row["NETWORK"];
                $transId = $row["TRANSACTION_ID"];
                $date = $row["DATE"];
            ?>

                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td><?php echo $network; ?></td>
                    <td><?php echo $transId; ?></td>
                    <td><?php echo $date; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
</body>

</html>