<?php

$brackets = array(")", "(","(",")","(",")",")");


function isBracketsValid($brackets) {

    $pool = [];
    

    foreach ($brackets as $bracket) {
    

        switch ($bracket) {
            
            
            case '(':
                array_push($pool, 0);
                break;
                
            case ')':
                if (array_pop($pool) !== 0)
                    return false;
                break;
            
            default: break;
            
        }
    
    }
    
    return empty($pool);
    
}


var_dump(isBracketsValid($brackets));
