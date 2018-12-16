<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/12/16 0016
 * Time: 18:24
 */
//ADT(合并两个线性表)抽象数据类型
$List1=[1,5,3,2];
$List2=[1,8,9,4,6,7];
function union($list1,$list2){
    $length1 = count($list1);
    $length2 = count($list2);
    for($i=0;$i<$length2;$i++){
        if(!in_array($list2[$i],$list1)){
            $list1[$length1++] = $list2[$i];
        }
    }
    return $list1;
}
$result = union($List1,$List2);
print_r($result);
