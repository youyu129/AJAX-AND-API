<?php
include_once "db.php";

//處理刪除資料的請求
$id=$_POST['id'];

// 後端撈出id
// $row=$Stu->find($id);

$Stu->del($id);

// 也可以寫成一行
// echo $Stu->del($_POST['id']);

echo $_POST['classroom'];

// 從後端方式顯示新的學生資料表
// echo $row['classroom'];
?>