<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers):int{
        if(strlen($numbers) == 0){return 0;}
        return (intval($numbers));
    }
}