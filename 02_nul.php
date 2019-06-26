<?php

// null 空类型
// 
// 1,未定义的变量
// 2,定义但是未付值的变量
// 3,定义赋值但是被销毁的变量
// 4,赋值为null的变量
// 
// 总结:前3种会报错
//     赋值时null必须小写
//     

// 1,未定义

var_dump($a);

// 2,定义未付值

$a;
var_dump($a);


// 3,被销毁的变量 被unset()函数销毁的变量

// 定义变量
$a = 100;

// 使用函数unset()销毁变量

unset($a);

var_dump($a);

// 4,直接赋值null的变量

$a = null;

var_dump($a);



echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';