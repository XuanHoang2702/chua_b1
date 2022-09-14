<?php
require_once './Model/Tour.php';
// ham hien thi ds tour
function indexTour()
{
    //B1. lay tat ca cacs ban ghi tour
    $tours = getTours();
    //b2. include_once view ds tour
    include_once './View/tour.php';
}
