<?php



try {
    
//  $BD = new PDO("mysql:host=localhost;dbname=gestion etudiants", "root", "");
    
    $BD = new PDO("mysql:host=localhost;dbname=gestion_etudiant_iscae", "root", "");
} 
catch(PDOException $e) {
    
  echo "Connection failed: " . $e->getMessage();
    
}





?>