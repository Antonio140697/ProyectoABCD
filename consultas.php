
<?php
	include("function.php");
?>
<table border="10" class="table table-blue" width="90%" heigh="30" align="center">
	<tr>
	<th width="10%">ID</th>
    <th width="15%">RFC</th>
	<th width="15%">NOMBRE</th>
	<th width="15%">APELLIDO PATERNO</th>
	<th width="15%">APELLIDO MATERNO</th>
	<th width="10%">EDAD</th>
	<th width="15%">SEXO</th>
	<th width="80%">MENSAJE</th>
		
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
		<td><?php echo $row->Ape_pat;?></td>
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
<i class="fa fa-pencil fa-lg" aria-hidden="true">Eliminar</i></a>
        </td>
	</tr>
	
	<?php } ?>
</table>