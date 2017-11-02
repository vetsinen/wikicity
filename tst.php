<?php
//echo strlen( strval(PHP_INT_MAX)); -> 19
for ($i=1;$i<100;$i++){
    $f = str_pad(rand(1,PHP_INT_MAX), 19, '0', STR_PAD_LEFT);
    echo "\n".$f;
}
