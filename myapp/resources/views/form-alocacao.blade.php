<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Formulario de Alocação</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<header class="main-header">
		<nav class="navbar" role="navigation">
	        <ul class="nav navbar-nav">
	          <li class="item messages-menu">
	           <a href="{{ url('/lista-proj-mem') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
	          </li>
	        </ul>
	    </nav>
	</header>

	<div class="container">
		<h3 style="text-align: center">Alocação de Membros para Projetos</h3>
		<form method="post" action="{{url('/lista-proj-mem/salvar-alocacao')}}" enctype="multipart/form-data">
			@csrf 
			<div class="form-group">
				<label>Membro</label>
				<select class="form-control form-control-lg" name="membro">
					<option value="">-- Escolha um Membro --</option>
					@foreach($membros as $membro)
						<option value="{{ $membro->nome }} {{ $membro->sobrenome }}"> {{ $membro->nome }} {{ $membro->sobrenome }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Projeto</label>
				<select class="form-control form-control-lg" name="projeto">
					<option value="">--- Escolha o Projeto ---</option>
					@foreach($projetos as $projeto)
						<option value="{{ $projeto->nome_projeto }}">{{ $projeto->nome_projeto }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Data de Alocação</label>
				<input type="date" name="data" class="form-control form-control-lg">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-tasks"></i> Alocar</button>
			</div>
		</form>
	</div>

</body>
</html>