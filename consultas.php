
<?php
	include("function.php");
?>
<table border="1" width="80%" align="center">
	<tr>
	<th width="30%">id</th>
    <th width="30%">Rfc</th>
	<th width="30%">Nombre</th>
	<th width="30%">Ape_pat</th>
	<th width="30%">Ape_mat</th>
	<th width="30%">$Edad</th>
	<th width="30%">$Sexo</th>
	<th width="30%">Mensaje</th>
		
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