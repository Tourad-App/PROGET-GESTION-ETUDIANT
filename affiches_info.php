<?php

/* Start search un Etudiants */

        include('connexion.php');

        
        $utilisateur = $BD -> query('SELECT *FROM etudiant ORDER BY Matricule DESC ');

    if(isset($_GET['Code']) AND !empty($_GET['Code']))

    {
         $result = htmlspecialchars($_GET['Code']);
        
        
            $long = strlen($result);

            $recherch = substr($result,1, $long);

        
        $utilisateur = $BD -> query('SELECT *FROM etudiant WHERE Matricule LIKE "%'.$recherch.'%" ');
        
    }


/* End search un Etudiants */



?>


<!DOCTYPE html>

<html lang='en'>
<head>

    <title>page affichage de resultat de recheche</title>
    
    <style>
    
        *
        {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box
        }
        
    .info_Etudiants
        {
            width: 100%;
            height: 100vh;
            color: #000;
            padding: 10px;
        }
        
    .info_Etudiants .titre
        {
            width: 100%;
            height: 100px;
            border-bottom: 2px solid #FFF;
            line-height: 100px;
        }
    
    .info_Etudiants .titre h3
        {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: monospace;
            text-shadow: 1px 1px 1px rgb(0 0 0 / 50%);
            color: #e91e63;  
        }
        
        div.info_Etudiants div.content_info div.list_Affichage
        {
                width: 100%;
                height: 60%;
               padding-top: 1%;
        }
        
        div.info_Etudiants div.content_info div.list_Affichage table
        {
            margin-left: 21%;
        }
        
div.info_Etudiants div.content_info div.list_Affichage table tr td
        {

                width: 120px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                font-weight: bold;
                font-family: monospace;
                font-size: 15px;
                border: 1px solid #000;
        }
div.Header
        {
                width: 800px;
                height: 200px;
                border: 4px solid #009688;
                margin: auto;
                background: antiquewhite;
                text-align: center; 
        }
        
h1.message_result
        {
                font-size: 20px;
                line-height: 200px;
                font-size: 20px;
                font-family: monospace;
                color: #402e2e;
                text-transform: uppercase;
        }

    </style>
    
</head>
    <body>
    
    
        <!--- Start afficher les informations du etudiants -->
        
        <div class="info_Etudiants">
        
            <div class="content_info">
            
                <div class="titre">
                
                    <h3>Voici les donner d' etudiant rechercher : </h3>
                    
                </div>
                
                <div class = "list_Affichage">
            
        <?php
                    
        if($utilisateur -> rowCount() > 0)
        {
            ?>
                    
                    <table class="info_Tables">
                    
                        <tr>
                        
                            <td>
                                Matricule
                            </td>
                            <td>
                                Nom
                            </td>
                            <td>
                                DatNaissance
                            </td>
                            <td>
                                Genre
                            </td>
                            <td>
                                Filiere
                            </td>
                            <td>
                                Niveau
                            </td>
                        
                        </tr>
            <?php
        
            while($ba = $utilisateur -> fetch())
            {
                ?>
                        
                        <tr>
                        
                            <td>
                                
                    <?= 
                            'I'.$ba['Matricule'];
                    ?>
                                
                            </td>
                            <td>
                                
                     <?= 
                            $ba['Nom'];
                    ?>
                                
                            </td>
                            <td>
                                
                    <?= 
                            $ba['DatNaissance'];
                    ?>
                                
                            </td>
                            <td>
                                
                    <?= 
                            $ba['Genre'];
                    ?>
                                
                            </td>
                            <td>
                                
                    <?= 
                            $ba['Filiere'];
                    ?>
                                
                            </td>
                            <td>
                                
                    <?= 
                            $ba['Niveau'];
                    ?>
                                
                            </td>
                     
                        </tr>
                        
                            <?php 
        }
                        
        ?>
                        
                    </table>
              
            <?php
            
        }
                    else
        {
            echo "<div class='Header'>";
                        echo "<h1 class='message_result'>cet etudiant n'existe pas</h1>";
            echo "</div>";
        }
                        

                    ?>
          
                </div>
                
                
   
                
            </div>
            
        </div>
        
    <!--- End afficher les informations du etudiants -->
        
    </body>

</html>