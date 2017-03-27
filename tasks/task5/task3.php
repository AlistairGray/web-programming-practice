<?php
/**
 * Создайте массив, содержащий n различных случайных целых чисел.
 * Содержимое массива сортируется по возрастанию, и после этого
 * определяются минимальный и максимальный элементы массива.
 */
?>
<form method="post" action="">
    Введите количество случайных элементов<br/>
    <input type="text" title="Количество случайных элементов" name="elementCount"><br/>
    <input type="submit" name="get" value="Получить"><br/>
</form>
<?php
if (isset($_POST['get'])) {
    if(strlen($_POST['elementCount'])) {
        $elementCount = trim($_POST['elementCount']);
        $arNumbers = [];

        for ($i = 0; $i <= $elementCount; $i++) {
            $arNumbers[] = rand(0, 999);
        }

        echo "Массив с случайными числами: ";
        echo "<pre>";
        print_r($arNumbers);
        echo "</pre>";

        sort($arNumbers);

        echo "Массив, отсортированный в порядке возрастания: ";
        echo "<pre>";
        print_r($arNumbers);
        echo "</pre>";

        echo "Максимальный элемент массива: " . max($arNumbers) . "<br/>";
        echo "Минимальный элемент массива: " . min($arNumbers) . "<br/>";
    }
}
