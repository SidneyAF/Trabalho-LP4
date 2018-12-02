<?php
    print_r("Entrou no files");
    $c = mysqli_connect("localhost","root","","bd_musicas"); // Conexão
    $ps=mysqli_prepare($c,"INSERT musicas VALUES(?,?,?,?,?,?,?,?,?)"); // Preparação
    mysqli_stmt_bind_param($ps,"issssssss",$ID,$NMM,$NMA,$NMAL,$DTL,$NMG,$EML,$TPM,$TXTC);

      $dados = "dados.csv";
      var_dump($dados);
      $a = fopen($dados,"r");
      if ($a) {
        $lin = fgetcsv($a,100,";"); // Desconsidera 1a linha de títulos
        $lin = fgetcsv($a,100,";");
        while($lin!=null) {
          // Atribui valores às vriáveis ligadas ao Insert preparado
          $ID = $lin[0];
          $NMM = $lin[1];
          $NMA = $lin[2];
          $NMAL = $lin[3];
          $DTL = $lin[4];
          $NMG = $lin[5];
          $EML = $lin[6];
          $TPM = $lin[7];
          $TXTC = $lin[8];
          // Execução do Insert compementado com os dados nas variáveis ligadas
          header("location:/Trabalho-LP4/index.php");
          if (!mysqli_stmt_execute($ps)) {
            $erro[count($erro)]="Linha ID={$lin[0]} não inserida";
          }
          $lin = fgetcsv($a,100,";");
          echo "nao foi";
        }
        fclose($a);
      }      
?>