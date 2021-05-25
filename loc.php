<?php             

        /* Start Modificatier les Informations un etudiants */



                include('connexion.php');

                   if(isset($_POST['Matric'])){
                     print_r($_POST);
                       $nom=$_POST['Name'];
                       $Naiss=$_POST['Naiss'];
                       $gen=$_POST['gen'];
                       $Fill=$_POST['Fill'];
                       
                echo   $Matric=$_POST['Matric'];
                       
                
                       
                     $long = strlen($Matric);

                     $recherch = substr($Matric,1, $long);
                       
                       echo $recherch;

    
            $update=$BD->prepare("UPDATE etudiant SET Nom = '$nom', DatNaissance = '$Naiss', `Genre` = '$gen', `Filiere` = '$Fill' WHERE `Matricule` = ?");
                       
            $update->execute(array($recherch));
                       
                header('Location:Gestion_Etudiants.php') ;

                   
                }

        /* Start Modificatier les Informations un etudiants */


?>
