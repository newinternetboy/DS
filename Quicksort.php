<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/12/14 0014
 * Time: 22:15
 */
//找基准，大于基准的放在右边，小于基准的放在左边
function Quicksort(array $array){
    $count = count($array);
    $pivot = $array[0];
    if ($count <= 1) { // 基线条件为空或者只包含一个元素，只需要原样返回数组
        return $array;
    }
    $left = [];
    $right = [];
    for($i=0;$i<$count;$i++){
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } elseif($array[$i] > $pivot) {
            $right[] = $array[$i];
        }
    }
    $left = Quicksort($left);
    $right= Quicksort($right);
    return array_merge($left,[$array[0]],$right);
}
function QuickSort2(array $container)
{
    $count = count($container);
    if ($count <= 1) { // 基线条件为空或者只包含一个元素，只需要原样返回数组
        return $container;
    }
    $pivot = $container[0]; // 基准值 pivot
    $left  = $right = [];
    for ($i = 1; $i < $count; $i++) {
        if ($container[$i] < $pivot) {
            $left[] = $container[$i];
        } else {
            $right[] = $container[$i];
        }
    }
    $left  = QuickSort($left);
    $right = QuickSort($right);
    return array_merge($left, [$container[0]], $right);
}
$result = Quicksort2([3,1,6,2,1,7]);
print_r($result);
