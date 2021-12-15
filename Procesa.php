<?php
//$id =$_POST['Rfc'];
//$Rfc =$_POST['Rfc'];
//$id =$_POST['id'];
$Rfc =$_POST['Rfc'];
$Nombre =$_POST['Nombre'];
$Ape_pat =$_POST['Ape_pat'];
$Ape_mat =$_POST['Ape_mat'];
$Sexo =$_POST['Sexo'];
$Edad =$_POST['Edad'];
$Mensaje =$_POST['Mensaje'];

//echo $id;
echo $Rfc;
echo $Nombre;
echo $Ape_pat;
echo $Ape_mat;
echo $Sexo;
echo $Edad;
echo $Mensaje; 

$conexion= new mysqli('localhost','root','','bdweb');
if($conexion->connect_error){
  die("error de conexion".$conexion->connect_error);
}else{
$sql="INSERT INTO datos(Rfc, Nombre, Ape_pat, Ape_mat,Sexo, Edad, Mensaje) VALUES('".$Rfc."','".$Nombre."','".$Ape_pat."','".$Ape_mat."','".$Sexo."','".$Edad."','".$Mensaje."');";
if($conexion->query($sql)){
    echo"registro insertado";
}else{
    echo"error en la inserccion".$conexion->error;
}

}

?>