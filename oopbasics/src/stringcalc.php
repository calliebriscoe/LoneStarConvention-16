<?php

class stringcalc
{
    public function processString($stringInput = "")
    {
        if($stringInput == ""){
          return 0;
        }

        $arrayIntegar = explode(" ",$stringInput);

        $arrayCount = count($arrayIntegar);
        $sumString = 0;
        for($i = 0; $i < $arrayCount; $i++){
          $sumString = $sumString + intval($arrayIntegar[$i]);
        };

        return $sumString;
    }
}
