<?php

    //QuickSort Algorithm

    function partition(&$array, $low, $high) {
        $pivot = $array[$high];
        $i = $low - 1;

        for($j = $low; $j < $high; $j++) {
            if($array[$j] <= $pivot) {
                $i++;

                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }

        $temp = $array[$i + 1];
        $array[$i + 1] = $array[$high];
        $array[$high] = $temp;

        return $i + 1;
    }

    function quickSort(&$array, $low = 0, $high = null) {
        if($high === null) {
            $high = count($array) - 1;
        }

        if($low < $high) {
            $pivotIndex = partition($array, $low, $high);
            quickSort($array, $low, $pivotIndex - 1);
            quickSort($array, $pivotIndex + 1, $high);
        }
        
    }

    $myArray = [64, 34, 25, 12, 22, 11, 90, 5];
    quickSort($myArray);
    echo "Sorted array: " . implode(", ", $myArray) . "\n";

?>
