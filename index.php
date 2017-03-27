<?php
/*
 * Задание 1: 6/6
 * Задание 2: 2/3
 * Задание 3: 1/3
 * Задание 4: 4/4
 * Задание 5: 3/5
 * Задание 6: 2/3
 *
 * Итого: 18/24 = 75%
 */
$arTasks = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . "/tasks", 1), [".", ".."]);
?>
<ul>
    <? sort($arTasks, SORT_NATURAL);
    foreach ($arTasks as $task): ?>
        <li>
            <a href="/tasks/<?= $task ?>"><?= $task ?></a>
        </li>
    <? endforeach; ?>
</ul>