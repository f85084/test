<?php

if( !@mysql_connect("localhost", "root", "123456"))
   die("�L�k�s�u");

else echo '�s�u��!';

if( !@mysql_select_db(ch))
   die("�L�k�ϥθ�Ʈw");
else echo '�s�u��ch';
?>