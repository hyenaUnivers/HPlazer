<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <title>Passe Oublié</title>
</head>
<body>
<?php include_once('../head/header.php')?>

<div class="main">

<h4 class="change-pass">Veuillez changer votre mot de passe !</h4>
    <form class="reset-pass" action="" method="post">
        <input type="email" name="email"  placeholder="Entrez votre Email Actuel" id="">
        <button type="submit">Changer</button>
    </form>

</div>
<?php include_once('../head/footer.php')?>    
</body>
</html>