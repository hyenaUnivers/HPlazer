<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/employeur.css">
    
    <title>Signup-Employeur</title>
</head>
<body>
    <?php include_once('../head/header.php')?>
    <div class="content">
        <div class="bienvenue-eployeur">
        <h1>Veuillez créer votre compte !</h1>
        <p class="bienvenue-employeur"> Bonjour cher annonceur, <br>
        Créez gratuitement votre compte, 
        interagissez de façon autonome avec vos futurs talents: <br>
        <h2>Aucune Restriction avec Hplazer</h2>
        </p>
    
        </div>
       
    </p>

<form class="signupform"  action="" >
        <h2 class="titre-employeur">Creation d' employeur</h2>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Nom entreprise" name="usrnm">
        </div>

        <div class="input-container">
            <i class="fa fa-id-card icon"></i>
            <input class="input-field" type="text" placeholder="Contact" name="contact">
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
        </div>
        
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
        </div>

        <div class="input-container">
            <i class="fa fa-briefcase icon"></i>
            <input class="input-field" type="text" placeholder="Description" name="description">
        </div>
        <div class="input-container">
         <i class="fa fa-map-marker icon"></i>
            <input class="input-field" type="text" placeholder="Adesse" name="adresse">
        </div>
        <button type="submit" class="btnsignup">Register</button>

        <p class="link">Déjà un compte ?<br>
                        <a href="#"> Connexion</a></p>
                      
</form>

                        

    </div>

        <?php include_once('../head/footer.php')?>
   
    
</body>
</html>