<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>Demo: Take a Selfie With JavaScript</title>
<!--    <link rel="stylesheet" href="main.css" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

</head>
<body>
<div class="container">
    <div class="app">

        <a href="#" id="start-camera" class="visible">Touch here to start the app.</a>
        <video id="camera-stream"></video>
        <img id="snap">

        <p id="error-message"></p>

        <div class="controls">
            <a href="#" id="delete-photo" title="Delete Photo" class="disabled"><i class="material-icons">delete</i></a>
            <a href="#" id="take-photo" title="Take Photo"><i class="material-icons">camera_alt</i></a>
            <a href="#" id="download-photo" download="selfie.png" title="Save Photo" class="disabled"><i
                    class="material-icons">file_download</i></a>
        </div>
        <!-- Hidden canvas element. Used for taking snapshot of video. -->
        <canvas></canvas>
    </div>
</div>
<script src="main.js"></script>
<h3>Demo: Grab a wikiobject With JavaScript</h3>
<!--powered by https://jsfiddle.net/dannymarkov/cuumwch5/-->
</body>
</html>