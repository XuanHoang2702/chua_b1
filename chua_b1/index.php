<?php
include_once 'Controller/TourController.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';
// kiem tra nguoi dung muon vao dau

switch ($url) {

    case '/':
        //  goi controller TourController
        echo indexTour();
        // goi ham index();
        break;
    case 'create-tour':
        // goi controller tim den ham hien thi view tao moi tour
        break;
    default:
        echo 'Duong dan ko ton tai';
        break;
}
