<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>View all admins Here</title>
</head>
<body>
    <?php include_once('../head/header.php')?>
<h1 style="margin-top:70px;">Admins</h1 >

        <p>Derniers admins de hplazer :</p>
 
        
        <?php
        while ($data = $admins->fetch())
        {
        ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['nom']) ?>
                    <em>le <?= $data['created_at'] ?></em>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($data['email'])) ?>
                    <br />
                   
                   <a href="index.php?action=viewAdmin&amp;id=<?= $data['id'] ?>" ><em>Voir détails </em> </a>
                  
                </p>
            </div>
        <?php
        }
        $admins->closeCursor();
        ?>
        <?php include_once('../head/footer.php')?>
</body>
</html>