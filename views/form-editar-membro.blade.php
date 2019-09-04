<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Formulario de Edição</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<br>
	<div class="container">
		<h3 style="text-align: center">Editar Dados do Membro</h3>
		<form method="post" action="" enctype="multipart/form-data">
			<!-- @csrf previne contra requisições falsas de sistemas ou usuários maliciosos -->
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nome" class="form-control form-control-lg" value="">
			</div>

			<div class="form-group">
				<label>Sobrenome</label>
				<input type="text" name="sobrenome" class="form-control form-control-lg" value="">
			</div>

			<div class="form-group">
				<label>Cargo</label>
				<select class="form-control form-control-lg" name="membro">
					<option value="">Cargo1</option>
					<option value="">Cargo2</option>
					<option value="">Cargo3</option>
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg"> <i class="fa fa-save"></i> Salvar</button>
			</div>
		</form>
	</div>

</body>
</html>