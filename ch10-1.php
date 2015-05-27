<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <title>表單輸入欄位</title>
</head>
<body>
  <form method="get" action="ch10-1.php">
  
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

// 刪除
if ($_GET['del']) {
	$a=$_GET['del'];
	$d="delete from books where 書籍編號=$a";
	mysql_query($d);
	//異動會顯示異動資料
	echo '成功幾筆'.mysql_affected_rows();
}

$no=$_GET['no'];

// 員工編號查詢
if (!$_GET['no']) {
	$sql="select 書籍編號,書籍名稱,價格,姓名 from books join employee on  負責員工編號=員工編號";
} else {
	$sql="select 書籍編號,書籍名稱,價格,姓名 from books join employee on  負責員工編號=員工編號 where 書籍編號=$no";
}

// 使用價格排序
if ($_GET['order']==1) {
	$sql="select 書籍編號,書籍名稱,價格,姓名 from books join employee on  負責員工編號=員工編號 order by 價格";
}
if ($_GET['order']==2) {
	$sql="select 書籍編號,書籍名稱,價格,姓名 from books join employee on  負責員工編號=員工編號 order by 價格 desc";
}

//回傳結果
$result=mysql_query($sql);

echo '總共有' .mysql_num_rows($result).'書';
echo "<table border=1>";

if ($_GET['order']==2) {
	echo 
		"<tr>
			<td width=10%>書本編號</td>
			<td width=40%>書本名稱</td>
			<td width=20%><a href=ch10-1.php?order=1>書本價格</a></td>
			<td width=10%>負責員工</td>
			<td width=10%>刪除</td>
		</tr>";
} else {
	echo 
		"<tr>
			<td width=10%>書本編號</td>
			<td width=40%>書本名稱</td>
			<td width=20%><a href=ch10-1.php?order=2>書本價格</a></td>
			<td width=10%>負責員工</td>
			<td width=10%>刪除</td>
		</tr>";
}

while ($row=mysql_fetch_array($result)) {
	echo 
		"<tr>
			<td width=10%>$row[0]</td>
			<td width=40%>$row[1]</td>
			<td width=20%>$row[2]</td>
			<td width=10%>$row[3]</td>
			<td width=10%><a href=ch10-1.php?del=$row[0]>刪除</td>
		</tr>";
}

echo "</table>";
?>