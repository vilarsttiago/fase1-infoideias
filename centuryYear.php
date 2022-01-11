<?php

    /**
     * @author Tiago Vilar <vilarsttiago@gmail.com>
     * 
     * 
     * @param int $year
     * @return float
     * @return int
     * 
     * **/

    function centuryYear($year){

        if(is_int($year)){

            $century = $year / 100;

            return ceil($century); 

        }else{
            return -1;
        }

    }

?>
