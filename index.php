<?php
require_once('controller/admin.controller.php');
require_once('model/admin.model.php');

$adminController= new AdminController();
    
  
//on peut facilement verifier si la personne est connectee avant toute action ici, exclure uniquemnet la page d'accueil
if (isset($_GET['action'])) {
    //declarer un evariable ici qui prendra l'action et utiliser un switch
    //$verif=$_GET['action];
    //switch($verif)
    //{case:'getAdmins'
      //....      }
    //
    //
     if ($_GET['action'] == 'getAdmins') {
        $adminController->getAdmins();
    }
    elseif ($_GET['action'] == 'viewAdmin') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
           echo 'Voir détails admin';
        }
        else {
            echo 'Erreur : aucun identifiant d\'admin envoyé';
        }
    }
    elseif ($_GET['action'] == 'addJob') {
        
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
               //add admin when email, password and id are valid
               $adminController->createAdmin();
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
       
     
    }elseif($_GET['action'] =='viewAdmin')
    {
        if (isset($_GET['id'])>0) {
            echo 'admin details here';
        } else {
            echo 'No admin details here';
        }
        
        
    }
}
else {
    //Render the welcome page
      //$adminController->getAdmins();
      require('view/home.php');
}