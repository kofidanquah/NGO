<?php
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location:../login.php");
    die();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
        /* import font */

        @import url("https://fonts.googleapis.com/css?family=Poppins:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #F7F8FA;
            overflow-x: hidden;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 85px;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background: #E4E4E4;
            padding: 20px 2px;
            transition: all 0.4s ease;
            z-index: 100;
        }

        .sidebar:hover {
            width: 260px;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 10px 18px;
        }

        .sidebar-header img {
            width: 42px;
            border-radius: 50%;
            border: 1px solid #111;
        }

        .sidebar-header h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111;
            margin-left: 23px;
        }

        .sidebar-links {
            list-style: none;
            margin-top: 20px;
            height: 80%;
            overflow: auto;
            scrollbar-width: none;
        }

        .sidebar-links .submenu {
            list-style: none;
        }

        .sidebar-links h4 span {
            opacity: 0;
        }

        .sidebar:hover .sidebar-links h4 span {
            opacity: 1;
        }

        .sidebar-links h4 {
            color: #111;
            font-weight: 500;
            margin: 10px 0;
            white-space: nowrap;
            position: relative;
        }

        .sidebar-links .menu-separator {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            transform: scaleX(1);
            transform: scaleY(-50%);
            background: #333578;
            transform-origin: right;
            transition-duration: 0.2s;
        }

        .sidebar:hover .sidebar-links .menu-separator {
            transition-delay: 0s;
            transform: scaleX(0);
        }

        .sidebar-links li a {
            display: flex;
            align-items: center;
            gap: 0 20px;
            color: #111;
            font-weight: 500;
            padding: 15px 10px;
            white-space: nowrap;
            text-decoration: none;
        }

        .sidebar-links li a:hover {
            background: #ffffff8d;
            color: #111;
            border-radius: 4px;
        }

        .card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }


        /* Basic submenu styling */

        .submenu {
            list-style-type: none;
            padding-left: 20px;
            margin: 0;
        }

        .submenu li {
            margin: 5px 0;
            list-style: none;
        }

        .submenu a {
            text-decoration: none;
            color: #333;
            display: block;
        }


        /* Hide the submenu by default */

        .submenu {
            display: none;
        }


        /* header */


        /* header {} */

        .header {
            position: fixed;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: rgb(83, 95, 113);
            padding: 20px;
            height: 70px;
            width: 100%;
            text-align: right;
            top: 0;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            z-index: 10;
        }

        .home {
            margin-left: 90px;
            font-size: 30px;
            font-weight: bold;
        }

        .icons {
            float: right;
            padding: 15px 10px;
        }

        .header a {
            text-decoration: none;
            color: #fff;
        }


        /* main */

        main {
            margin-left: 90px;
            margin-top: 70px;
            padding: 10px;
        }

        .logout-link {
            color: #111 !important;
        }

        .logout-link:hover {
            cursor: pointer;
        }

        .headings{
            display:flex;
            justify-content:space-between;
        }

        /* Existing CSS remains the same */


        /* Add these media queries at the end of the file */

        @media screen and (max-width: 768px) {
            .sidebar {
                width: 0;
                padding: 20px 0;
            }

            .sidebar:hover {
                width: 200px;
            }

            .sidebar-header h2 {
                font-size: 1rem;
            }

            main {
                margin-left: 0;
            }

            .header {
                padding: 10px;
            }
        }


        /* new */

        @media screen and (max-width: 480px) {
            .sidebar:hover {
                width: 100%;
            }

            .header {
                height: auto;
                flex-direction: column;
                align-items: flex-end;
            }

            .header a {
                padding: 5px;
            }
        }


        /* Add a hamburger menu for mobile */

        .menu-toggle {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 200;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .menu-toggle span {
                display: block;
                width: 25px;
                height: 3px;
                background-color: white;
                margin: 5px 0;
            }

            .sidebar.active {
                width: 200px;
            }
        }

        .sidebar-links .submenu {
            display: none;
            padding-left: 20px;
            list-style-type: disc;
        }

        .sidebar-links .submenu-active>.submenu {
            display: block;
        }
    </style>
