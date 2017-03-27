<?php
/**
 * Богатый дядюшка подарил мне 1 доллар в мой первый день рождения. В каждый следующий
 * день рождения он удваивал сумму подарка и прибавлял к ней столько долларов, сколько
 * лет мне исполнилось. Написать программу, подсчитывающую об¬щую сумму денег, подаренных
 * к N-му дню рождения, и указывающую, к какому дню рождения сумма подарка превысит 100
 * долларов.
 */
?>
    <form method="post" action="">
        Введите номер дня рождения <br/>
        <input type="text" title="Номер дня рождения" name="birthday"><br/>
        <input type="submit" name="getAmountOfMoney" value="Узнать сумму подарка"><br/>
    </form>
<?php

if (isset($_POST['getAmountOfMoney'])) {
    if (!empty($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
        $sum = 0;

        for ($i = 1; $i <= $birthday; $i++) {
            $sum = $sum * 2 + $i;
        }

        echo "К " . $birthday . " дню рождения сумма подарка составляет " . $sum . "<br/>";

        $sum = 0;
        $birthdayWhenTheAmountExceeds100 = 0;

        while ($sum <= 100) {
            $sum = $sum * 2 + ++$birthdayWhenTheAmountExceeds100;
        }

        echo "Сумма подрака превысет $100 к " . $birthdayWhenTheAmountExceeds100 . " дню рождения. <br/>";
    } else echo "Неверно заполнено поле! <br/>";
}