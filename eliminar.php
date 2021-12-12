<?php

include("function.php");
$Rfc = $_GET['id'];
delete('datos','id',$Rfc);
header("location:consultas.php");


?>

