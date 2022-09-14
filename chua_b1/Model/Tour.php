<?php
require_once('./Model/connect.php');

function getTours()
{
    $sql = 'SELECT tours.id_tour, tours.name_tour, categories.name as cate_name FROM tours 
    LEFT JOIN categories ON tours.id_tour = categories.id ';
    $tours = getData($sql, FETCH_ALL);
    return $tours;
}

function getTour($id)
{
    $sql = "SELECT * FROM tours WHERE id= '. $id .'";
    $tour = getData($sql, FETCH_ONE);
    return $tour;
}
