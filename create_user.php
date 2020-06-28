<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "loja";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO usuario (nome, email, cnpj, fone, acões)
  VALUES ('eglisbrenner', 'brennerborges2012@gmail.com', '637.047.680-30', '99886655')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Novo usuario cadastrado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 