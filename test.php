<?php

if( !@mysql_connect("localhost", "root", "123456"))
   die("無法連線");

else echo '連線啦!';

if( !@mysql_select_db(ch))
   die("無法使用資料庫");
else echo '連線到ch';
?>