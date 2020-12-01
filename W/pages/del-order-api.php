


<?php
require __DIR__ . '/../../parts/config.php';

if(
   isset($_REQUEST['type']) === 'delete') 
{
    $sql = "DELETE FROM `orders` ORDER BY `sid` desc limit 1 ";
    $pdo->query($sql);
}



// echo $_REQUEST['sid'];


// if (isset($_GET['sid'])) {
//     $sid = intval($_GET['sid']);

    
// } else {
//     header('Location:order.php');
//     exit;
// }

// $sql = "DELETE FROM `orders` ORDER BY `sid` desc limit 1 ; ";
// $pdo->query($sql);

// if (isset($_SERVER['HTTP_REFERER'])) {
//     header('Location:' . $_SERVER['HTTP_REFERER']);
// } else {
//     header('Location:order.php');
// }



