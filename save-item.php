<?php
require_once 'storage.php';
$obj = R::dispense('objs');
$obj->descr = urldecode($_GET['descr']);
$obj->picname = $_GET['id'];


error_log(urldecode($_GET['descr']));
error_log($_GET['id']);
$obj = R::dispense('objs');

$s::$storage[$_GET['id']] = 'from save-item.php';//urldecode($_GET['descr']);
$s->save();