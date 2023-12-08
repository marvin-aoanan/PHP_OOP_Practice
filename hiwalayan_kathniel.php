<?php
$loveteam = "Kath❤️Niel";
// Replace...
$hiwalay = str_replace('❤️', ' ', $loveteam);
// Paghiwalayin...
$names = explode(' ', $hiwalay);
// Display...
echo $names[0] . "ryn Bernardo\n";
echo "Da" . strtolower($names[1]) . " Padilla\n";
echo "Hiwalay na!\n";
?>