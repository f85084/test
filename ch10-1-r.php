<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <title>表單輸入欄位</title>
</head>
<body>
  <form method="get" action="ch10-1-r.php">
  
     <!-- 單列文字輸入欄位 -->
    請輸入書籍編號:
    <input type="text" name="no"> <br>

    <input type="submit" value="查詢資料">
    <input type="reset" value="清除資料">
  </form>
</body>
</html>

<?php

//header('Content-Type: text/html; charset=utf-8');
include("mydb.php");

$no=$_GET['no'];
if (!$_GET['no']){

$sql='select * from books';
}
else
{
}

echo $sql;

//回傳結果
$result=@mysql_query($sql);
echo '總共有' .mysql_num_rows($result).'書';
echo "<table border=1>";
while ($row=mysql_fetch_array($result))
{
echo 
  "<tr>
    <td width=10%>$row[0]</td>
    <td width=60%>$row[1]</td>
    <td width=20%>$row[2]</td>
    <td width=10%>$row[3]</td>
  </tr>";
}
echo "</table>";
?>
