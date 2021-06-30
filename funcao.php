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