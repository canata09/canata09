<?php 
    $lineA = readline ("Enter a line: ");
    $lineB = readline ("Enter a line: ");

    //throw if one line is empty
    if (empty($lineA) || empty($lineB)) {
        throw new Exception("One of the lines is empty");
    }

    //throw if one line is not a number
    if (!is_numeric($lineA) || !is_numeric($lineB)) {
        throw new Exception("One of the lines is not a number");
    }

    //cast to int
    $valueA = (int)$lineA;
    $valueB = (int)$lineB;

    //throw if one value is 0
    if ($valueA == 0 || $valueB == 0) {
        throw new Exception("One of the values is 0");
    }

    //find the greatest common divisor
    $lcm = $valueA * $valueB / gcd($valueA, $valueB);

    //print the result
    echo "The lowest common multiple of $valueA and $valueB is $lcm";

    //implement the gcd function
    function gcd($a, $b) {
        if ($b == 0) {
            return $a;
        }
        return gcd($b, $a % $b);
    }




    
    

?>