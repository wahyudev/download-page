<?php

$h='localhost';
$u='root';
$p='';
$db='download';
mysql_connect($h,$u,$p) or die('gagal konek');
mysql_select_db($db) or die('eror db');

?>