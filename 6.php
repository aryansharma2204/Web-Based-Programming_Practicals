<?php

// Bubble Sort
function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Selection Sort
function selectionSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Swap
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

// Insertion Sort
function insertionSort($arr)
{
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Merge Sort
function mergeSort($arr)
{
    $n = count($arr);
    if ($n <= 1) {
        return $arr;
    }

    $mid = (int) ($n / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = $j = 0;

    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < $leftLength) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Example usage
$arr = [9, 5, 1, 8, 3, 7, 2, 6, 4];
echo "Original array: " . implode(", ", $arr) . "\n\n";

// Bubble Sort
$sortedArr = bubbleSort($arr);
echo "Bubble Sort: " . implode(", ", $sortedArr) . "\n";

// Selection Sort
$sortedArr = selectionSort($arr);
echo "Selection Sort: " . implode(", ", $sortedArr) . "\n";

// Insertion Sort
$sortedArr = insertionSort($arr);
echo "Insertion Sort: " . implode(", ", $sortedArr) . "\n";

// Merge Sort
$sortedArr = mergeSort($arr);
echo "Merge Sort: " . implode(", ", $sortedArr) . "\n";
?>
