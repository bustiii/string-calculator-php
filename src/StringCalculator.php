<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers):int{
        $numbers = str_replace("\n", ",", $numbers);
        $nums = explode(",", $numbers);
        if(strlen($numbers) == 0){return 0;}
        return array_sum($nums);
    }
}