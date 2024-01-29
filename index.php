<!--https://www.php.net/manual/en/function.opendir.php-->
<ul>
    <?php
include_once('function.php');
$dir = $_SERVER['DOCUMENT_ROOT'];
DirDisplay($dir);
?>
</ul>