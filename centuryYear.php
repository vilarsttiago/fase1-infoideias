/**
 * @author Tiago Vilar <vilarsttiago@gmail.com>
 * 
 * 
 * @param float $year
 * @return float
 * 
 * **/

function centuryYear($year){
    $century = $year / 100;
    
    return ceil($century);
}
