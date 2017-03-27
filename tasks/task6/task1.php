<?php
/**
 * Организовать файл целых чисел из N компонент. Удалить из файла
 * все отрицательные компоненты. Вывести содержимое файла до обработки,
 * и после обработки.
 */
?>

    <form method="post" action="">
        Введите количество компонент <br/>
        <input type="text" title="Количство компонент" name="componentCount"><br/>
        <input type="submit" name="send" value="Показать"><br/>
    </form>
<?php
if (isset($_POST['send'])) {
    if (strlen($_POST['componentCount'])) {
        $componentCount = $_POST['componentCount'];
        $str = "";

        // Формируем содрежимое файла
        for ($i = 0; $i < $componentCount; $i++) {
            $fileContent .= rand(-20, 20) . PHP_EOL;
        }

        $fileName = 'fileForTask1.txt';

        // Записываем числа в файл
        file_put_contents($fileName, $fileContent);

        // Удаляем отрицательные элементы
        $file = file($fileName);
        $fp = fopen($fileName, "w");
        $strCount = sizeof($file);

        for ($i = 0; $i < $strCount; $i++) {
            if ($file[$i] < 0) {
                unset($file[$i]);
            }
        }

        fputs($fp, implode("", $file));
        fclose($fp);

        echo "<b>Файл до обработки: </b><br/>";
        echo $fileContent . "<br/>";
        echo "<b>Файл после обработки: </b><br/>";
        echo file_get_contents($fileName);
    } else echo "Поле не заполнено! <br/>";
}
