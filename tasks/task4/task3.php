<?php
/**
 * Дана строка, состоящая из русских слов, разделенных пробелами
 * (одним или несколькими). Определить длину самого длинного слова.
 */
?>
    <form method="post" action="">
        Введите строку<br/>
        <input type="text" title="Введите строку" name="string"><br/>
        <input type="submit" name="send" value="Определить"><br/>
    </form>

<?php
if (isset($_POST['send'])) {
    if (isset($_POST['string'])) {
        $string = $_POST['string'];
        $arWords = explode(' ', $string);

        $maxLength = [
            "word" => $arWords[0],
            "length" => mb_strlen($arWords[0])
        ];

        foreach ($arWords as $word) {
            if (mb_strlen($word) > $maxLength["length"]) {
                $maxLength = [
                    "word" => $word,
                    "length" => mb_strlen($word)
                ];
            }
        }

        echo "В введённой строке, слово с максимальной длинной: " . $maxLength["word"] .
            " (" . $maxLength["length"] . ") <br/>";
    } else echo "Поле не заполнено! <br/>";
}
