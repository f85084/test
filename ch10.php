<?php
//header('Content-Type: text/html; charset=utf-8');
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
//	echo "Success</BR>";
}
//連線資料庫
if (!@mysql_select_db($dbName))
{
  die("無法連線資料庫");
}
else 
{
//echo "Success";
}
//設定連線的字元集為 UTF8 編碼
mysql_query("SET NAMES  big5");
//選擇檔案 books
$sql='select * from books';
//回傳結果
$result=@mysql_query($sql);
//echo '總共有'.mysql_name_row($result)'書';
//讀取記錄
$row=mysql_fetch_array($result);

while ($row=mysql_fetch_array($result))
{
echo "<table border=1>
  <tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
  </tr>
</table>";
}
?>