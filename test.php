<?php
/**
 * Created by PhpStorm.
 * User: hunit
 * Date: 19. 4. 20
 * Time: 오후 5:13
 */
$test = array(1,2,3,4,5);
$answer = array(2,2,3,1,4);
$res = 0;
$count = 0;
for($i = 0; $i < count($test); $i++){
    if($test[$i] == $answer[$i]){
        $count = 1;
    }else{
        $count = 0;
    }
    $count == 1 ? $res = '정답': $res = '오답';
    echo $res;

}