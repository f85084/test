<?php
//資料庫設定
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "123456";
$dbName = "ch09";

//連線資料庫伺服器
$conn = @mysql_connect($dbServer, $dbUser, $dbPass);

if (@mysql_connect($conn))
{
  die("無法連線資料庫伺服器</BR>");
}
else 
{
}
//連線資料庫
if (!@mysql_select_db($dbName))
{
  die("無法連線資料庫");
}
else 
{
}
//設定連線的字元集為 UTF8 編碼
mysql_query("SET NAMES  utf8");
?>