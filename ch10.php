<?php
//header('Content-Type: text/html; charset=utf-8');
//��Ʈw�]�w
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "123456";
$dbName = "ch09";

//�s�u��Ʈw���A��
$conn = @mysql_connect($dbServer, $dbUser, $dbPass);

if (@mysql_connect($conn))
{
  die("�L�k�s�u��Ʈw���A��</BR>");
}
else 
{
//	echo "Success</BR>";
}
//�s�u��Ʈw
if (!@mysql_select_db($dbName))
{
  die("�L�k�s�u��Ʈw");
}
else 
{
//echo "Success";
}
//�]�w�s�u���r������ UTF8 �s�X
mysql_query("SET NAMES  big5");
//����ɮ� books
$sql='select * from books';
//�^�ǵ��G
$result=@mysql_query($sql);
//echo '�`�@��'.mysql_name_row($result)'��';
//Ū���O��
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