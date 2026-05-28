<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers):int{
        $partes = explode(",", $numbers);
        if(strlen($numbers) == 0){return 0;}
        if(strlen($numbers) == 1){return intval($numbers);}
        return array_sum($partes);
    }
}