<?php require "layout/header.php" ?>
<h1>Categorias</h1>

<div style="margin:20px; text-align:center" >
	<div class="row">
		<div class="col">
			<a class="btn btn-primary" href="categorias.php?c=nuevo">nuevo</a>
		</div>
		<div class="col">
			<a class="btn btn-lg btn-block btn-outline-success" href="categorias.php?c=comEnvio">COMPAÑIA DE ENVIOS</a>
		</div>
		
	</div>
</div>
<div style="text-align:center">
	<table class="table"  border="1">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>descripcion</td>
			<td>Acción</td>
		</tr>
			<?php 
			foreach ($dato as $key => $value)
				foreach ($value as $va ):
					echo "<tr><td>".$va['idcategoria']."</td><td>".$va['nombrecategoria']."</td><td>".$va['descripcion']."</td>";
					echo "<td><a class='btn btn-warning' href='categorias.php?c=editar&id=".$va['idcategoria']."'>EDITAR</a> <a class='btn btn-danger' href='categorias.php?c=eliminar&id=".$va['idcategoria']."'>ELIMINAR</a></td>";
					echo "</tr>";
				endforeach;
			?>
	</table>
</div>

<?php require "layout/footer.php" ?>