<?php

//header('Content-Type: text/html; charset=utf-8');
include("mydb.php");

$sql='select * from books';
//�^�ǵ��G
$result=@mysql_query($sql);
echo '�`�@��' .mysql_num_rows($result).'��';
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