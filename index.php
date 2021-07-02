<!DOCTYPE html>
    <?php

    include 'funcao.php';

    $titulo = "Jogo de cartas";
    $jogador = isset($_POST['jogador']) ? $_POST['jogador'] : ""; 
    $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : 0;
    $naipe = isset($_POST['naipe']) ? $_POST['naipe'] : 0;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    $cartas = sortear($numeros);
    $cartasComp = sortearComp($numeros);
    $totalComp = somarC($cartasComp, $numeros);


    ?>

    <head> 
        <meta cherset="UTF-8">
        <title><?php echo $titulo?></title>
        <html lang="pt-BR";>
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
    <center><h4>Jogo de Cartas</h4></center><hr>
    <form method="post" action="">
        Jogador: <input type="text" name="jogador" required="true" id="jogador" placeholder="Insira o nome do jogador"
            value="<?php echo $jogador;?>"/>
            <br>
        Escolha o Naipe: <br>
        <input type="radio" name="naipe" value="ouros" <?php if($naipe == 'ouros') echo 'checked';?>/> Ouro <br>
        <input type="radio" name="naipe" value="copas" <?php if ($naipe == 'copas') echo 'checked'; ?>/> Copas <br>
        <input type="radio" name="naipe" value="paus" <?php if ($naipe == 'paus') echo 'checked'; ?>/> Paus <br>
        <input type="radio" name="naipe" value="espadas" <?php if ($naipe == 'espadas') echo 'checked'; ?>/> Espadas <br>

        Escolha o número de cartas desejadas: <br>
            <select name="numeros" id="numeros">
            <option value="2" <?php if ($numeros == 2) echo 'selected'; ?>>2 </option>
            <option value="3" <?php if ($numeros == 3) echo 'selected'; ?>>3 </option>
            <option value="4" <?php if ($numeros == 4) echo 'selected'; ?>>4 </option>
            <option value="5" <?php if ($numeros == 5) echo 'selected'; ?>>5 </option>
            <option value="6" <?php if ($numeros == 6) echo 'selected'; ?>>6 </option>
            </select>
<br><br>
<?php

    for ($x = 0; $x < $numeros; $x++){
      echo "<input type='hidden' name='h".($x+1)."' value='".$cartas[$x]."'>";
    }
    

    ?>
        <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
        <button type="submit"  name="acao" id="acao" value="jogar">Jogar</button>
        <br><hr>
    </form> 
    <?php
    if ($acao == 'jogar'){

      
        $totalJ = isset($_POST['total']) ? $_POST['total'] : 0; 
      
        $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
        $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
        $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
        $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
        $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
        $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;

        $totalJ = somarJ($h1, $h2, $h3, $h4, $h5, $h6);
  
        if ($h1 != 0)
          echo "Carta 1: ".$h1."<br>";
        if ($h2 != 0)
          echo "Carta 2: ".$h2."<br>";
        if ($h3 != 0)
          echo "Carta 3: ".$h3."<br>";
        if ($h4 != 0)
          echo "Carta 4: ".$h4."<br>";
        if ($h5 != 0)
          echo "Carta 5: ".$h5."<br>";
        if ($h6 != 0)
          echo "Carta 6: ".$h6."<br>";

          echo "Total do Jogador: $totalJ";
          somarJ($h1, $h2, $h3, $h4, $h5, $h6);
          echo "<br>";
          echo "<hr>";
          //*$somaTotal = $h1 + $h2 + $h3 + $h4 + $h5 + $h6;
          
          echo "Cartas do computador:<br> <br>";
          echo "<center>";
          mostrarCartasComp($cartasComp,$naipe);
          echo "</center";
          echo "<hr>";

          echo "Total do computador: $totalComp<br><hr>";  
          if($totalJ > $totalComp){
            echo "<h1>Parabéns! O usuário, $jogador ganho essa partida!</h1>";
          } else if ($totalComp > $totalJ){
            echo "<h2>Que pena, o computador ganhou essa partida.</h2>";
          } else if ($totalComp == $totalJ){
            echo "<h3>Empate! </h3>";
          }

          
}       
elseif ($acao == 'sortear'){
    mostrarCartas($cartas,$naipe);
    //*mostrarCartasComp($cartasComp,$naipe);
  }
  
?>
</body>
</html>