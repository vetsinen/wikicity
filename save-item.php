<?php

require_once 'storage.php';
$s = new Storage();

error_log(urldecode($_GET['descr']));
error_log($_GET['id']);
$s->storage[$_GET['id']] = urldecode($_GET['descr']);
$s->save();