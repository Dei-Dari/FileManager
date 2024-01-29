<?php
function DirDisplay($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != '.') {
                    echo "<li><a href='$dir/$file''> $file </a></li>";
                }
            }
            closedir($dh);
        }
    }
}
?>
