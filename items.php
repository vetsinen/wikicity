<?php
require_once "storage.php";
$s = new Storage();
if (count($s::$storage) > 0) {
    echo '<h2>here are such places</h2><ul>';
    foreach ($s::$storage as $id => $item) {
        echo '<li><a href="item.php?item=' . $id . '&descr=' . $item . '">' . $item . '</a></li>';
    }
    echo '</ul>';
}
?>