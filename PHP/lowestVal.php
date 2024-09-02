<?php

    //Find the lowest number in an Array

    function lowestVal($arr) {
        $minVal = $arr[0];

        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] < $minVal) {
                $minVal = $arr[$i];
            }
        }

        return $minVal;
    }

    print_r(lowestVal([7, 12, 9, 4, 11]));



    //Find the second largest number in an Array
    echo "<br><br><br>";

    function secondLargest($arr) {
        if(empty($arr)) {
            return;
        }

        $largest = PHP_INT_MIN;
        $secondLargest = PHP_INT_MIN;

        foreach($arr as $num) {
            if($num > $largest) {
                $secondLargest = $largest;
                $largest = $num;
            }

            if($num > $secondLargest && $num < $largest) {
                $secondLargest = $num;
            }
        }

        return $secondLargest;
    }

    print_r(secondLargest([7, 12, 9, 4, 11]));



    //Find the second lowest number in an Array
    echo "<br><br><br>";

    function secondlowest($arr) {
        if(empty($arr)) {
            return;
        }

        $smallest = PHP_INT_MAX;
        $secondSmallest = PHP_INT_MAX;

        foreach($arr as $num) {
            if($num < $smallest) {
                $secondSmallest = $smallest;
                $smallest = $num;
            }

            if($num < $smallest && $num > $secondSmallest) {
                $secondSmallest = $num;
            }
        }

        return $secondSmallest;
    }

    print_r(secondlowest([7, 12, 9, 4, 11]));

?>