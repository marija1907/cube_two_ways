<?php


if( $_GET["cube"] && !$_GET["cube"]=="" )
{
$stranica =  $_GET['cube'];

$zapr = $stranica * $stranica * $stranica;
echo $zapr;
}


