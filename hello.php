<?php
// Многомерный массив с расписанием уроков
$schedule = array(
    "Понедельник" => array("Математика", "Русский язык", "Физкультура"),
    "Вторник" => array("Литература", "Химия", "История"),
    "Среда" => array("Физика", "География", "Английский язык"),
    "Четверг" => array("Информатика", "Биология", "Испанский язык"),
    "Пятница" => array("Искусство", "Обществознание", "Музыка"),
);

// Вывод расписания на экран с использованием циклов
foreach ($schedule as $day => $lessons) {
    echo $day . ":\n";
    foreach ($lessons as $lesson) {
        echo "- " . $lesson . "\n";
    }
}
?>





