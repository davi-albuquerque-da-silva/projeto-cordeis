<?php

$usuario ='root';
$senha ='';
$database ='login';
$host ='localhost'

$mysqli = new mysqli($host,$usuario , $senha, $datbase);

if(mysqli ->error)
{
    die("falha ao conectar ao banco de dados".$mysqli ->error);
}
