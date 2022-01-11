<?php

    /**
     * @author Tiago Vilar <vilarsttiago@gmail.com>
     * 
     * 
     * @param int $start
     * @param int $end
     * 
     * @return array
     * @return int
     * 
     * **/
    
    function Primes($start, $end){
        
        $primes = [];
        
        if((is_int($start) && is_int($end)) && ($start < $end)){
            
            for($i = $start + 1; $i < $end; $i++){
                
                $dividers = 0;
                
                for($j = 1; $j <= $i; $j++){
                    
                    if($i % $j == 0){
                        $dividers++;
                    }    
                }
                
                if($dividers == 2){
                    array_push($primes, $i);
                }
                
            }
        
            return $primes;
            
        }else{
            return -1;
        }
        
    }
    
    /** 
     * Example
     * 
    **/
    
    $primos = Primes(1, 100);
    
    echo("Encontrados ". count($primos) . " números primos, são eles: [");
    
    foreach($primos as $index => $primo){
        if($index === array_key_last($primos)){
            echo($primo);
        }else{
            echo($primo . ", ");
        }
    }
    
    echo ("].")

?>
