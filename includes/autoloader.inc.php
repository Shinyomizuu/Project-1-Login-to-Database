<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = "../classes/"; 
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    // Prüfen, ob die Datei existiert
    if (!file_exists($fullPath)) {
        die("Autoloader konnte die Datei nicht finden: $fullPath");
    }

    include_once $fullPath;
}
?>
