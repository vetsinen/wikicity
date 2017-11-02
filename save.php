<?php
//$postdata = file_get_contents("php://input");
if (isset($postdata)) {
    error_log('with data now');
    // Get the data
//    $imageData = $postdata;
    $imageData = file_get_contents("php://input");
    // Remove the headers (data:,) part.
    // A real application should use them according to needs such as to check image type
    $filteredData = substr($imageData, strpos($imageData, ",") + 1);
    // Need to decode before saving since the data we received is already base64 encoded
    $unencodedData = base64_decode($filteredData);
    // Save file. This example uses a hard coded filename for testing,
    // but a real application can specify filename in POST variable
    $fn = str_pad(rand(1,PHP_INT_MAX), 19, '0', STR_PAD_LEFT);
    $fp = fopen($fn.'.png', 'wb');
    fwrite($fp, $unencodedData);
    fclose($fp);
    echo $fp;
} else {
    error_log('no data');
}
//powered by https://permadi.com/2010/10/html5-saving-canvas-image-data-using-php-and-ajax/