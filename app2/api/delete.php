<?php
include_once "db.php";

//處理刪除資料的請求
$id=$_POST['id'];

$Stu->del($id);

// 也可以寫成一行
// echo $Stu->del($_POST['id']);

echo $_POST['classroom'];

?>