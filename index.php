<!DOCTYPE html>
    <?php

    include 'funcao.php';

    $titulo = "Jogo de cartas";
    $jogador = isset($_POST['jogador']) ? $_POST['jogador'] : ""; 
    $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : 0;
    $naipe = isset($_POST['naipe']) ? $_POST['naipe'] : 0;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
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
            </body><button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
            <button type="submit"  name="acao" id="acao" value="jogar">Jogar</button>
    </form>  
</html>