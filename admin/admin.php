<?php 
require "../config.php";

if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}else{
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

    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>

</head>

<body>
    <div class="">
<?php include("../include/sidenav.php") ?>
    </div>

    <div class="main">
        <h4>Main</h4>
    </div>
</body>

</html>