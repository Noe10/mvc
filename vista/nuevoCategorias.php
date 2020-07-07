<?php require "layout/header.php" ?>
<h1>NUEVO</h1>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="">
				<div class="form-group">
					<label for="">NOMBRE DE CATEGORIA</label> <br>
					<input class="form-control" type="text" name="nombrecategoria"><br>
				</div>
				<div class="from-group">
					<label for="">DESCRIPCION</label><br>
					<input class="form-control" type="text" name="descripcion"><br>
				</div>
				<div class="form-group">
					<input  type="submit" name="btn" class="btn btn-primary btn-lg btn-block ">
					<input type="hidden" name="c" value="guardar">
				</div>
				
			</form>
		</div>
	</div>
</div>		

<?php require "layout/footer.php" ?>