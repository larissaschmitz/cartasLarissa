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
                for ($w = 0; $w < $numeros; $w++){
                    $comp = rand(1,13);
                    if(in_array($comp, $cartasComp)){
                        $cartasComp = array_diff($cartasComp, $cartasComp);
                        $w=0;
                    }
                    
                    $cartasComp[] = $comp;      
                }
                sort($cartasComp);
                return $cartasComp;
            }
            

            function mostrarCartasComp($cartasComp, $naipe){
                echo "<table><tr>";
            foreach ($cartasComp as $u){
                //* aqui escolha do naipe;
                if($u == 1){
                    echo "<td>A</td>";
                }  else if ($u == 11){
                    echo "<td>J</td>";
                }  else if ($u == 12){
                    echo "<td>Q</td>";
                }  else if ($u == 13){
                    echo "<td>K</td>";
                } else {
                echo "<td>" .$u."</td>";}
                if($u == 1){
                    echo "<img src='img/$naipe/a-$naipe.png' width='200' height='291'>";
                } for($contB = 2; $contB <= 10; $contB++){
                    if ($u == $contB){
                    echo "<img src='img/$naipe/$contB-$naipe.png' width='200' height='291'>";
                    }
                } if ($u==11){
                    echo "<img src='img/$naipe/j-$naipe.png' width='200' height='291'>";
                } else if ($u==12){
                    echo "<img src='img/$naipe/q-$naipe.png' width='200' height='291'>";
                } else if ($u==13){
                    echo "<img src='img/$naipe/k-$naipe.png' width='200' height='291'>";
                } }

            echo "</tr></table>";}
            


function somar($cartas, $numeros){
    $totalJogador = 0;
    for($contadorD = 0; $contadorD < $numeros; $contadorD++){
        $totalJogador = $cartas[$contadorD] + $totalJogador;
    }
    return $totalJogador;
}

function somarC($cartasComp, $numeros){
    $totalComp = 0;
    for($contadorD = 0; $contadorD < $numeros; $contadorD++){
        $totalComp = $cartasComp[$contadorD] + $totalComp;
    }
    return $totalComp;
}


?>