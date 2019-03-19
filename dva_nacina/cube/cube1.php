<?php
if( $_GET["cube1"] && !$_GET["cube1"]=="" )
{
$stranica =  $_GET['cube1'];

$zbir = $stranica * 12;
echo $zbir;
}