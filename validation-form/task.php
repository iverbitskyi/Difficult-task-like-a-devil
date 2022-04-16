<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7);
    $sum = array_sum($arr);
    $reserv = array();
    $result = array();
    $iter = 0; 

    if ($sum % 2 == 0) {
        for ($i = 0; $i < 7; $i++) {
            $arr1 = array();
            $arr2 = array();
            
            if ($arr[$i] % 2 == 0) {
                array_push($arr1, $arr[$i]);
                array_push($arr2, $arr[$i]);

                $result = array_merge($reserv, array_slice($arr, ($i + 1)));
                rsort($result);

                $half_sum1 = array_sum($result) / 2;
                $half_sum2 = array_sum($result) / 2;
                
                for ($j=0; $j < count($result); $j++) { 
                    if (($half_sum1 - $result[$j]) == 0 && count($arr1) != 3) {
                        array_push($arr2, $result[$j]);
                        $half_sum2 = $half_sum2 - $result[$j];
                    } else if (($half_sum2 - $result[$j]) == 0 && count($arr2) != 3) {
                        array_push($arr1, $result[$j]);
                        $half_sum1 = $half_sum1 - $result[$j];
                    } else if (($half_sum1 - $result[$j]) >= 0) {
                        array_push($arr1, $result[$j]);
                        $half_sum1 = $half_sum1 - $result[$j];
                    } else if (($half_sum2 - $result[$j]) >= 0) {
                        array_push($arr2, $result[$j]);
                        $half_sum2 = $half_sum2 - $result[$j];
                    }
                }

                $string1 = implode(", ", $arr1);
                $string2 = implode(", ", $arr2);
                $iter += 1;
                
                echo("<hr class='featurette-divider'>");
                echo("Варіант розв'язку - $iter<br/>");
                echo("Елементи першого 2x2 квадрата: $string1. Елементи другого 2x2 квадрата: $string2. Спільний елемент для двох масивів - $arr[$i]<br/>");
                
                array_push($reserv, $arr[$i]);
            } else {
                array_push($reserv, $arr[$i]);
            }
        }
    } else {
        # тут дальше буде інша умова, але вона поки тут не потрібна
    }