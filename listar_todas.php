<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "av1daw";

  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  //Passar o comando sql para inserir a tabela

  $query =  "SELECT * FROM disciplina";

  $result = $conn->query($query);

?>


<!DOCTYPE html>

  <html lang="en">

    <head>

        <title>Sistema</title>

        <meta charset="utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link href="css/estilo.css" rel="stylesheet">

    </head>

    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="criarDisciplina.html">Criar Disciplina</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="alterar.php">Alterar Disciplina</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="listar_todas.php">Listar todas as Disciplinas</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="listar_uma.html">Listar uma Disciplina</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="apagar.html">Remover Disciplina</a>
            </li>

          </ul>

        </div>

      </nav>

      <div class="col-sm-6 offset-3"> 

        <table class='table table-striped table-bordered' style="margin-top: 20px;"  >

          <tr>
            <th> Nome </th>
            <th> ID </th>
            <th> Periodo </th>
            <th> ID do Pre requisito </th>
            <th> Creditos </th>
          </tr>

          <?php

            while ( $linha = $result->fetch_assoc() ) {
        
              echo "<tr> <td>" . $linha["nome"] . "</td>" .
                    "<td>" . $linha["id"] . "</td>" .
                    "<td>" . $linha["periodo"] . "</td>" .
                    "<td>" . $linha["idPreReq"] . "</td>" .
                    "<td>" . $linha["creditos"] . "</td>" .
                    "</tr>";

            }

          ?>

        </table>

      </div>


    </body>

</html>