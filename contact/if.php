<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPスクール1日目～if.php</title>
</head>
<body>
    <?php  
        echo '斎藤 友彦';
        echo '<br>';
        echo 'サイトウ トモヒコ';
        echo '<br>';

        $x = '10';

        const CONST_NAME = '斎藤 友彦（定数）';
        echo CONST_NAME;

        $test_bool = true;
        var_dump($test_bool);

        $test_int = 10;
        var_dump($test_int);

        $test_float = 3.14;
        var_dump($test_float);

        $test_string = '文字列';
        var_dump($test_string);

        $test_string_alphabet = 'abc';
        var_dump($test_string_alphabet);

        
        //if文
        $id = 0;
        if ($id === '') {
            echo 'empty';
        } else {
            echo 'not empty';
        }
        echo '<br>';
        //not empty


        if ($x === 10) {
            echo '10';
        } else {
            echo 'not 10';
        }
        echo '<br><br>';


        $my_score = 70;

        if ($my_score >= 80) {
            echo 'がんばりましたね';
        } elseif ($my_score >= 60) {
            echo 'もう一歩です';
        } elseif ($my_score >= 40) {
            echo '頑張りましょう';
        } else {
            echo 'ダメダメです';
        }
        echo '<br>';




        $a = 10;
        $c = 7;

        if ($a === 10 && $c === 8) {
            echo 'OK';
        } else {
            echo 'NG';
        }
        echo '<br>';


        $a = '0';
        if (empty($a) === true) {
            echo '空(カラ)です';
        }
        echo '<br>';

        if ($a !== '') {
            echo '値が入っています。';
        } else {
            echo '空白です';
        }
    ?>
</body>
</html>