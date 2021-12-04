
<?php
	include("function.php");
?>
<table border="1" width="80%" align="center">
	<tr>
	<th width="30%">id</th>
    <th width="30%">id</th>
	<th width="30%">fecha</th>
	<th width="30%">hora</th>
	<th width="30%">Nombres</th>
	<th width="30%">correo</th>
		<th width="30%">direccion</th>
		<th width="30%">ciudad</th>
		
	</tr>
<?php 
	$sql = "select * from datos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
     	<td><?php echo $row->id;?></td>
         <td><?php echo $row->Rfc;?></td>
    	<td><?php echo $row->Nombre;?></td>
		<td><?php echo $row->Ape_mat;?></td>
		<td><?php echo $row->Ape_mat;?></td>
		<td><?php echo $row->Edad;?></td>
		<td><?php echo $row->Sexo;?></td>
		<td><?php echo $row->Mensaje;?></td>
		

		<td>
<a class="btn btn-primary" href="mod.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">Modificar</i></a>
	</td>
	<td>
<a class="btn btn-primary" href="eliminar.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">borrar</i></a>
        </td>
	</tr>
	
	<?php } ?>
</table>