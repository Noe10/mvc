<?php require "layout/header.php" ?>
<h1>NUEVO</h1>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="">
				<?php foreach ($dato as $value): ?>
				<?php  foreach ($value as $v ): ?>
				<div class="form-group">
					<label for="">NOMBRE DE COMPAÑIA</label> <br>
					<input class="form-control" type="text" name="nombreCompania"
						value="<?php echo $v['nombreCompania'] ?>"><br>
				</div>
				<div class="form-group">
					<label for="">TELEFOFNO</label><br>
					<input class="form-control" type="text" name="telefono" value="<?php echo $v['telefono'] ?>"><br>
					<input type="hidden" name="id" value="<?php echo $v['idCompaniaEnvios'] ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="btn" value="ACTUALIZAR" class="btn btn-lg btn-block btn-success">
				</div>

				<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="m" value="update">
			</form>
		</div>
	</div>
</div>

<?php require "layout/footer.php" ?>