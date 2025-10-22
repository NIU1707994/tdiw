<?php
function connectaBD(){
	//completa
	$host='deic-docencia.uab.cat';
	$port='5432';
	$dbname='tdiw-w15';
	$user='tdiw-w15';
	$passwd='tdiw-w15';
	$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$passwd") or die("Error db: ".pg_last_error());
	return $con;
}
?>
