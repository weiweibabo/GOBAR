<?php
session_start();

//session_destroy

unset($_SESSION['gobarUser']);

header('Location:../../M/_index.php');
//跳回上一頁
// echo "<script>history.back(-1)</script>"
