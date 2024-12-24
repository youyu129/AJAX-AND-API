<?php
include_once "db.php";
//處理查詢資料的請求

$code=$_GET['code'];
$students=$Stu->all(['classroom'=>$code]);
// 用json的方式回傳給client端
echo json_encode($students);
?>