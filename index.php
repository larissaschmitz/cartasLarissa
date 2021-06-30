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
    $z=0;

    ?>

    <head> 
        <meta cherset="UTF-8">
        <title><?php echo $titulo?></title>
        <html lang="pt-BR";>
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
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

    

    for ($z = 0; $z < $numeros; $z++){
        echo "<input type='hidden' name='z".($z+1)."' value='".$cartasComp[$z]."'>";
      }
    ?>
        <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
        <button type="submit"  name="acao" id="acao" value="jogar">Jogar</button>
    </form> 
    <?php
    if ($acao == 'jogar'){
    
        $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
        $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
        $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
        $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
        $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
        $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;
  
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
         
          echo "Computador <br>";
          $z1 = isset($_POST['z1']) ? $_POST['z1'] : 0;
          $z2 = isset($_POST['z2']) ? $_POST['z2'] : 0;
          $z3 = isset($_POST['z3']) ? $_POST['z3'] : 0;
          $z4 = isset($_POST['z4']) ? $_POST['z4'] : 0;
          $z5 = isset($_POST['z5']) ? $_POST['z5'] : 0;
          $z6 = isset($_POST['z6']) ? $_POST['z6'] : 0;
    
          if ($z1 != 0)
            echo "Carta 1: ".$z1."<br>";
          if ($z2 != 0)
            echo "Carta 2: ".$z2."<br>";
          if ($z3 != 0)
            echo "Carta 3: ".$z3."<br>";
          if ($z4 != 0)
            echo "Carta 4: ".$z4."<br>";
          if ($z5 != 0)
            echo "Carta 5: ".$z5."<br>";
          if ($z6 != 0)
            echo "Carta 6: ".$z6."<br>";
            
            
       
}       
elseif ($acao == 'sortear'){
    mostrarCartas($cartas,$naipe);}
  
?>
</body>
</html>