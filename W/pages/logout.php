<?php
session_start();

//session_destroy

unset($_SESSION['gobarUser']);
//跳回上一頁
echo "<script>history.back(-1)</script>"

// header('Location:product-list.php');
?>