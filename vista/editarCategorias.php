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
					<label for="">NOMBRE DE CATEGORIA</label> <br>
					<input type="text" class="form-control"  name="nombrecategoria"
						value="<?php echo $v['nombrecategoria'] ?>"><br>
				</div>
				<div class="form-group">
					<label for="">DESCRIPCION</label><br>
					<input  type="text"  class="form-control" name="descripcion" value="<?php echo $v['descripcion'] ?>"><br>
					<input type="hidden" name="id" value="<?php echo $v['idcategoria'] ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="btn" value="ACTUALIZAR-AHORA" class="btn btn-lg btn-block btn-success">
				</div>

				<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="c" value="update">
			</form>
		</div>
	</div>
</div>

<?php require "layout/footer.php" ?>