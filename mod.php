<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Con</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>

<body  >
<div class="main-wrapper" style="text-align:center;">
<h1>Editar Registros </h1>
<br><br>

<?php 
include("function.php");
$id = $_GET['id'];
select_id('datos','id',$id);
?>

<section id= "ingresar" class="ingresar">
<div class="container" data-aos="fade-up" >

    <div class="col-lg-8 mt-5 mt-lg-0">

      <form action="" method="post"  >
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" value="<?php echo $row->id;?>" name="id" class="form-control" id="id" placeholder="id" required>
          </div>
          <div class="col-md-6 form-group">
            <input type="text" value="<?php echo $row->Rfc;?>" name="Rfc" class="form-control" id="Rfc" placeholder="Rfc" required>
          </div>
          <div class="col-md-6 form-group">
              <input type="text" value="<?php echo $row->Nombre;?>" name="Nombre" class="form-control" id="Nombre" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" value="<?php echo $row->Ape_pat;?>"name="Ape_pat" class="form-control" id="Ape_pat" placeholder="Ape_pat" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" value="<?php echo $row->Ape_mat;?>"name="Ape_mat" class="form-control" id="Ape_mat" placeholder="Ape_mat" required>
            </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="text" value="<?php echo $row->Sexo;?>"name="Sexo" class="form-control" id="Sexo" placeholder="Sexo" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" value="<?php echo $row->Edad;?>"name="Edad" class="form-control" name="Edad" id="Edad" placeholder="Edad" required>
        </div>
        <div class="form-group mt-3">
          <input type="text" value="<?php echo $row->Mensaje;?>"name="Mensaje" class="form-control" name="Mensaje" id="Mensaje" placeholder="Mensaje" required>
        </div>
        
        <div class="text-center">
            <button type="submit"name="submit">Send Message</button></div>
      </form>
  

    </div>
</section><!-- End Contact Section -->      

<?php
		
	if(isset($_POST['submit'])){
	echo "no";
		$field = array("id"=>$_POST['id'],"Rfc"=>$_POST['Rfc'],"Nombre"=>$_POST['Nombre'],"Ape_pat"=>$_POST['Ape_pat'], "Ape_mat"=>$_POST['Ape_mat'],"Sexo"=>$_POST['Sexo'],
		"Edad"=>$_POST['Edad'],"Mensaje"=>$_POST['Mensaje']);
		$tbl = "datos";
		edit($tbl,$field,'id',$id);
  //  <a href="consultarr.php" class="button">Modificar</a>
//	header("location:consultas.php");
  header("Status: 301 Moved Permanently");
  header("Location:consultas.php");
  echo"<script language='javascript'>window.location='consultas.php'</script>;";
  exit();
  
	}
?>
 
<!--<li><a href="consultarr.php">Paguina Principal</a></li>-->
