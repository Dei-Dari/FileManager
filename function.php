<?php
function DirDisplay($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                // вывод родительского каталога '..', ссылка на текущий каталог не учитывается
                if ($file != '.') {
                    $dirfile = $dir . "/" . $file;
                    // проверка на директорию
                    if (is_dir($dirfile)) {
                        echo "<li><a href='/?dir=$dirfile'> $file</a></li>";
                    } else {
                        echo "<li>$file " . " size: " . filesize($dirfile) . "</li>";
                    }
                }
            }
            closedir($dh);
        }
    }
}
?>
