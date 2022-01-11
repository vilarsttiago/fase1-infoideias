<?php

    /**
     * @author Tiago Vilar <vilarsttiago@gmail.com>
     * 
     * **/
     
    define("MIN", 1);
    define("MAX", 10);
    
    
    $array_rand = [];
    $array_rand_unique = [];
    
    for($i = 0; $i <20; $i++){
        array_push($array_rand, mt_rand(MIN, MAX));
    }
    
    
    $array_count_itens = array_count_values($array_rand);
    
    
    foreach($array_count_itens as $index => $item){
        if($item == 1){
            array_push($array_rand_unique, $index);
        }
    }
    
    // Imprime o array sorteado
    
    echo("Array sorteado: [");
    foreach($array_rand as $index => $item){
        if($index === array_key_last($array_rand)){
            echo($item);
        }else{
            echo($item . ", ");
        }
    }
    echo("]. \n");
    
    // Imprime os Itens únicos
    
    if(count($array_rand_unique) == 0){
        echo("Todos os números se repetem!");
        
    }else if(count($array_rand_unique) == 1){
        
        echo("o Único numero que não se repete é o : " . $array_rand_unique[0]);
        
    }else {
        
        echo("Os números que não se repetem são: [");
        
        foreach($array_rand_unique as $index => $item){
            if($index === array_key_last($array_rand_unique)){
                echo($item);
            }else{
                echo($item . ", ");
            }
        }
        
        echo("].");
        
    }
    
   

?>
