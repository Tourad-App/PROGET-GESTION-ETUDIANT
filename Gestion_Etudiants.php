<?php




            /* Start Connexion au base donnée */

                include('connexion.php');
                     session_start();

            /* End Connexion au base donnée */

            /* Start Les Fonctions */



                  function niveau($p=''){
                      global $BD;
                        $requete = $BD ->prepare( "SELECT niveau FROM login WHERE login = ? " );
                        $requete -> execute(array($_SESSION['u']));
                        if($requete ->fetchColumn()==0) 
                               echo"$p";
                 }


         /* End Les Fonctions */


    
        /* Start Ajouter un Etudiants */   

                if(isset($_POST['insertion']))
                                {
    
                                $nom = $_POST['nom'];
                                $date = $_POST['date'];
                                $genre = $_POST['redio1'];
                                $Filiere = $_POST['Filiere'];
                                $Niveau = $_POST['Niveau'];
    
    
                            if(!empty($nom)  AND !empty($date) AND !empty($genre) AND !empty($Filiere) AND !empty($Niveau))
                            {
                                include('connexion.php');
                                 $requete = "INSERT INTO etudiant (Nom,DatNaissance,Genre,Filiere,Niveau) VALUES ('$nom','$date','$genre','$Filiere','$Niveau') "; 
                                 $BD -> exec($requete);
                            }
              
    
                    }




                /* End Ajouter un Etudiants */



                /* Start Suppression un Etudiants */


                    if(isset($_POST['supprimer']))
                    {

                        $Cod = $_POST['Supp'];
                        $long = strlen($Cod);

                        $result = substr($Cod,1, $long);

                        echo $result;

                        if(!empty($result) && is_numeric($result))
                        {

                            include("connexion.php");

                            $requete = "DELETE FROM etudiant WHERE Matricule = '$result' ";

                            $BD -> exec($requete);

                            header('Location:Gestion_Etudiants.php');

                        }

                    }


                        /* End Suppression un Etudiants*/


                        /* Start search un Etudiants */


                            include('connexion.php');

                            $utilisateur = $BD -> query('SELECT *FROM etudiant ORDER BY Matricule DESC ');

                        if(isset($_GET['Code']) AND !empty($_GET['Code']))

                        {
                             $result = htmlspecialchars($_GET['Code']);

                            $utilisateur = $BD -> query('SELECT *FROM etudiants_ajout WHERE Matricule LIKE "%'.$result.'%" ');

                        }


                        /* End search un Etudiants */


