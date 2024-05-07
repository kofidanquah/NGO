<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: gray;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    /* font-size: 25px; */
    color: black;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 180px;
    /* font-size: 28px; */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}

h4 {
    font-family: cursive;
    font-weight: 400;
}
    </style>
    <title>sidenav</title>

</head>

<body>
    <div class="sidenav text-dark">
        <header class="header">
        </header>
        <h4>Dashboard</h4>
        <a href="admin.php"><i class="fa fa-home"></i> Overview</a>
        <a href="#"><i class="fa fa-calendar"></i> Projects</a>
        <a href="#"><i class="fa fa-picture-o"></i> Gallery</a>
        <a href="report.php"><i class="fa fa-envelope"></i> Messages</a>
        <a href="donations.php"><i class="fa fa-money"></i> Donations</a>
        <br><br>

        <h4>Account</h4>
        <a href="#"><i class="fa fa-question-circle"></i> FAQ</a>
        <a href="#"><i class="fa fa-gear"></i> Settings</a>
        <a href="#" onclick="confirmLogout()"><i class="fa fa-sign-out"></i> Logout</a>

    </div>

    <script>
        function confirmLogout(){
                    Swal.fire({
            title: "Are you sure you want to logout?",
            icon: "warning",
            html: "<form id='adminlogout' action='logout.php' method='POST'>" +
                "</form>",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Logout",
            preConfirm: function() {
                document.getElementById('adminlogout').submit();
            }
        })
        }
    </script>

</body>

</html>