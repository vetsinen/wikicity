<?php
require_once 'rb.php';

//R::setup( 'sqlite:city.db' );
//$obj = R::dispense('obj');
//
//$obj->descr = 'Learn to Program';
//$obj->picname = 10;
//$id = R::store( $obj );
//
//R::close();

R::setup( 'sqlite:city.db' );

$obj = R::dispense('objs');
$obj->descr = 'same descr';
R::store($obj);

$objs = R::findAll( 'objs' );
echo count($objs);
//$obj->descr = 'new object';
//$obj->picname = '646576757567567';
//R::store($obj);

R::close();
//$pdo = new PDO(
//    'sqlite:city.db',
//    null,
//    null,
//    array(PDO::ATTR_PERSISTENT => true)
//);
//
//'CREATE TABLE `objects` (
//`id`	INTEGER,
//	`descr`	TEXT
//)';