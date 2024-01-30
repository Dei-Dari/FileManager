<!--https://www.php.net/manual/en/function.opendir.php-->
<ul>
    <?php
include_once('function.php');
$dir = $_SERVER['DOCUMENT_ROOT'];
if (isset($_GET['dir'])) {
    DirDisplay($_GET['dir']);
} else {
    DirDisplay($_SERVER['DOCUMENT_ROOT']);
}

?>
</ul>