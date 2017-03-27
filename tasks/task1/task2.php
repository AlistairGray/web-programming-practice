<?php
/**
 * Треугольник со сторонами а, b, с существует и является равнобедренным.
 */
?>
<form method="post" action="">
    Введите стороны трегольника<br/>
    A: <input type="text" title="A" name="sideA"><br/>
    B: <input type="text" title="B" name="sideB"><br/>
    C: <input type="text" title="C" name="sideC"><br/>
    <input type="submit" name="check" value="Проверить"><br/>
</form>
<?php
if (isset($_POST['check'])) {
    if (!empty($_POST['sideA']) && !empty($_POST['sideB']) && !empty($_POST['sideC'])) {
        $a = $_POST['sideA'];
        $b = $_POST['sideB'];
        $c = $_POST['sideC'];

        if ($a + $b > $c || $a + $c > $b || $b + $c > $a) {
            if ($a == $b || $a == $c || $b == $c) {
                echo "Треугольник является равнобедренным. <br/>";
            } else echo "Тругольник не является равнобедренным! <br/>";
        } else echo "Треугольник с введёнными сторонами не существует! <br/>";
    } else echo "Одно или нсколько полей не заполнены! <br/>";
}