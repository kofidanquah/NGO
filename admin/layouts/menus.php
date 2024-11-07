<?php
require "../../config.php";
require "adminSidebar.php";

$page = isset($_GET['page']) ? $page = $_GET['page'] : 'dashboard';

// var_dump($page);
// exit;

switch ($page) {

    case 'dashboard':
        include '../dashboard.php';
        break;
    case 'event':
        include '../events/views/list.php';
        break;
    case 'project':
        include "../projects/views/list.php";
        break;
    case 'gallery':
        include '../gallery/views/list.php';
        break;
    case 'partners':
        include '../partners/views/list.php';
        break;
    case 'team':
        include '../team/views/list.php';
        break;
    case 'donation':
        include '../donation/views/list.php';
        break;
    case 'volunteers':
        include '../volunteers/views/list.php';
        break;
    case 'report':
        include '../report/views/list.php';
        break;

        // subs
    case 'team.new':
        include '../team/views/new.php';
        break;
    case 'partners.new':
        include '../partners/views/new.php';
        break;
    default:
        include "../dashboard.php";
        break;
}
