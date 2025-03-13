<?php
require("connect.php");

$miejsce1s = $_POST['serial1']??''; /*to operator null-coalescing ('??') w celu uniknięcia ostrzeżeń gdy któreś z pól formularza nie zostało wysłane */
$miejsce2s = $_POST['serial2']??'';
$miejsce3s = $_POST['serial3']??'';
$miejsce4s = $_POST['serial4']??'';
$miejsce5s = $_POST['serial5']??'';

$miejsce1f = $_POST['film1']??'';
$miejsce2f = $_POST['film2']??'';
$miejsce3f = $_POST['film3']??'';
$miejsce4f = $_POST['film4']??'';
$miejsce5f = $_POST['film5']??'';

$sql = "INSERT INTO seriale (id, Miejsce_1, Miejsce_2, Miejsce_3, Miejsce_4, Miejsce_5) VALUES ('', '$miejsce1s', '$miejsce2s', '$miejsce3s', '$miejsce4s', '$miejsce5s')";
$sql2 = "INSERT INTO filmy (id, Miejsce_1, Miejsce_2, Miejsce_3, Miejsce_4, Miejsce_5) VALUES ('', '$miejsce1f', '$miejsce2f', '$miejsce3f', '$miejsce4f', '$miejsce5f')";

$result = $conn->query($sql);
$result = $conn->query($sql2);

echo "<p>Dziękujemy! Twój formularz został przesłany.</p>";
?>
