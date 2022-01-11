<?php

    /**
     * @author Tiago Vilar <vilarsttiago@gmail.com>
     * @param array(int)
     * 
     * @return boolean
     * **/
     
    function Asc_sequence($array_int){
        
        $erro = 0;
        
        if(count($array_int) <= 2){
            return true;
        }
        
        for($i = 0; $i < count($array_int) - 1; $i++){
            if($array_int[$i] > $array_int[$i + 1]){
                $erro++;
            }
        }
        
        if($erro > 1){
            return false;
        }else{
            return true;
        }
    }
    
    $array = [1,12, 2, 3, 1];
        
    echo("[");
    foreach($array as $index => $item){
        if($index === array_key_last($array)){
            echo($item);
        }else{
            echo($item . ", ");
        }
    }
    echo("] ");
    
    // run function
    if(Asc_sequence($array)){
        echo("True.");
    }else{
        echo("False.");
    }
?>
