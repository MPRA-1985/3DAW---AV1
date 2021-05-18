<?php

  //Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "av1daw";

  $id = $_POST['num'];

  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  //Passar o comando sql para inserir a tabela

  $query =  "SELECT * FROM disciplina WHERE id='$id'";
  $result = $conn->query($query);

  if ( $result ) {
    
    $query =  "DELETE FROM disciplina WHERE id='$id'";

    // deleta a disciplina
    $result = $conn->query($query);

    echo "<script>alert('Disciplina deletada com sucesso!'); location= 'apagar.html';</script>";
  
  } else {
     echo "erro!";
  }

?>


