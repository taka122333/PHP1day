<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPスクール1日目～while_foreach_for</title>
</head>
<body>
    <?php
        //while
        $i = 1;
        while ($i <= 10) {
            echo $i;
            $i++;
        }
        echo '<br><br>';

        //for
        for ($i = 1; $i <= 10; $i++) {
            echo $i . '<br>';
        }
        echo '<br><br>';

        $arr = [
            'saito',
            'tomohiko',
            'chiba',
            'PHP',
        ];
        // echo $arr[0];
        // echo $arr[1];
        // echo $arr[2];
        // echo $arr[3];
        echo '***********************<br>';



        //count()
        $num = count($arr);
        var_dump($num);
        echo '<br>';
        for ($i = 0; $i < $num; $i++) {
            echo $arr[$i] . '<br>';
        }
        echo '<br><br>';


        //foreach
        foreach ($arr as $key => $value) {
            echo $key;
            echo $value . '<br>';
            // $str = $value;
            // var_dump($str);
        }

        

    
        $label_arr = [
            'family_name' => 'saito',
            'first_name' => 'tomohiko',
            'pref' => 'chiba',
            'language' => 'PHP',
        ];

        foreach ($label_arr as $label => $data) {
            echo $label;
            echo ' : ';
            echo $data . '<br>';
        }
        echo '<br><br>';





        $excel_arr = [
            [
                'family_name' => 'saito',
                'first_name' => 'romohiko',
                'pref' => 'chiba',
                'age' => '33',
                'language' => 'PHP',
            ],
            [
                'family_name' => 'tanaka',
                'first_name' => 'youhei',
                'pref' => 'tokyo',
                'age' => '19',
                'language' => 'C',
            ],
            [
                'family_name' => 'sato',
                'first_name' => 'ichiro',
                'pref' => 'kanagawa',
                'age' => '28',
                'language' => 'Java',
            ],
        ];

        foreach ($excel_arr as $no => $member_data) {
            echo 'No:' . $no . '<br>';
            echo 'family_name : ' . $member_data['family_name'] . '<br>';
            echo 'first_name  : ' . $member_data['first_name'] . '<br>';
            echo 'pref        : ' . $member_data['pref'] . '<br>';
            echo 'age         : ' . $member_data['age'] . '<br>';
            echo 'language    : ' . $member_data['language'] . '<br>';
            echo '<br><br>';
        }




        //while
        $j = 1;
        $flg = true;
        while ($flg === true) {
            if ($j === 10) {
                $flg = false;
            }
            echo $j;
            $j++;
        }
        echo '<br><br>';




        // $fp = fopen('sample_text.txt', 'r');


        // $flg = true;

        // while ($flg === true) {
        //     $res = fget($fp);
        //     if ($res === false)
        //         $flg = false;
        //     echo $res . '<br>';
        // }
        // fclose($fp);
        // echo '<br><br>';


        foreach ($excel_arr as $member_data) {
            if ($member_data['age'] >= 30) {
                echo $member_data['family_name'] . 'さんは30代です。<br>';
            } elseif ($member_data['age'] >= 20) {
                echo $member_data['family_name'] . 'さんは20代です。<br>';
            } else {
                echo $member_data['family_name'] . 'さんは10代です。<br>';
            }
        }





        echo '<table border="1px">';
        echo '<tr>';
        echo '<td>family_name</td>';
        echo '<td>first_name</td>';
        echo '<td>pref</td>';
        echo '<td>age</td>';
        echo '<td>language</td>';
        echo '</tr>';
        foreach ($excel_arr as $member) {
            echo '<tr>';
            echo '<td>' . $member['family_name'] . '</td>';
            echo '<td>' . $member['first_name'] . '</td>';
            echo '<td>' . $member['pref'] . '</td>';
            echo '<td>' . $member['age'] . '</td>';
            echo '<td>' . $member['language'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>