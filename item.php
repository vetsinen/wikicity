<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$_GET['descr'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <h1 style="text-align: center"><?=$_GET['descr'] ?></h1>
    <?php if (isset($_GET['item'])):
        $cur = $_GET['item'];
        ?>

        <img src="imgs/<?= $cur ?>.png" class="img-responsive"  alt="pic">

    <?php endif; ?>
    <br/><a href="/" style="font-size: 30px" title="go back"><i>go back</i></a>
</div>

</body>
</html>

