


<?php
require __DIR__ . '/../../parts/config.php';

// if(isset($_REQUEST['sid']) && 
//    isset($_REQUEST['type']) === 'delete') 
// {
//     $sql = "DELETE FROM `orders` WHERE `sid` = $sid ";
//     $pdo->query($sql);
// }

// $sid=intval($_GET['sid']);

// //刪除指定資料
// $sql = "DELETE FROM `orders` WHERE `sid` = $sid ";

// $link= mysqli_connect('localhost','root',''); 

// mysqli_query($link,$sql);

//排錯並返回頁面
// if(mysql_error()){
//     echo mysql_error();
// }else{
//     header("Location:allusers.php");
// }


if (isset($_GET['sid'])) {
    $sid = intval($_GET['sid']);
    
} 

$sql = "DELETE FROM `orders` ORDER BY `sid` desc limit 1 ";
$pdo->query($sql);

if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location:order.php');
}



