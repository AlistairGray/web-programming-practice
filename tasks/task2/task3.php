<?php
//TODO Доделать
/**
 * Найти все натуральные n-значные числа, цифры в которых образуют
 * строго возрастающую последовательность (например, 1234, 5789).
 */
?>

    <form method="post" action="">
        Введите N- значность числа: <br/>
        <input type="text" title="" name="n"><br/>
        <input type="submit" name="find" value="Найти"><br/>
    </form>

<?php
if (isset($_POST['find'])) {
    if (isset($_POST['n'])) {
        $n = $_POST['n'];

        $fNum = 1;
        $sNum = '';
        for ($i = 0; $i < $n; $i++) {
            $fNum .= 0;
            $sNum .= 9;
        }
        $fNum = (int)(substr($fNum, 0, -1));
        $sNum = (int)($sNum);


        for ($num = $fNum; $num < $sNum; $num++) {
            $num = (string)$num;
            $prevSymbol = $num[0];
            $flag = true;

            for ($i = 0; $i < $n; $i++){
                if($num[$i] = $prevSymbol + 1){
                    $prevSymbol = $num[$i];
                } else {
                    $flag = false;
                    break;
                }
            }
            if($flag) {
                echo $num . "<br/>";
            }
        }
    } else echo "Поле не заполнено! <br/>";
}

