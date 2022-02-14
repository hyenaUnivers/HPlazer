<?php
include_once('model/admin.model.php');
include_once('config/database.config.php');
//$adminService= new AdminService();

class AdminController
{
    

    public function getAdmins()
    {
               // Instantiate DB & connect
               $database = new Database();
               $db = $database->connect();
   
               // Instantiate the admin
              $admin= new Admin($db);

        //define data to be sent
        $admins= $admin->all();
        
        //send data to the admin page
        require('view/admin.php');
    }


    public function getAdminById()
    {
         // Instantiate DB & connect
         $database = new Database();
         $db = $database->connect();

         // Instantiate the admin
        $admin= new Admin($db);
       
        //get ID
       $admin->id= isset($_GET['id']) ? $_GET['id'] : die();
        //get admin
        $adminSingle= $admin->read_single();
        return $admin;
        //redirger vers une page de détails
    }

    public function createAdmin()
    {
         // Instantiate DB & connect
         $database = new Database();
         $db = $database->connect();

         // Instantiate the admin
        $admin= new Admin($db);    
   
        //remplissage des données
        $admin->nom= $_POST['nom'];
        $admin->email= $_POST['email'];
        $admin->contact=$_POST['contact'];
        $admin->$password= $_POST['password'];

        //creation admin
        if($admin->create())
        {
            //require('page de confirmation');
            echo 'Amin crée avec succès';

        }else{
             //require('page d'erreur');
             echo 'Amin non créé';

        }
       
      
    }
        

    public function updateAdmin()
    {
         // Instantiate DB & connect
         $database = new Database();
         $db = $database->connect();
           // Instantiate the admin
        $admin= new Admin($db);
        // Get raw posted data
         $data = json_decode(file_get_contents("php://input"));
    
        $admin->id= $data->id;
        
        //remplissage des données
        $admin->nom= $data->nom;
        $admin->email= $data->email;
        $admin->contact= $data->contact;
        $admin->$password= $data->password;

        //update the admin
        if($admin->update())
        {
            //afficher un message de mise à jour réussi
            echo 'Updated !';
        }else{
            echo 'Not updated';
        }
        
    }

    public function deleteAdmin()
    {
        
       // Instantiate DB & connect
       $database = new Database();
       $db = $database->connect();
         // Instantiate the admin
         $admin= new Admin($db);
      // Get raw posted data
       $data = json_decode(file_get_contents("php://input"));
     
        //link id
        $admin->id = $data->id;
        //try to delete
        if ($admin->delete()) {
            // Afficher un message de suppression...
            echo 'Deleted admin';
        }else {
            echo 'Erreur de suppression';
        }
    }

}