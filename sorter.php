<?php

/**
 * Bubble Sort for array with 10 elements
 * makes 110 steps
 *
 * @param array $array
 * @return array
 */
function bubbleSort(array $array)
{
    $myCount = 0;
    $size = count($array) - 1;

    for ($i = 0; $i <= $size; $i++){
        for ($j = 0; $j <= $size - 1; $j++){
            if ($array[$j + 1] < $array[$j]){
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
            }
            $myCount++;
        }
    }

    echo $myCount;
    return $array;
}

/**
 * Shake Sort for array with 10 elements
 * makes 66 steps
 *
 * @param array $array
 * @return array
 */
function shakerSort(array $array)
{
    $myCount = 0;
    $size = count($array) - 1;

    do{
        $swapped = false;
        for ($i = 0; $i < $size - 1; $i++){
            if ($array[$i + 1] < $array[$i]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
                $swapped = true;
            }
            $myCount++;
        }

        if ($swapped == false) break;

        $swapped = false;
        for ($j = $size; $j > 0; $j--){
            if ($array[$j] < $array[$j - 1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j - 1] = $tmp;
                $swapped = true;
            }
            $myCount++;
        }
    } while ($swapped);

    echo $myCount;
    return $array;
}

/**
 * Comb Sort for array with 10 elements
 * makes 87 steps
 *
 * @param array $array
 * @return array
 */
function combSort(array $array)
{
    $myCount = 0;
    $size = count($array);
    $gap = count($array);
    $swap = true;

    while ($gap > 1 || $swap){
        if ($gap > 1){
            $gap /= 1.25;
        }
        $swap = false;
        $i = 0;

        while (($i + $gap) < $size){
            if ($array[$i] > $array[$i + $gap]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + $gap];
                $array[$i + $gap] = $tmp;
            }
            $i++;
            $myCount++;
        }
    }

    echo $myCount;
    return $array;
}

/**
 * Comb Sort for array with 10 elements
 * makes 33 steps
 *
 * @param array $array
 * @return array
 */
function insertionSort(array $array)
{
    $myCount = 0;
    $size = count($array);
    for ($i = 1; $i < $size; $i++){
        $current = $array[$i];
        $previous = $i - 1;

        while ($array[$previous] > $current){
            $array[$previous + 1] = $array[$previous];
            $previous--;
            $myCount++;
        }
        $array[$previous + 1] = $current;
    }

    echo $myCount;
    return $array;
}

$notSortedArray = [119,4,79,3,8,46,2,6,1,9,15];
$result1 = bubbleSort($notSortedArray);
echo PHP_EOL;
$result2 = shakerSort($notSortedArray);
echo PHP_EOL;
$result3 = combSort($notSortedArray);
echo PHP_EOL;
$result4 = insertionSort($notSortedArray);
print_r($result4);