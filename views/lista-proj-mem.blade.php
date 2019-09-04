<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gerenciamento de Projetos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <br>
  <h2 style="text-align: center">Sistema de Alocação de Projetos</h2>

  <br> 
  <br>
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 style="text-align: center">Alocações Feitas</h3></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="bg-secondary" style="text-align: center; font-size: 18px;">
              <th>Projeto</th>
              <th>Membro Alocado</th>
              <th>Cargo do Membro</th>
              <th>Horas Trabalhadas</th>
              <th>Data de Alocação</th>
            </thead>

            <tbody>
              <td align="center">Projeto 1</td>
              <td align="center">Membro1</td>
              <td align="center">Cargo</td>
              <td align="center">12 horas</td>
              <td align="center">12/11/2019</td>
            </tbody>
          </table>
        </div>
        
        <div style="text-align: center;">
          <a href="#" class="btn btn-primary"><i class="fa fa-tasks"></i> Realizar Alocação</a>
        </div>
      </div>
    </div>

    <br>

    <div class="card">
      <div class="card-header"><h3 style="text-align: center">Membros</h3></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead  class="bg-secondary" style="text-align: center; font-size: 18px;">
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>Cargo</th>
              <th>Ações</th>
            </thead>

            <tbody>
              <td align="center">Nome1</td>
              <td align="center">Sobrenome1</td>
              <td align="center">Cargo1</td>
              <td align="center">
                <a href="" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                &nbsp;&nbsp;
                <a href="" class="btn btn-danger"><i class="fa fa-remove"></i> Deletar</a>
              </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <br>

    <div class="card">
      <div class="card-header"><h3 style="text-align: center">Projetos</h3></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="bg-secondary" style="text-align: center; font-size: 18px;">
              <th>Projeto</th>
              <th>Data de Inicio</th>
              <th>Data de Fim</th>
            </thead>

            <tbody>
              <td align="center">Projeto 1</td>
              <td align="center">11/02/2019</td>
              <td align="center">12/06/2019</td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>
</html>