<?php

$h='mysql.idhostinger.com';
$u='u617774943_dl';
$p='rahasiaku';
$db='u617774943_dl';
mysqli_connect($h,$u,$p) or die('gagal konek');
mysql_select_db($db) or die('eror db');