<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo $_POST['imgname'];
print_r($_POST['cur']);
$s = file_get_contents('db.json');
echo strlen($s);
if (strlen($s)>0)
{
    print_r(json_decode($s, true));
    $db = json_decode($s, true);
}
else
{
    $db=[];
}
$db[$_POST['imgname']]=json_decode($_POST['cur'],true);
print_r($db);
//unlink('db.json');
file_put_contents('db.json',json_encode($db));
?>
</body>
</html>
