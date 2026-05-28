<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers):int|string{
        if(strlen($numbers) == 0){return 0;}

        if(str_starts_with($numbers, "//")){
            $separator = $numbers[2];
            $numbers = substr($numbers, 4);
            $nums = explode($separator, $numbers);
            return array_sum($nums);
        }
        $numbers = str_replace("\n", ",", $numbers);
        $nums = explode(",", $numbers);

        $negatives = array_filter($nums, fn($n) => $n < 0);
        if(!empty($negatives)){
            return "negativos no soportados: " . implode(",", $negatives);
        }

        return array_sum($nums);
    }
}