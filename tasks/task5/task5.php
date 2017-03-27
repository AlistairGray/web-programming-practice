<?php
/**
 * Дана матрица размера n × m. Поменять местами ее столбцы так,
 * чтобы их максимальные элементы образовывали убывающую последовательность.
 */
?>
    <form method="post" action="">
        Введите размерность матрицы <br/>
        n: <input type="text" title="n" name="n"><br/>
        m: <input type="text" title="m" name="m"><br/>
        <input type="submit" name="change" value="Поменять"><br/>
    </form>
<?php

function see($matrix)
{
    // Формируем список максимальных элементов каждого столбца
    for ($i = 0; $i < count($matrix); $i++) {
        $arColumn = [];
        for ($j = 0; $j < count($matrix[0]) - 1; $j++) {
            $arColumn[] = $matrix[$j][$i];
        }
        $arMaxElementInColumn[$i] = max($arColumn);
    }

    echo "<table border='1'>";
    for ($i = 0; $i < count($matrix); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($matrix[0]); $j++) {
            echo $matrix[$i][$ij] == $arMaxElementInColumn[$i] ? "<td bgcolor='green'>" : "<td>";
            echo $matrix[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

//    echo "<table border='1'>";
//    foreach ($matrix as $string) {
//        echo "<tr>";
//        foreach ($string as $value) {
//            echo $value == max($string) ? "<td bgcolor='green'>" . $value . "</td>" : "<td>" . $value . "</td>";
//        }
//        echo "</tr>";
//    }
//    echo "</table>";
}

if (isset($_POST['change'])) {
    if (strlen($_POST['n']) && strlen($_POST['m'])) {
        $n = $_POST['n'];
        $m = $_POST['m'];

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j <= $m; $j++) {
                $matrix[$i][$j] = rand(1, 20);
            }
        }

//        echo "<pre>";
//        print_r($matrix);
//        echo "</pre>";
        see($matrix);

    } else echo "Одно или несколько полей не заполнены! <br/>";
}
// TODO Доделать