<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "testpoke";



$mysqli = new mysqli($host, $usuario, $senha, $bd);
if ($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
else
    echo "Conexão com o banco sucedida";


    //$sql = "INSERT INTO Usuario (cd_usuario, username, email, experiencia, dinheiro)
    /*VALUES (1, 'Nikita San', 'NikitaSan@MeuEmail.com', 0, 1000)";
    if (mysqli_query($mysqli, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }*/
 ?>
