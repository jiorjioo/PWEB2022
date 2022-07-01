<?php
$myDir = "c:xampp/htdocs/pweb-prak-11/";
$dir = opendir($myDir);
echo "Isi Folder (Klik link untuk download : <br>";

while($tmp = readdir($dir)){ 
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}

closedir($dir); 
?>