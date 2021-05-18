<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "av1daw";
  //$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
  $nome = $_POST['nome'];
  $id = $_POST['num'];
  $periodo = $_POST['periodo'];
  $idPreReq = $_POST['preReq'];
  $creditos = $_POST['creditos'];

  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO disciplina (nome, id, periodo, idPreReq, creditos) VALUES ('$nome', '$id', '$periodo', '$idPreReq', '$creditos')";

  if(!$conn->query($query)) {
    echo "erro!";
  } else {
    echo "<script>alert('Cadastro realizado com sucesso'); location= 'criarDisciplina.html';</script>";
  }


?>


