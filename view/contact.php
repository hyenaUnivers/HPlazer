<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Add The Global style for header and footer, and globals -->
    <link rel="stylesheet" href="../assets/css/global.css">
      <!-- Add Contact specific features style -->
    <link rel="stylesheet" href="../assets/css/contact.css">
      <title>Contact</title>
</head>
<body>
    <?php include_once('../head/header.php')?>

    <div class="main">
        <div class="contact-header">
            <h2>Contactez-nous</h2>
            <p>Si vous rencontrez un problème particulier, si vous voudirez <br>
            en savoir plus par rapport à quelque chose ou si vous voulez nous <br>
            rapporter un problème sur hplazer, veuillez nous envoyer un message...! 
        
        </p>
        </div>
        <div class="contact">
            <div class="left">
               <div class="logo-contact">
                   
                   <img src="../assets/images/hplazer.png" alt="logo hplazer">
               </div>
            </div>
            <div class="right">
                <form class="contactform"  action="" >
                        <h2 class="titre-employeur">Mise en relation avec HPLAZER</h2>
                        <div class="input-container">
                            <i class="fa fa-user iconcontact"></i>
                            <input class="input-field" type="text" placeholder="Nom" name="usrnm">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-id-card iconcontact"></i>
                            <input class="input-field" type="text" placeholder="Prenom" name="contact">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-envelope iconcontact"></i>
                            <input class="input-field" type="text" placeholder="Email" name="email">
                        </div>

                        <div class="input-container">
                         <i class="fa fa-comments iconcontact"></i>
                            <textarea class="input-field text-area" placeholder="Tapez votre message ici,  HPLAZER vous repondra en moins de 24H. " name="message"></textarea>
                            </div>
                  
                        <button type="submit" class="sendbtn">Envoyer</button>
                        
                </form>
            </div>
        </div>
    </div>
   
    <?php include_once('../head/footer.php')?>
</body>
</html>