<?php 

//RECEBER OS DADOS DO INPUT
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  var_dump($dados);

  if(!empty($dados ['btn-gerar'])){

  }else {
    header("Location: index.php");
  }
?>