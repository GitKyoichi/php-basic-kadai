<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    
    <p>
        <?php
        // ソート関数
        function sort_2way( $array, bool $order) {
            if($order){
                echo '昇順にソートします。<br>';
                sort($array, SORT_NUMERIC);
            }
            else {
                echo '降順にソートします。<br>';
                rsort($array, SORT_NUMERIC);
            }
            foreach($array as $key => $val) {
                echo $val . '<br>';
            }
        }
        // 配列の確保
        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>