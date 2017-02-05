<?php
/*$h='mysql.idhostinger.com';
$u='u771251487_dl';
$p='download-wahyudev';
$db='u771251487_dl'; */
$h='localhost';
$u='root';
$p='';
$db='download';
mysqli_connect($h,$u,$p) or die('gagal konek');
mysql_select_db($db) or die('eror db');