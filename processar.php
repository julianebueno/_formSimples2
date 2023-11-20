<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nomeCompleto = $_POST["nome_completo"];
    $anoNascimento = $_POST["ano_nascimento"];

    $idade = date("Y") - $anoNascimento;

    echo "Nome Completo: $nomeCompleto <br>";
    echo "Idade: $idade anos <br>";

    if ($idade >= 18) {
      echo "A pessoa é maior de idade.";
    } else {
      echo "A pessoa é menor de idade.";
    }
  }
?>