<?php
include_once "db.php";

// 從資料表中 拿出 有幾種 班級欄位
$classes=q("select `classroom` from `students` group by `classroom`");

// encode 編碼 ； decode 解碼
echo json_encode($classes);