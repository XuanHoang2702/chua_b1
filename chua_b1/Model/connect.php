<?php 
// dinh nghia ra cac tinh huong lay du lieu
define('FETCH_ALL',2);
define('FETCH_ONE',1);
define('NO_FETCH',0);

 function getConnect(){
    $connect = new PDO('mysql:host=127.0.0.1;dbname=lap1_php2',
    'root',
    '');
    return $connect;
 };

 // vieets truy van sql = 'SElect * from tour;
// chuaanr bi truy van $statement = $connect->prepare($sql)
// thuc thi $statement->execute();
//nhan ket qua $tour  = $statement->fetchAll();
 function getData($sql, $fetchType){
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();

     switch($fetchType){
           case 'FETCH_ALL':
            return $statement->fetchAll();
            case FETCH_ONE:
                return $statement->fetch();
           default:
             return true;

     }

 };
