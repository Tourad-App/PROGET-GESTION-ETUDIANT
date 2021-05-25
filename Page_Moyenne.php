<?php

include 'connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Page Moyenne</title>
    <meta charset="utf-8" />
    <style>
    *
        {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        
        div.parent
        {
            width: 100%;
            height: 100vh;
        }
        
        div.parent div.container
        {
            
            background-image: url('IMG/ffb02ffdfddd9680f17bf02bd606ff9a.jpg');
            background-size: cover;
            height: 100%;
            width: 100%;
        }
        
        div.parent div.container div.Title
        {
         
            position: relative;
            color: #FFF;
            
        }
        
        div.parent div.container div.Title h2
        {
            position: absolute;
            top: 0px;
            right: 50%;
            transform: translateX(50%);
            font-size: 28px;
            border-bottom: 5px solid #FFF;
            padding: 9px 10px;
        }
        
        div.parent div.container div.div_table
        {
                width: 95%;
                height: 80%;
                position: relative;
                top: 50px;
                left: 2.5%;
        }
        
        div.parent div.container div.div_table div.show
        {
                height: 100%;
                width: 100%;
                background: #f5f5f5;
        }
        
        div.parent div.container div.div_table table
        { 
               left: 0px;
                width: 100%;
                position: absolute;
                top: 0%;
                right: 3%; 
        }
        
        div.parent div.container div.div_table table tr
        {
             height: 32px;
             width: 100%;
             background-color: #009688b5;
             font-size: 16px;
             font-family: monospace;   
        }
        
        div.parent div.container div.div_table table tr td
        {
                border: 1px solid #999;
                font-weight: 600;
                font-family: monospace;
                font-size: 14px;
                height: 28px;
                line-height: 28px;
                padding-left: 1%;
                text-align: center;
                color: #FFF;
        }
        
        div.parent div.container div.div_table table tr td.right_td
        {
                border: 1px solid #999;
                font-weight: 600;
                font-family: monospace;
                font-size: 14px;
                height: 28px;
                line-height: 28px;
                padding-left: 1%;
                background: #f5f5f5;
                color: #000;
        }
    
    </style>
    
</head>
    
    <body>
    
        <div class="parent">
        
            <div class="container">
        
            <div class="Title">
            
                <h2>Moyenne</h2>
                
            </div>
           
                <div class="div_table">
                
                     
            <div class="show">
                    
                <table>
            
                <tr>
                
                    <td>Matricule Etudiant</td>
                    <td>Moyenne Géneral</td>
                    <td>Observation</td>
                    
                </tr>
                  <?php 
                    $don=$BD->prepare("SELECT notes.*, matiere.Coeff , matiere.Nom_Matiere FROM `notes` INNER JOIN matiere ON notes.Cod_Matiere=matiere.Code_Matiere");
                    $don->execute();
                    foreach($don->fetchAll() as $d){
                      echo "<tr>" ;
                   echo "<td class='right_td'>".$d['Code_Etudiant']."</td>
                    <td class='right_td'>".$d['Nom_Matiere']."</td>
                    <td class='right_td'>Admis</td>";
                      echo "</tr>" ;
                        
                    }
                    ?>   

                  

                    
              
                
            </table>
                
            </div>
                    
                </div>
            
            
            
        </div>
            
            
        </div>
    
    </body>
</html>