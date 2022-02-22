<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "bancodedados";
  $dbname = "cadastro";

  $conn = mysql_connect($servidor, $usuario, $senha, $dbname);

  if($conn->connect_error){
     echo "Desconectado! erro: " . $conn->connect_error;
  }else{
     echo "Conectado!";

  }
  ?>
