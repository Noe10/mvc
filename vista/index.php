<?php require "layout/header.php" ?>
<h1>Compañia de Envios</h1>

<div style="margin:20px; text-align:center" >
	<div class="row">
		<div class="col">
			<a class="btn btn-primary" href="index.php?m=nuevo">NUEVO</a>
		</div>
		<div class="col">
			<a class="btn btn-lg btn-block btn-outline-success" href="index.php?m=categorias">VER CATEGORIA</a>
		</div>
	</div>
</div>
<div style="text-align:center">
	<table class="table"  border="1">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>telefono</td>
			<td>Acción</td>
		</tr>
			<?php 
			foreach ($dato as $key => $value)
				foreach ($value as $va ):
					echo "<tr><td>".$va['idCompaniaEnvios']."</td><td>".$va['nombreCompania']."</td><td>".$va['telefono']."</td>";
					echo "<td><a class='btn btn-warning' href='index.php?m=editar&id=".$va['idCompaniaEnvios']."'>EDITAR</a> <a class='btn btn-danger' href='index.php?m=eliminar&id=".$va['idCompaniaEnvios']."'>ELIMINAR</a></td>";
					echo "</tr>";
				endforeach;
			?>
	</table>
</div>

<?php require "layout/footer.php" ?>