?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset = 'utf-8' />
    <title>Page Gestion Etudiants</title>
    <link rel="stylesheet" href="css/all.min.css" />
    
    <style>
    *
        {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        
    div.container
        {
           width: 100%;
           height: 100vh;
            background-color: #2de2e2;
            background-image: url('IMG/ffb02ffdfddd9680f17bf02bd606ff9a.jpg');
            background-size: cover;
        }
    
    div.container div.right 
        {
            width: 60%;
            height: 100%;
            float: right;
            position: relative;
        }
        
    div.container div.right div.content_right
        {
         width: 100%;
        height: 90%;
        background: #f5f5f5;
        position: absolute;
        top: 5%;
        right: 3%;
        }
    
    div.container div.right div.content_right table 
        {
                
                width: 100%;
        }
        
        div.container div.right div.content_right table tr.tr_one
        {
            height: 32px;
            width: 100%;
            background-color: #009688b5;
            font-size: 16px;
            font-family: monospace;
        }
      
     div.container div.right div.content_right table tr.tr_one td
        {
                text-align: center;
                color: #FFF;
        }
        
        div.container div.right div.content_right table tr td
        {
            border: 1px solid #999;
            font-weight: 600;
            font-family: monospace;
            font-size: 14px;
            height: 28px;
            line-height: 28px;
            padding-left:1%;
        }
        
        div.container div.left
        {
            width: 40%;
            height: 100%;
            float: left;
            color: #FFF;
        }
        div.container div.left div.content-left
        {
            width: 100%;
            height: 500px;
        }
        
        div.container div.left div.content-left h2
        {
                margin-left: 20%;
                font-size: 26px;
                font-weight: bold;
                font-family: monospace;
                margin-bottom: 4%;
/*                text-transform: uppercase;*/
                margin-top: 5%;
                color: #FFF;
        }
        
        div.container div.left div.content-left form
        {
            width: 393px;
/*            height: 500px;*/
            margin-left: 5%;
            position: relative;
         }
        
        div.container div.left div.content-left form label
        {
            font-size: 19px;
            display: inline-block;
            font-family: monospace;
            font-weight: bold;
            margin-right: 3%;
            color: #57e8ff;
        }
        
        div.container div.left div.content-left  label
        {
            font-size: 19px;
            display: inline-block;
            font-family: monospace;
            font-weight: bold;
            margin-right: 3%;
            color: #57e8ff;
        }
        
        div.container div.left div.content-left  label.one_lab
        {
            margin-left: 0.5%;
        }
        
        
        div.container div.left div.content-left form input[type='text'],
        div.container div.left div.content-left form input[type='date']
        {
                height: 30px;
                border: none;
                width: 219px;
                border: 1px solid #333;
                outline:none;
                padding-left: 2%;
        }
        
        div.container div.left div.content-left  input[type='text']
        {
            height: 30px;
                border: none;
                width: 219px;
                border: 1px solid #333;
                outline:none;
                padding-left: 2%;
        }
        
        div.container div.left div.content-left form input[type='date']
        {
            font-size: 15px;
            color: #000;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
        }
        
        div.container div.left div.content-left form input[type='text']
        {
                font-size: 15px;
                color: #000;
                font-family: monospace;
        }
        
        div.container div.left div.content-left  input[type='text']
        {
           font-size: 15px;
                color: #000;
                font-family: monospace; 
        }
        
        div.container div.left div.content-left form div.one_div,
        div.container div.left div.content-left form div.second,
        div.container div.left div.content-left form div.three,
        div.container div.left div.content-left form div.input_bg
        
        {
            margin-bottom: 4%;    
        }
        div.container div.left div.content-left  div.one_div
        {
            margin-bottom: 4%; 
        }
        
        div.container div.left div.content-left form div.Select,
        div.container div.left div.content-left form div.Niveau
        {
            margin-top: 4%;
            margin-bottom: 4%;   
        }
        
        div.container div.left div.content-left form div.Select select,
        
        div.container div.left div.content-left form div.Niveau select
        {
            cursor: pointer;
            width: 70px;
            height: 30px;
            border: 1px solid #FFF;
            background: transparent;
            color: #FFF;
            outline: none;
            font-size: 18px;
            font-family: monospace;
            
        }
        
        div.container div.left div.content-left form div.Select select option,
        div.container div.left div.content-left form div.Niveau select option
        {
            color: #000;
            display: inline-block
        }
     
        
        div.container div.left div.content-left  input.recherche
        {
                position: absolute;
                top: 0px;
                left: 84.3%;
                width: 75px;
                height: 30px;
                color: #FFF;
                cursor: pointer;
                background-color: #000;
                border: none;
                padding: 5px;
                font-weight: bold;
                text-transform: capitalize;
                font-size: 13.5px;
                font-family: monospace;
                cursor: pointer;
                z-index: 2;     
        }
        
        input.Search
        {
            
        }
        
        div.container div.left div.content-left form div.second label
        {
                margin-right: 16%;
                display: inline-block;
        }
         
        div.container div.left div.content-left form div.three label
        {
              text-transform: capitalize;
        }
        
        div.container div.left div.content-left form div.input_bg label
        {
            float: left;
            display: inline-block;
                margin-right: 14%;
        }
        
        div.container div.left div.content-left form div.input_bg div.myDiv
        {
                width: 226px;
                height: 30px;
                background: #efe6e6;
                float: left;
                line-height: 30px;
        }
        
        div.container div.left div.content-left form div.input_bg div.myDiv input[type='radio']
        {
             margin-left: 26%;
            color: #983d3d;
            border: 1px solid #000;
            background: azure;
            display: inline-block;
            cursor: pointer;  
    }
    
       div.container div.left div.content-left div.btn_one,
       div.container div.left div.content-left div.btn_two
        {
            width: 300px;
            height: 30px;
            margin-bottom: 2%;
            margin-top: 2%;
            margin-left: 4%;
        }
        
        div.container div.left div.content-left div.btn_one input[type='submit']
        {
            
                border: none;
                color: #f7f7f7;
                font-weight: bold;
                width: 136px;
                height: 40px;
                background: #009688;
                font-weight: bold;
                font-size: 16px;
                text-transform: capitalize;
                font-family: monospace;
                cursor: pointer;
                border-radius: 8px;
                margin-top: 0.5%;
                margin-right: 10px;
        }
        
        div.container div.left div.content-left div.btn_two input[type='submit']
        {
                width: 134px;
                margin-left: 8%;
                background-color: #0f1514;
        }
        
        div.container div.left div.content-left div.btn_one input.one
        {
                background: #e91e63;
        }
        

div.container div.Footer
{

    width: 300px;
    height: 70px;
    color: #FFF;
    margin-left: 4%;
}

div.container div.Footer .heading h2
{
    
    font-size: 24px;
    color: #FFF;
    font-weight: bold;
    font-family: monospace;
    margin: 2%;   
    margin-top: 18%;
}
        
div.container div.Footer div.button
{

    margin-left: 6%;
    
}
        
div.container div.Footer div.button a button
{

        width: 120px;
        height: 30px;
        color: #000;
        background: #FFF;
        border: none;
        cursor: pointer;
        line-height: 30px;
        font-size: 16px;
        font-family: monospace;
        border-radius: 4px;
        padding: 0px 5px; 
        font-weight: bold;
    transition: color,background .5s ease-in-out;
    
}

div.container div.Footer div.button a:hover button
{

    color: #FFF;
    background-color: #0f1514;
    
}

body
{
            position: relative;
}

div.Pop_up
{

    position: absolute;
    top: 0px;
    right: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    bottom: 0px;
    background: rgba(0,0,0,0.5);
    display: none;
}
        
div.Pop_up div.content_PopUp
{

    width: 100%;
    height: 100%;
}
 
div.Pop_up div.content_PopUp div.Suppression
{
    position: absolute;
    top: 50%;
    height: 50%;
    background: #FFF;
    height: 123px;
    width: 330px;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 10px;
    border: 0;
}
        
div.Pop_up div.content_PopUp div.Suppression input[type='text']
{

    margin-bottom: 7%;
    border: 1px solid #30bbae;
    padding: 12px 10px;
    outline: none;
    width: 100%;
    color: #000;
    margin-top: 2%;
    
}

div.Pop_up div.content_PopUp div.Suppression input[type='submit']
{

    background: transparent;
    border: none;
    padding: 7px 12px;
    cursor: pointer;
    font-size: 13px;
    font-family: monospace;
    text-transform: capitalize;
    font-weight: bold;
    box-shadow: 1px 1px 3px rgb(0 0 0 / 50%);
    border-radius: 5px;
    margin-left: 34%;
    background: #30bbae;
    color: #FFF;

}
         
 button.close
{
    position: absolute;
    top: 61%;
    left: 59%;
    cursor: pointer;
    padding: 4px;
    background-color: #000;
    border: none;
    color: #FFF;
    outline: none;
}
        
div.container div.left div.content-left button.Modification
        {
            border: none;
            color: #f7f7f7;
            font-weight: bold;
            width: 120px;
            background: #0f1514;
            font-weight: bold;
            font-size: 16px;
            text-transform: capitalize;
            font-family: monospace;
            cursor: pointer;
            border-radius: 8px;
            position: absolute;
            top: 66%;
            left: 7.8%;
            height: 5%;
            width: 136px;
            height: 37px;
        }

button.seconde
        {

                border: none;
                color: #f7f7f7;
                font-weight: bold;
                width: 136px;
                height: 5.8%;
                background: #009688;
                font-weight: bold;
                font-size: 16px;
                text-transform: capitalize;
                font-family: monospace;
                cursor: pointer;
                border-radius: 8px;
                position: absolute;
                top: 58.4%;
                left: 12.5%;
        }

.out
{
    position: absolute;
    bottom: 0px;
    right: 8px;
    background: #009688;
    color: #FFF;
    cursor: pointer;
    padding: 5px 10px;
}
        
.out a
{
        display: inline-block;
        color: #FFF;
        text-decoration: none;
        font-size: 15px;
        font-family: monospace;
        font-weight: bold;   
}
        
.myDiv span.span_one
        {
        display: inline-block;
        color: #211d1d;
        position: absolute;
        top: 92px;
        left: 29%;
        font-weight: 600;
        font-family: monospace;
        font-size: 15px;
        }
        
.myDiv span.span_two
        {
    display: inline-block;
    color: #211d1d;
    position: absolute;
    top: 92px;
    left: 50%;
    font-weight: 600;
    font-family: monospace;
    font-size: 17px;
      }
   
.form_Update
        {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 60%;
        height: 60%;
        transform: translate(-50%,-50%);
        background: rgba(0,0,0,0.5);
        padding: 10px;
        display: none;
        }
   
div.form_Update div.content 
        {
            width: 100%;
            height: 100%;
            color: #FFF;
            margin-top: 5%;
        }
        
div.form_Update div.content div.Upade_nom
        {
                width: 100%;
                height: 40px;
                line-height: 40px;
                padding-left: 7%;
                margin-bottom: 0.5%;
        }
        
div.form_Update div.content div.Upade_nom label
        {
                font-size: 20px;
                display: inline-block;
                font-family: monospace;
        }
        
div.form_Update div.content div.Upade_nom input
        {
                width: 300px;
                height: 30px;
                border: 0;
                padding-left: 2%;
                color: #000;
                border-radius: 5px;
                outline: none;
                font-size: 16px;
                font-family: monospace;
        }
        
div.form_Update div.content div.Upade_nom input[name='Name']
        {
            margin-left: 9%;
        }
        
div.form_Update div.content div.Upade_nom select
        {
            cursor: pointer;
            width: 70px;
            height: 30px;
            border: 1px solid #FFF;
            background: transparent;
            color: #FFF;
            outline: none;
            font-size: 18px;
            font-family: monospace;
        }
        
div.form_Update div.content div.Upade_nom select option
        {
            color: #000;
        }
        
div.form_Update div.content input[type='submit']
        {
            width: 100px;
            height: 30px;
            background: transparent;
            border: 0px;
            color: #FFF;
            border: 1px solid #FFF;
            font-weight: bold;
            font-family: monospace;
            font-size: 16px;
            margin-left: 40%;
            cursor: pointer;
        }
        
.Footer_form
        {
            width: 250px;
            height: 30px;
            background: #FFF;
            position: absolute;
            bottom: 30px;
            left: 5%;
        }
        
.Footer_form input.Search
        {
                height: 100%;
                width: 72%;
                border: none;
                outline: none;
                padding-left: 2%;
                float: left;   
        }
        
.Footer_form input.recherche
        {
                width: 28%;
                float: left;
                height: 100%;
                background: #0f1514;
                color: #FFF;
                cursor: pointer;
                border: none;
                font-weight: 600;
                font-size: 12px;
        }
        
.info_Etudiants
        {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 60%;
                height: 60%;
                transform: translate(-50%,-50%);
                background: rgba(0,0,0,0.5);
                padding: 10px;
                color: #FFF;
                display: none
        }

div.info_Etudiants div.content_info
        {
            width: 100%;
            height: 100%;
        }
        
div.info_Etudiants div.content_info div.titre
        {
                    width: 100%;
                    height: 10%;
                    margin-top: 2%;
        }
    
div.info_Etudiants div.content_info div.titre h3
        {
                    text-align: center;
                    color: white;
                    font-size: 18px;
                    font-weight: bold;
                    font-family: monospace;
                    border-bottom: 1px solid white;
                    padding-bottom: 1.5%;
        }
        
div.info_Etudiants div.content_info div.list_Affichage
        {
                width: 100%;
                height: 60%;
               padding-top: 1%;
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

        }

.demo_para
        {
                font-size: 22px;
                font-family: monospace;
                text-align: center;
                text-decoration: line-through;
                color: #4caf50;
                width: 100%;
                height: 50px;
                background: red;
                color: #FFF;
                margin-top: 3%;
                line-height: 50px;
        }
      
button.button_Modiffier
        {
                color: #FFF;
                background: #009688;
                padding: 8px 10px;
                border: 0px;
                font-size: 14px;
                font-family: monospace;
                border-radius: 8px;
                outline: none;
                cursor: pointer;
                margin-left: 37%;
        }
    
.Update_button
        {      
                border: 1px solid #FFF;
                font-size: 18px;
                font-family: monospace;
                color: #FFF;
                background-color: transparent;
                padding: 5px 10px;
                margin-left: 70%;
                cursor: pointer;
                margin-right: 1%;
        }
        
button.Non
        {
                margin-left: 0px;
                padding: 5px 15px;
        }

.Footer_link
        {
            position: absolute;
            bottom: 0px;
            left: 0px;
            margin-left: 5%;
            width: 25%;
            height: 40px;
        }
        
.Footer_link a
        {
            color: #47b1a7;
            text-decoration: none;
            font-size: 18px;
            font-family: monospace;
            font-family: :monospace;
            font-weight: bold;
            /* margin-right: 0.4%; */
            display: inline-block;
            float: left;
            padding-right: 6%;
            cursor: pointer;
/*            padding-bottom: 18.5%;*/
        }
        
.Footer_link a:hover
        {
            color: #FFF;
        }
        
input.btn_recherche
        {
            
        }
.Niveau_Form
        {
          height: 25px !importante;  
        }
        
        .fas
        {
            font-weight: 900;
            position: absolute;
            left: 203px;
            top: 403px;
            color: #525050;
            margin-right: 10px;
            width: 30px;
            height: 30px;
        }
        
        
        
        div.div_Affichage
        {
                width: 60.1%;
                height: 650px;
                position: absolute;
                top: 20px;
                right: 26px;
                z-index: 2;
                display: none;
        }
        
        div.div_Affichage div.content_info        
        {
                width: 100%;
                height: 100%;
                color: #FFF;
        }
        
        div.div_Affichage div.content_info   div.Title
        {
            width: 100%;
            height: 50px;
            line-height: 50px;
            margin-bottom: 5%;
            line-height: 50px;
            font-size: 21px;
            font-weight: bold;
            font-family: monospace;
            text-align: center;
            border-bottom: 3px solid #FFF;
        }
        
         div.div_Affichage div.content_info   div.Title h3
        {
            
        }
        
        div.div_Affichage div.content_info  div.Affichagess
        {
            width: 100%;
            height: 551px;
        }
        
        div.div_Affichage div.content_info    div.Affichagess .Tables_info
        {
                width: 100%;
                text-align: center;
        }
        
        div.div_Affichage div.content_info    div.Affichagess .Tables_info tr
        {
                width: 100%;
                height: 35px;
                line-height: 35px;
                font-size: 17px;
                font-weight: bold;
                font-family: monospace;
        }
        
        div.div_Affichage div.content_info   div.Affichagess   .Tables_info  tr td
        {
                        border: 1px solid #FFF;
                            width: 133px;
        }
        
        .IMG_ICONS
        {
                    width: 83px;
                    height: 36px;
                    position: absolute;
                    top: -11px;
                    right: 20px;
        }
        
        .IMG_ICONS .img
        {
                    width: 89%;
                    height: 54px;
                    CURSOR: POINTER;
        }
        
</style>
</head>
    
    <body>
        
        
        
        
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
        
       
        <div class="div_Affichage">
        
            <div class="etudiants">
            
                <div class="content_info">
                
                    <div class="Title">
                                  <h3>Voici les donner d' etudiant rechercher : </h3>
                    </div>
                    
                    <div class="IMG_ICONS">
                        <img src="IMG/iconfinder_Close_Box_Red_34217.png" alt="icons" class="img" />
                    </div>
                    
                    <div class="Affichagess">
                    
                        <?php
                    
        if($utilisateur -> rowCount() > 0)
        {
            ?>
                        
                       <table class="Tables_info">
                           
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
                
                $_SESSION["sidi"] = $ba['Matricule'];
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
                
                                   
                           
                <?php 
                        echo "</table>";
                    ?>
                    
                    </div>
                </div>
                
            </div>
        
        </div>
        

        <div class="container">
        
                <div class="left">
            
                                    <div class="content-left">
                                        
                                                    <h2>Ajouter un Etudiants</h2>
                            
                                   
                              <div class="one_div">
                                  
                                  <!-- Start Partie recherche  affiches_info.php -->
                                  
                                <form METHOD='GET' Action='#' class="Niveau_Form">
                                    
                                    <label class="one_lab">Matricule </label>
                                    <input type='text' name='Code' required   />
    <input type="submit" name="recherche" value="recherche" class="recherche  BATTE" id="Affichages_tables" />
                                    
                                </form>

           
                                  
                                                <!-- End Partie recherche -->
                                  
                            </div>
                                        
                                <form Method='POST' action="#">
                                    
                                    <div class="second">
                                        
                                        <label>Nom</label>
                                    <input type='text' name='nom' required />
                                        
                                    </div>
                                    
                                    <div class="three">
                                    
                                        <label>datNaissance</label>
                                    <input type='date' name='date' required />
                                        
                                    </div>
                                    
                                    <div class="input_bg">
                                        
                                            <label>Genre</label>
                            <div class="myDiv">
                                        
                               <span class='span_one'>Masc</span>

                             <input type='radio' name='redio1' value="Masc"  required >

                                <span class='span_two'>Fem</span>

                             <input type='radio' name='redio1' value='Fem'  required > 

                        </div>
                                        
        </div>
                                    
                                    <br><br>
                                    <div class="Select">
                                        
                                    <label>Filiere</label>
                                    <select name="Filiere">
        
                                    <option value="GI">GI</option>    
                                    <option value="RT">RT</option>    
                                    <option value="BA">BA</option>  
                                        
                                    </select>
                                        
                                    </div>
                                    
                                    <div class="Niveau">
                                        
                                        <label>Niveau</label>
                                        <select name="Niveau">
                                        <option value="L1">L1</option>
                                        <option value="L2">L2</option>
                                        <option value="L3">L3</option>
                                            
                                        </select>    
                                        
                                    </div>
                                    
                                    <br>
                                    
                               <div class="btn_one">
                                    
                                   
                                        <input type="submit" value='insertion' name='insertion' class="one" />
                                        
                                    
                                    
                                </div> 
                                
                                    
                                </form>                                  
                                        
                            
                            <button class="seconde" id="first_popUp">Supprimer</button> 

        
                                        
                                        
                            <div class="btn_two">
                                    
                                </div>    
                                        
                                        <button  class="Modification" id="seconde_popUp" >Modification</button>
                                    
                            
                        </div>
            
                    
                    
                        <div class="Footer">
                    
                            <div class="heading">
                                <h2>Aller à :  </h2>
                            </div>
                                                  
                        </div>
                    
                </div>
            
            <?php
            
//                if(isset($_SESSION["sidi"]))
//            {
//            
            ?>
                        
                <div class="right Affichages_tables">
            
                    <div class="content_right">
                        
                        <table>
                        
                            <tr class="tr_one">
                                <td>Matricule</td>
                                <td>Nom</td>
                                <td>DatNaissance</td>
                                <td>Genre</td>
                                <td>Filiere</td>
                                <td>Niveau</td>
                            </tr>
                             <?php
                            
                            include('connexion.php');
                            $requete = "SELECT *FROM etudiant ORDER BY Matricule  " ;
                            $result = $BD -> query($requete);
                            $data = $result -> fetchAll();
                            
                            for($i=0; $i<count($data); $i++)
                            {
                                $matricul = $data[$i]['Matricule'];
                                $nom = $data[$i]['Nom'];
                                
                                $DatNaiss = $data[$i]['DatNaissance'];
                                $sexe = $data[$i]['Genre'];
                                $filiere = $data[$i]['Filiere'];
                                $niveau = $data[$i]['Niveau'];
                                
    echo "<tr class='Best'><td>I$matricul</td><td>$nom</td><td>$DatNaiss</td><td>$sexe</td><td>$filiere</td><td>$niveau</td></tr>";
                                
                            }
                            
                            
                         
                            ?>
                            
                            
                        </table>
                    
                    </div>
                    
                </div>
            
        </div>
        
        
        <?php
                    
//                }
            
            ?>
        

        
        <!--  partie suppression-->
        
        <div class="Pop_up first_popUp">
        
            <div class="content_PopUp">
            
                <div class="Suppression">
            
                    <form Method='POST' action='#'>
                    
                        <input type="text" name='Supp' placeholder="Entre un Matricule" required />
                        <input type='submit' name="supprimer" value='supprimer' class="Actions333" />
                        
                    </form>
                    
                </div>
                
                <button class="close">Close</button> 
                          
            </div>
         
            
        </div>
        
        
        <div class="Pop_up seconde_popUp">
        
            <div class="content_PopUp">
            
                <div class="Suppression">
                    
                   
                    
                    <form Method='POST' action='#'>
                        
                        <input type='text' name='m_d' placeholder="Entre un Matricule" required/>
                        <button type='submit' class="button_Modiffier" >Modifiee</button>
                        
                    </form>
                    
                </div>
                
                <button class="close">Close</button> 
                
            </div>
         
            
        </div>
        
        <!-- partie suppression-->
        
        <!-- Start Login Out -->
        
                        <div class="out">
                        <a href="logOut.php">Login Out</a>
                        </div>
        
        <!-- End Login Out -->
        
        <!--- Start Formulaire Update -->
        
        
        <div class="form_Update">
            <div class="content">
            
              <form method='POST' action="loc.php">
              <?php 
                  
                  if (isset($_POST['m_d'])){
                      echo"<style>.form_Update{display:block !important}</style>";
                
                        $m=$_POST['m_d'];
                      
                        echo "<h1>$m</h1>";
                      
                    $long = strlen($m);

                     $recherch = substr($m,1, $long);
                      
                        $don=$BD->prepare("SELECT * FROM etudiant WHERE Matricule = '$recherch' ");
                        $don->execute();
                        foreach($don->fetchAll() as $d){                
                          ?>
                  
                  <div class="Upade_nom">
                  
                      <label>
                      
                          Matricule : 
                          
                      </label>
                      
                      <input readonly type='text' name = 'Matric' value="<?php echo 'I'.$d['Matricule']; ?>" required />
                      
                  </div>
                  
                  <div class="Upade_nom">
                  
                      <label>
                      
                          Nom : 
                          
                      </label>
                      
                      <input type='text' name="Name" value="<?php echo $d['Nom']; ?> " required />
                      
                  </div>
                  
                  <div class="Upade_nom">
                  
                      <label>
                      
                          DatNaissance : 
                          
                      </label>
                      
                      <input type='text' name = 'Naiss' value="<?php echo $d['DatNaissance']; ?> " required />
                      
                  </div>
                  
                  <div class="Upade_nom">
                  
                      <label>
                      
                          Genre : 
                          
                      </label>
                      
                      <select name="gen">
                          
                          <option value="Masc" <?php if($d['Genre']=='Masc') echo'selected'; ?> >Masc</option>
                          <option value="Fem" <?php if($d['Genre']=='Fem') echo'selected'; ?> >Fem</option>
                          
                      </select>
                      
                  </div>
                  
                  <div class="Upade_nom">
                  
                      <label>
                      
                          Filiere : 
                          
                      </label>
                      
                      <select name="Fill">

                          <option value="GI" <?php if($d['Filiere']=='GI') echo'selected'; ?>>GI</option>
                          <option value="RT" <?php if($d['Filiere']=='RT') echo'selected'; ?>>RT</option>
                          <option value="BA" <?php if($d['Filiere']=='BA') echo'selected'; ?>>BA</option>
                          
                      </select>
                      
                  </div>
                  
                  <button type='submit' class="Update_button">Modifier</button>
                  <button type='submit' class="Update_button Non">Non</button>

                  <?php  
                  }
                     
                          
                  }

                  
                            else
                          {
                              echo"<style>.form_Update{display:none !important}</style>";
                          }
                          
                  
                   ?>
              </form>
                
            </div>
            
            
        </div>
        
        <!--- End Formulaire Update -->
        
        
   
        <div class="Footer_link">
        
            <a href="Page_Homme.php" target="_blank">Homme</a>
            <a href="page_Matiere.php" target="_blank">Matiere</a>
             <a href="page_Note.php" target="_blank">Notes</a>
            
        </div>
        
        
        <!-- End partie recherche  -->
        
        <!-- Start Partir Affichage de recherche -->
        
        
        
        <!-- End Partir Affichage de recherche -->
        
        
        
        
        
        
        <script src='JS/jquery-3.6.0.min.js'></script>
        <script src='JS/script.js'></script>
        
        <script>
        
                $(".recherche").click(function(){

                    $(".Affichages_tables").hide();
                    $(".div_Affichage").fadeIn();
                     
                });
            
            
            $(".IMG_ICONS img").click(function(){
               
              $(".div_Affichage").hide();
              $(".Affichages_tables").fadeIn();
                
            });
        
        </script>
    
    </body>
</html>


    