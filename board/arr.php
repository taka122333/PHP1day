<?php
$var = 1;
$var2 = '1';
$name = '斎藤';
var_dump($var);
var_dump($var2);
var_dump($name);
echo '<br>';

$arr = array(
    'saito',
    'tomohiko',
    'chiba',
    'php',
);

$arr = [
    'saito',
    'tomohiko',
    'chiba',
    'PHP',
];

var_dump($arr);
echo '<br>';
echo '<br>';

echo $arr[0];
echo '<br>';
echo '<br>';

echo $arr[1];
echo '<br>';
echo '<br>';

$arr[4] = 'man';
var_dump($arr);
echo '<br>';
echo '<br>';

$arr[2] = 'tokyo';
var_dump($arr);
echo '<br>';
echo '<br>';




$label_arr = array(
    'family_name' => 'saito',
    'first_name' => 'tomohiko',
    'pref' => 'chiba',
    'language' => 'PHP',
);

$label_arr = [
    'family_name' => 'saito',
    'first_name' => 'tomohiko',
    'pref' => 'chiba',
    'language' => 'PHP'
];

var_dump($label_arr);
echo '<br>';
echo '<br>';

echo $label_arr['language'];
echo '<br>';
echo '<br>';

$label_arr['hobby'] = 'baseball';
var_dump($label_arr);
echo '<br>';
echo '<br>';

$label_arr['language'] = 'Perl';
var_dump($label_arr);
echo '<br>';
echo '<br>';


//多次元配列
$excel_arr = array(
    array(
        'family_name' => 'saito',
        'first_name' => 'romohiko',
        'pref' => 'chiba',
        'language' => 'PHP',
    ),
    array(
        'family_name' => 'tanaka',
        'first_name' => 'youhei',
        'pref' => 'tokyo',
        'language' => 'C',
    ),
    array(
        'family_name' => 'sato',
        'first_name' => 'ichiro',
        'pref' => 'kanagawa',
        'language' => 'Java',
    ),
);

$excel_arr = [
    [
        'family_name' => 'saito',
        'first_name' => 'romohiko',
        'pref' => 'chiba',
        'language' => 'PHP',
    ],
    [
        'family_name' => 'tanaka',
        'first_name' => 'youhei',
        'pref' => 'tokyo',
        'language' => 'C',
    ],
    [
        'family_name' => 'sato',
        'first_name' => 'ichiro',
        'pref' => 'kanagawa',
        'language' => 'Java',
    ],
];

var_dump($excel_arr);
echo '<br>';
echo '<br>';

var_dump($excel_arr[1]);
echo '<br>';
echo '<br>';
echo $excel_arr[0]['language'];
echo '<br>';
echo '<br>';



echo $excel_arr[1]['pref'];
echo '<br>';
echo '<br>';
$excel_arr[1]['pref'] = 'osaka';
var_dump($excel_arr);
echo '<br>';
echo '<br>';




$excel_arr[3] = array(
    'family_name' => 'suzuki',
    'first_name' => 'jiro',
    'pref' => 'saitama',
    'language' => 'Perl',
);

var_dump($excel_arr);
echo '<br>';
echo '<br>';

$arr = array(
    'family_name' => 'yamada',
    'first_name' => 'jiro',
    'pref' => 'saitama',
    'language' => 'Perl',
);

array_push($excel_arr, $arr);
//excel_arr[] = $arr;も同じ
var_dump($excel_arr);


// //補足
$arr = [
    'saito',
    'tomohiko',
    'chiba',
    'PHP',
];

echo '<br>';
echo '<br>';
echo '<br>';
//復習
[$familyName, $firstName, $pref, $language] = $arr;
echo $familyName, $firstName, $pref, $language;