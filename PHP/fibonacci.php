<?php
    //Fibonacci numbers algorithm

    function fibonacci($prev1, $prev2) {
        echo $prev2;
        echo "<br>";
        echo $prev1;
        echo "<br>";

        for($i = 0; $i < 18; $i++) {
            $new_fibonacci = $prev2 + $prev1;
            echo $new_fibonacci . "<br>";
            $prev2 = $prev1;
            $prev1 = $new_fibonacci;
        }
    }

    fibonacci(1, 0);



    //Fibonacci numbers algorithm using recursion
    
    echo "<br><br><br>";

    function fiboRecursion($last1, $last2, $count) {
        echo $last2 . "<br>";
    
        if ($count < 17) {
            $newFibo = $last1 + $last2;
            $last1 = $last2;
            $last2 = $newFibo;
            fiboRecursion($last1, $last2, $count + 1);
        }
    }

    fiboRecursion(1, 0, 0);

?>