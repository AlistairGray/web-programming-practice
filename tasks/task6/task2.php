<?php
/**
 * Дано целое число N и текстовый файл с именем Name1, содержащий
 * один абзац текста, выровненный по левому краю. Отформатировать текст
 * так, чтобы его ширина не превосходила N позиций, и выровнять текст по
 * правому краю. Пробелы в конце строк удалить. Сохранить отформатированный
 * текст в новом текстовом файле с именем Name2.
 */
/*
 * Ничего не понял. Ладно, редположим, что число позиций - это кол-во символов
 * в строке. Ладно, кое как удалим лишние пробелы. Но как выровнять текст по правому карю в
 * .txt файле!? Прошу прощения за эту лабу, ибо она написано дерьмокодом =(
 */
?>
    <form method="post" action="">
        Введите число позиций <br>
        <input type="text" title="Число позиций" name="n"><br/>
        <input type="submit" name="save" value="Сохранить"><br/>
    </form>
<?php
if (isset($_POST["save"])) {
    if (strlen($_POST["n"])) {
        $n = $_POST["n"];
        $fileName1 = "Name1.txt";
        $fileName2 = "Name2.txt";
        $text = file_get_contents($fileName1);
        $countSymbols = 0;
        $resText = "";

        for ($i = 0; $i < strlen($text); $i++) {
            if ($countSymbols == $n) {
                $resStr .= $text[$i];
                $resStr = rtrim($resStr) . PHP_EOL;
                $countSymbols = 0;
            } else {
                if ($countSymbols == 0 && $text[$i] == " ") {
                    continue;
                }
                $resStr .= $text[$i];
                $countSymbols++;
            }
            $resText .= $resStr;
            $resStr = "";
        }

        file_put_contents($fileName2, $resText);
        echo "Текст отформатирован и сохарён в файле " . $fileName2 . "<br/>";
        echo "<a href='Name2.txt' target='_blank'>Открыть файл</a><br/>";

    } else echo "Поле не заполнено! <br/>";
}