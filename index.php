<html>
  <head>
    <title>PHP Test</title>
  </head>
  
  <body>
  <h1> Texto em HTML! </h1>
    
    <?php
      echo '<h1>Texto em PHP!</h1>';  
      $dia = 8;
      $mes = 3;
      $ano = 2022;

      echo 'Hoje é dia '.$dia.'/'.$mes.'/'.$ano;

      $data_atual .= $dia;
      $data_atual .= "/".$mes;
      $data_atual .= "/".$ano;
      $data_atual .= "<br>";

      echo "<br>Exemplo de concatenação ".$data_atual;
      echo "Soma = ".($dia + $mes);
    ?> 
  </body>
</html>