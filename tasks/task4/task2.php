<?php
/**
 * Дана строка. Преобразовать все прописные латинские буквы в строчные
 */
?>
    <form method="post" action="">
        Введите строку<br/>
        <input type="text" title="Введите строку" name="string"><br/>
        <input type="submit" name="send" value="Преобразовать"><br/>
    </form>
<?php
if (isset($_POST['send'])) {
    if (isset($_POST['string'])) {
        $string = $_POST['string'];

        echo "<b>Строка до преобразования:</b> <br/>";
        echo $string . "<br/>";
        echo "<b>Строка после преобразования: </b><br/>";
        echo mb_strtolower($string) . "<br/>";
    } else echo "Поле не заполнено! <br/>";
}