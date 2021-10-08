<?php 
/*1.посчитать длину массива 
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr, COUNT_RECURSIVE);*/

//2.переместить первые 4 элемента массива в конец массива
/*$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$v = $arr[0];
$p = $arr[1];
$o = $arr[2];
$t = $arr[3];
unset($arr[0], $arr[1],  $arr[2],  $arr[3]);   //Array ( [4] => 31 [5] => 4 [6] => 1 [7] => 8 [8] => 6 [0] => 1 [1] => 2 [2] => 3 [3] => 7 )
$arr[0]=$v;
$arr[1]=$p;
$arr[2]=$o;
$arr[3]=$t;
print_r($arr);*/

/*3.получить сумму 4,5,6 элемента
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$my_arr = array_sum(array_slice($arr, 3, 3));
echo $my_arr;                                 //42
*/


/*4. найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];
var_dump(array_diff_key($secondArr, $firstArr)); //array(2) { ["seven"]=> int(22) ["six"]=> int(37) } }*/

//5. найти все элементы которые присутствую в первом и отсутствуют во втором
/*$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];
var_dump(array_diff_key($firstArr, $secondArr));*/  //array(1) { ["two"]=> int(2) }

//6. найти все элементы значения которых совпадают 
/*$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];
var_dump (array_intersect($firstArr, $secondArr)); //array(2) { ["one"]=> int(1) ["foure"]=> int(5) } */

/*7.найти все элементы значения которых отличается ///////////////////////////////////////
$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];
var_dump ( array_diff($firstArr, $secondArr));
var_dump ( array_diff($secondArr, $firstArr)); */ // array(3) { ["two"]=> int(2) ["three"]=> int(3) ["five"]=> int(12) }

/*8.получить все вторые элементы вложенных массивов/////////////////////////////
$firstArr = [
  'one' => 1,
  'two' => ['one' => 1, 'seven' => 22, 'three' => 32,],
  'three' => ['one' => 1, 'two' => 2,],
  'foure' => 5,
  'five' => ['three' => 32, 'foure' => 5,'five' => 12,],  
];
не зробила
};*/

// массив $arr сейчас таков: array(2, 4, 6, 8)
//unset($value); 



	
/*$array = [
    [1, 2],
    [3, 4],
];
foreach ($array as list($a)) {
    // Обратите внимание на отсутствие $b.
    echo "$a\n";
}
*/
 
/*9. получить общее количество элементов в массиве
$firstArr = [
  'one' => 1,
  'two' => [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  ],
  'three' => [
  'one' => 1,
  'two' => 2,
  ],
  'foure' => 5,
  'five' => [
  'three' => 32,
  'foure' => 5,
  'five' => 12,
],  
];

var_dump(count( $firstArr, COUNT_RECURSIVE));*/    //int(13) 

 /*10. получить сумму всех значений в массиве
 $firstArr = [
  'one' => 1,
  'two' => ['one' => 1, 'seven' => 22, 'three' => 32,],
  'three' => ['one' => 1, 'two' => 2,],
  'foure' => 5,
  'five' => ['three' => 32, 'foure' => 5,'five' => 12,],  
];
function sumArr( $firstArr) {
    $sum = 0;
    foreach( $firstArr as $v) {
        if (is_array($v)) {
            $sum += sumArr($v);
        } else {
            $sum += $v;
        }
    }
    return $sum;
}
echo sumArr( $firstArr);    */  //////    113






