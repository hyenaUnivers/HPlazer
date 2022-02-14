<?php 
  class Admin {
    // Hplazer DB Workstation
    private $table = 'admin';
    private $conn;
    // Admin  Properties
    public $id;
    public $nom;
    public $email;
    public $password;
    public $contact;
    public $created_at;

  // Constructor with DB
  public function __construct($db) {
    $this->conn = $db;
  }

 // Get all Admins
 public function all() {
  
  
  // Create query
  $query = 'SELECT  nom, email, password, contact, created_at FROM ' . $this->table . ' ORDER BY created_at';
  
  // Prepare statement
  $admins = $this->conn->prepare($query);

  // Execute query
  $admins->execute();

  return $admins;
}

// Get Single Admin
public function read_single() {
      // Create query
      $query = 'SELECT nom, email, password, contact, created_at FROM '.$admin->table.'  WHERE
                                  id = ?
                                LIMIT 0,1';

      // Prepare statement
      $single_admin = $this->conn->prepare($query);

      // Bind ID
      $single_admin->bindParam(1, $this->$id);

      // Execute query
      $single_admin->execute();

      $row = $single_admin->fetch(PDO::FETCH_ASSOC);

      // Set properties
      $this->nom = $row['nom'];
      $this->email = $row['email'];
      $this->password = $row['password'];
      $this->contact = $row['contact'];
      $this->created_at = $row['created_at'];

     // return $admin;
}

// Create Post
public function create() {
  global $nom,$email,$contact,$password;
      // Create query
      $query = 'INSERT INTO ' . $this->table . ' SET nom = :nom, email = :email, password = :password, contact = :contact';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->nom = htmlspecialchars(strip_tags($this->$nom));
      $this->email = htmlspecialchars(strip_tags($this->$email));
      $this->password = htmlspecialchars(strip_tags($this->$password));
      $this->contact = htmlspecialchars(strip_tags($this->$contact));

      // Bind data
      $stmt->bindParam(':nom', $this->$nom);
      $stmt->bindParam(':email', $this->$email);
      $stmt->bindParam(':password', $this->$password);
      $stmt->bindParam(':contact', $this->$contact);

      // Execute query
      if($stmt->execute()) {
        return true;
  }

  // Print error if something goes wrong
  printf("Erreur, vous ne pouvez pas créer d'Admin, veuillez reprendre.: %s.\n", $stmt->error);

  return false;
}

// Update Post
public function update() {
      // Create query
      $query = 'UPDATE ' . $this->table . '
                            SET nom = :nom, email = :email, password = :password, contact = :contact
                            WHERE id = :id';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->id = htmlspecialchars(strip_tags($this->id));
      $this->nom = htmlspecialchars(strip_tags($this->nom));
      $this->email = htmlspecialchars(strip_tags($this->email));
      $this->password = htmlspecialchars(strip_tags($this->password));
      $this->contact = htmlspecialchars(strip_tags($this->contact));


      // Bind data
      $stmt->bindParam(':nom', $this->nom);
      $stmt->bindParam(':email', $this->email);
      $stmt->bindParam(':password', $this->password);
      $stmt->bindParam(':contact', $this->contact);
      $stmt->bindParam(':id', $this->id);

      // Execute query
      if($stmt->execute()) {
        return true;
      }

      // Print error if something goes wrong
      printf("Erreur survenue lors de la modification: %s.\n", $stmt->error);

      return false;
}

// Delete Post
public function delete() {
      // Create query
      $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->id = htmlspecialchars(strip_tags($this->id));

      // Bind data
      $stmt->bindParam(':id', $this->id);

      // Execute query
      if($stmt->execute()) {
        return true;
      }

      // Print error if something goes wrong
      printf("Erreur pour la Suppression: %s.\n", $stmt->error);

      return false;
}

   
  }