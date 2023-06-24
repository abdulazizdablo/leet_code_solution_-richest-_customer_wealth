<?php

class Solution {

/**
 * @param Integer[][] $accounts
 * @return Integer
 */
function maximumWealth($accounts) {

$max_value_array = [];

    foreach($accounts as $key=>$array){

        $max_value_array[] = array_sum($accounts[$key]);

    }

   

   return max($max_value_array);
    
}


}

$solu = new Solution();

$accounts = [[1,2,3],[3,2,1]];
$solu->maximumWealth($accounts);
