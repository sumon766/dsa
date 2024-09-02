<?php

    //Find the maximum sum of a contiguous subarray using Kadane's Algorithm

    function max_sum($arr) {
        if(empty($arr)) {
            return;
        }

        $current_sum = $arr[0];
        $maximum = $arr[0];

        for($i = 0; $i < count($arr); $i++) {
            $current_sum = max($arr[$i], $current_sum + $arr[$i]);
            $maximum = max($current_sum, $maximum);
        }

        return $maximum;
    }

    print_r(max_sum([-2, 5, 2, -4, 1]))

?>