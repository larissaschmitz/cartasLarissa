<?php

    function sortear($numeros){
        $cartas = array();
        $somar = 0;
        for ($x = 0; $x < $numeros; $x++){
            $n = rand(1,13);
            if(in_array($n, $cartas)){
                $cartas = array_diff($cartas, $cartas);
                $x=0;
            }
            $cartas[] = $n;      
        }
        sort($cartas);
        return $cartas;
    }




    function mostrarCartas($cartas, $naipe){
        $cont=1;
        $contador=1;
        if($naipe == 'ouros')
            echo "<h5>O naipe escolhido é: Ouro</h5>";
       elseif ($naipe == 'copas')
            echo "<h5>O naipe escolhido é: Copas</h5>";
       elseif ($naipe == 'paus')
            echo "<h5>O naipe escolhido é: Paus</h5>";
       elseif ($naipe == 'espadas')
            echo "<h5>O naipe escolhido é: Espadas</h5>";
            echo "<table><tr>";
    
            foreach ($cartas as $c){
                if($c == 1){
                    echo "<td>A</td>";
                }  else if ($c == 11){
                    echo "<td>J</td>";
                }  else if ($c == 12){
                    echo "<td>Q</td>";
                }  else if ($c == 13){
                    echo "<td>K</td>";
                } else {
                echo "<td>" .$c."</td>";}
                if($c == 1){
                    echo "<img src='img/$naipe/a-$naipe.png' width='200' height='291'>";
                } for($cont = 2; $cont <= 10; $cont++){
                    if ($c == $cont){
                    echo "<img src='img/$naipe/$cont-$naipe.png' width='200' height='291'>";
                    }
                } if ($c==11){
                    echo "<img src='img/$naipe/j-$naipe.png' width='200' height='291'>";
                } else if ($c==12){
                    echo "<img src='img/$naipe/q-$naipe.png' width='200' height='291'>";
                } else if ($c==13){
                    echo "<img src='img/$naipe/k-$naipe.png' width='200' height='291'>";
                } 
    }}
            echo "</tr></table>";
            function sortearComp($numeros){
                $cartasComp = array();
                for ($y = 0; $y < $numeros; $y++){
                    $comp = rand(1,13);
                    if(in_array($y, $cartasComp)){
                        $cartasComp = array_diff($cartasComp, $cartasComp);
                        $y=0;
                    }
                    $cartasComp[] = $comp;           
                }
                sort($cartasComp);
                return $cartasComp;
            }

            


?>