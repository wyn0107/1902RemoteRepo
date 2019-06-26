<?php

// 数组 Array / arr
// 以键值对的形式存储一个或者多个数据单元
//
// 语法1 旧版本(php7.0以前),不推荐使用

$arr1 = array(1, 2, 3, 4, 5, 6);

// var_dump($arr1);

// 语法2 新版本

$arr2 = [1, 2, 3, 4, 5];
// var_dump($arr2);

// 查询或者输出数组内容
// 使用print_r()

// 使用echo输出数组,程序执行报错,只会输出Array英文单词
// echo  $arr1;

echo '<pre>';
print_r($arr1);
echo '</pre>';

echo $arr1[1];

// 数组的键名
//
// 数组的键名是数据的编号序号,用于存储不同的数据,通过键名可以调取存储的相关数据信息
//
// 如果定义数组时,没有给数据单元定义键名,php程序会自动添加从0开始的整数键名
//
// 人为定义的键名,可以是数值或者是字符串,字符串键名必须添加定界符
//
// 键名的格式也只能是整数或者字符串
//
// php程序中,只要是字符串,必须有定界符
//
// 键名是字符串,数据时字符串,调用字符串键名,都必须添加定界符
//
// 如果是数字键名,称为索引数组
//
// 如果是字符串键名,称为关联数组
//
// php程序中,不区分关联索引数组,可以同时存在于一个数组中

// $数组 = [
//     键名 => 数值,
// ];

$arr3 = [
    'name' => '张三',
    'age'  => 18,
    'sex'  => '男',
    'addr' => '北京',
    0      => '重庆',
    10     => '成都',
];

echo '<pre>';
print_r($arr3);
echo '</pre>';

echo $arr3['name'];