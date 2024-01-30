<?php
function DirDisplay($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                // без текущего каталога
                if ($file != '.') {
                    // ??? переход на директорию выше работает без доп условия, но остается в строке параметров, сортировка папок и файлов
                    $dirfile = $dir . "/" . $file;
                    // проверка на директорию
                    if (is_dir($dirfile)) {
                        echo "<li class='folder' ><a href='/?dir=$dirfile'> $file</a></li>";
                    } else {
                        $extention= substr(strrchr($file, '.'), 1);
                        echo "<li class='file' >$file " . " | file size: " . filesize($dirfile) . " | file type: " . $extention . "</li>";
                    }
                }
            }
            closedir($dh);
        }
    }
}
?>