</head>

<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="" alt="Logo" />
            <h2>
                Admin
            </h2>
        </div>
        <ul class="sidebar-links">

            <li>
                <a href="?page=dashboard">
                    <span class="material-symbols-outlined"> home </span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="?page=event">
                    <span class="material-symbols-outlined"> event </span>
                    Manage Events
                </a>
            </li>
            <li>
                <a href="?page=project">
                    <span class="material-symbols-outlined"> groups </span>
                    Manage Projects
                </a>
            </li>
            <li>
                <a href="?page=volunteers">
                    <span class="material-symbols-outlined"> category </span>
                    Manage Volunteers
                </a>
            </li>

            <li>
                <a href="?page=donation">
                    <span class="material-symbols-outlined"> manage_accounts </span>
                    Manage Donation
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" id="reportMenu">
                    <span class="material-symbols-outlined"> monitoring </span>
                    Content<span id="reportArrowIcon" class="material-symbols-outlined"> chevron_right </span>
                </a>
                <ul id="reportSubMenu" class="submenu" style="display: none;">
                    <li><a href="?page=partners"><i class="fa fa-circle-o fa-sm"></i>Partners</a></li>
                    <li><a href="?page=gallery"><i class="fa fa-circle-o fa-sm"></i>Gallery</a></li>
                    <li><a href="?page=team"><i class="fa fa-circle-o fa-sm"></i>Team</a></li>
                </ul>
            </li>

            <li>
                <a href="?page=report">
                    <span class="material-symbols-outlined"> monitoring </span>
                    Report
                </a>
            </li>
            <li>
                <a href="">
                    <span class="material-symbols-outlined"> settings </span>
                    Settings
                </a>
            </li>
            <li>
                <a onclick="confirmLogout()" class="logout-link">
                    <span class="material-symbols-outlined"> logout </span>
                    Logout
                </a>
            </li>
        </ul>
    </aside>

    <!-- header -->
    <header class="header">
        <a class="home" href="/">
            NGO
        </a>
        <div class="icons">
            <a href="#">
                <span class="material-symbols-outlined"> notifications_active </span>
            </a>

            <a href="#">
                <span class="material-symbols-outlined"> account_circle </span>
            </a>
        </div>
    </header>

</body>
<script>
    function confirmLogout() {
        Swal.fire({
            title: "Are you sure you want to logout?",
            icon: "warning",
            html: "<form id='logout' action='../logout.php' method='POST'>" +
                "</form>",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Logout",
            preConfirm: function() {
                document.getElementById('logout').submit();
            }

        })
    }


    // partners submenus
    document.addEventListener('DOMContentLoaded', function() {
        const partnersMenu = document.getElementById('partnersMenu');
        const partnersSubMenu = document.getElementById('partnersSubMenu');
        const arrowIcon = document.getElementById('arrowIcon');

        partnersMenu.addEventListener('click', function() {
            if (partnersSubMenu.style.display === 'none' || partnersSubMenu.style.display === '') {
                partnersSubMenu.style.display = 'block';
                arrowIcon.textContent = 'expand_less';
            } else {
                partnersSubMenu.style.display = 'none';
                arrowIcon.textContent = 'expand_more';
            }
        });
    });

    // report submenus
    document.addEventListener('DOMContentLoaded', function() {
        const reportMenu = document.getElementById('reportMenu');
        const reportSubMenu = document.getElementById('reportSubMenu');
        const reportArrowIcon = document.getElementById('reportArrowIcon');

        reportMenu.addEventListener('click', function() {
            if (reportSubMenu.style.display === 'none' || reportSubMenu.style.display === '') {
                reportSubMenu.style.display = 'block';
                reportArrowIcon.textContent = 'expand_more';
            } else {
                reportSubMenu.style.display = 'none';
                reportArrowIcon.textContent = 'chevron_right';
            }
        });
    });
</script>

</html>