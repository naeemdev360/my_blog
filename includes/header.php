<?php ob_start();?>
<?php session_start();?>
<?php include ROOT."/includes/db.php";?>
<?php include ROOT."/includes/functions.php";?>
<?php include ROOT."/includes/query_function.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--fontawsome icon link-->
    <link rel="stylesheet" href="<?php echo CSS."/all.min.css";?>">
    <!--Bootstrap style-->
    <link rel="stylesheet" href="<?php echo CSS."/bootstrap.min.css";?>">

    <!--my custom style-->
    <link rel="stylesheet" href="<?php echo MY_BLOG."css/main.css";?>">


    <title>MY | Blog</title>
</head>
<body>