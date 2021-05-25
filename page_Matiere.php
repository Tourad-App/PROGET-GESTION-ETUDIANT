
<?php

            include('connexion.php');


        /* Start Ajouter un Etudiants */
    

        if(isset($_POST['envoyer']))
                        {

            
                $matiere = $_POST['matiere'];
                $code = $_POST['code'];
                $coef = $_POST['coef'];    


            if(!empty($matiere)  AND !empty($code) AND !empty($coef))
            {
                include('connexion.php');
                 $requete = "INSERT INTO matiere (Nom_Matiere,Code_Matiere,Coeff) VALUES ('$matiere','$code','$coef') "; 
                 $BD -> exec($requete);
            }


        }




        /* End Ajouter un Etudiants */


        /* Start Suppression un Etudiants */


        if(isset($_POST['supprimer']))
        {

            $Cod = $_POST['Supp'];

            if(!empty($Cod) && is_string($Cod))
            {

                include("connexion.php");

                $requete = "DELETE FROM matiere WHERE Code_Matiere = '$Cod' ";

                $BD -> exec($requete);

                header('Location:page_Matiere.php');

            }

        }


/* End Suppression un Etudiants*/






?>



<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Page Matière</title>
    <meta charset='utf-8' />
    
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
            background-image: url('IMG/ffb02ffdfddd9680f17bf02bd606ff9a.jpg');
            background-size: cover;
        }
    
    div.container div.content_container
        {
    width: 100%;
    height: 100%;
    position: relative;
    top: 15px;
    left: 20px;
    /* background-color: #FFF; */
    width: 440px;
    height: 300px;
        }
    
    div.container div.content_container div.Ajouter
        {
            
            width: 100%;
            height: 60px;
            line-height: 60px;
        }
        
    div.container div.content_container div.Ajouter h2
        {
            width: 100%;
            height: 56px;
            margin-bottom: 2%;
            line-height: 60px;
            color: #FFF;
            font-size: 28px;
            font-weight: bold;
            font-family: monospace;
            font-family: monospace;
            margin-left: 20%;
        }
        
    div.container div.content_container form
        {
            
        }
     div.container div.content_container form   div.form_div
        {
            
            margin-bottom: 4%;
            
        }
    
     div.container div.content_container form   div.form_div label
        {
            
                font-size: 19px;
                display: inline-block;
                font-family: monospace;
                font-weight: bold;
                margin-right: 3%;
                color: #57e8ff;
                margin-right: 16%;
                display: inline-block;
            
        }
        
    div.container div.content_container form   div.form_div input[type='text']
        {
            
                font-size: 15px;
                color: #000;
                font-family: monospace;
                height: 30px;
                border: none;
                width: 219px;
                border: 1px solid #333;
                outline: none;
                padding-left: 2%;
            
        }
        
    div.container div.content_container form   div.form_div input[type='submit']
        {

            border: none;
            color: #f7f7f7;
            font-weight: bold;
            width: 100px;
            height: 36px;
            background: #009688;
            font-weight: bold;
            font-size: 16px;
            text-transform: capitalize;
            font-family: monospace;
            cursor: pointer;
            border-radius: 8px;
            position: absolute;
            top: 79.8%;
            left: 72.5%;
        }
        
    
     div.container div.content_container form   div.form_div label.label_one  
        {
                margin-right: 18.4%;
        }
    
     div.container div.content_container form   div.form_div label.label_COEFF
        {
                margin-right: 18.5%;
        }
        
        body
        {
            position: relative;
        }
        
    div.div_right
        {
color: #FFF;
    width: 60%;
    height: 400px;
    /* width: 100%; */
    height: 90%;
    background: #f5f5f5;
    position: absolute;
    top: 5%;
    right: 3%;
/*    border: 2px solid #797979;*/
        }
        
  div.div_right  table
        {
             width: 100%;
        }
        
    div.div_right  table tr
        {
                height: 32px;
                width: 100%;
                background-color: #009688b5;
                font-size: 16px;
                font-family: monospace;
        }
        
        
     div.div_right  table tr td
        {
            border: 1px solid #999;
            font-weight: 600;
            font-family: monospace;
            font-size: 14px;
            height: 28px;
            line-height: 28px;
            text-align: center;
            color: #FFF;
            padding-left: 1%;
        }
        
        div.div_right  table tr td.right_td
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
        
        div.Footer_link
        {
            
            position: absolute;
            bottom: 0px;
            left: 0px;
            margin-left: 5%;
            width: 24%;
            height: 40px;
            
        }
        
        div.Footer_link a
        {
                color: #47b1a7;
                text-decoration: none;
                font-size: 18px;
                font-family: monospace;
                font-family: :monospace;
                font-weight: bold;
                display: inline-block;
                float: left;
                padding-right: 6%;
                cursor: pointer;
        }
        
        div.Footer
        {
                position: absolute;
                top: 310px;
                left: 12%;
        }
        
        div.Footer button:first-child
        {

                font-size: 15px;
                font-family: monospace;
                background: #e91e63;
                border: none;
                color: #f7f7f7;
                font-weight: bold;
                /* width: 121px; */
                height: 30px;
                font-size: 16px;
                text-transform: capitalize;
                cursor: pointer;
                border-radius: 8px;
                width: 136px;
                height: 37px;
        }
        
        div.Footer button:last-child
        {

            border: none;
            color: #f7f7f7;
            font-weight: bold;
            width: 121px;
            height: 30px;
            background: #0f1514;
            font-weight: bold;
            font-size: 16px;
            text-transform: capitalize;
            font-family: monospace;
            cursor: pointer;
            border-radius: 8px;
            width: 136px;
            height: 37px;
        }
        
        .Pop_up 
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
        
        .content_PopUp
        {
                 width: 100%;
                 height: 100%;
           
        }
        
     .Pop_up .content_PopUp .Suppression
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
                font-weight: bold
        }
        
        div.one_div
        {
         margin-bottom: 4%;   
        }
        
        div.one_div form.Niveau_Form
        {
            width: 393px;
            margin-left: 5%;
            position: relative;
        }
        
        div.one_div form.Niveau_Form label
        {
            margin-left: -5%;
            font-size: 19px;
            display: inline-block;
            font-family: monospace;
            font-weight: bold;
            margin-right: 9%;
            color: #57e8ff;
        }
        
        div.one_div form.Niveau_Form input[type='text']
        {
                    font-size: 15px;
                    color: #000;
                    font-family: monospace;
                    height: 30px;
                    border: none;
                    width: 219px;
                    border: 1px solid #333;
                    outline: none;
                    padding-left: 2%;
        }
        
        div.one_div form.Niveau_Form input[type='submit']
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
        
    </style>
    
</head>
    
    <body>
    
    <div class="container">
    
        <div class="content_container">
            
            <div class="Ajouter">
            
                <h2>Ajouter Matière</h2>
                
            </div>
                                 
                        <div class="one_div">
                                       
                                <form METHOD='GET' Action='affiches_info.php' class="Niveau_Form">
                                    <label class="one_lab">Matricule </label>
                                    <input type='text' name='Code' required   />
                                    <input type="submit" name="recherche" value="recherche" class="recherche  BATTE" />       
                                </form>
                                  
                            </div>
        
            <form Method='POST' action='#'>
            
                <div class="form_div">
            
                    <label class="label_one">Nom Matière</label>
                    <input type="text" name="matiere" required />
                    
                </div>
                
                 <div class="form_div">
            
                    <label>Code Matière</label>
                    <input type="text" name="code" required />
                    
                </div>
                
                 <div class="form_div">
            
                    <label class="label_COEFF">Coefficient</label>
                    <input type="text" name="coef" required />
                    
                </div>
            
                 <div class="form_div">
            
                    <input type="submit" name="envoyer" value="Enregistre"  />
                    
                </div>
                
            </form>
            
        </div>
        
    </div>
    
        <div class="div_right">
            <table>
                
                <tr>
                    <td>Nom Matière</td>
                    <td>Code Matière</td>
                    <td>Coefficient </td>
                </tr>
                       
                
                     
                         <?php
                                 
                            include('connexion.php');
                            $requete = "SELECT *FROM matiere ORDER BY Coeff  " ;
                            $result = $BD -> query($requete);
                            $data = $result -> fetchAll();
                            
                            for($i=0; $i<count($data); $i++)
                            {
                                $Nom_Matiere = $data[$i]['Nom_Matiere'];
                                $Code_Matiere = $data[$i]['Code_Matiere'];
                                $Coeff = $data[$i]['Coeff'];
                                
                                
echo "<tr><td class='right_td'>$Nom_Matiere</td><td class='right_td'>$Code_Matiere</td><td class='right_td'>$Coeff</td></tr>";
                                
                            }
                            
                            
                         
                            ?>


            </table>
        </div>
        
        
        <div class="Footer_link">
        
            <a href="Page_Homme.php" target="_blank">Homme</a>
            <a href="Gestion_Etudiants.php" target="_blank">Etudiant</a>
            <a href="page_Note.php" target="_blank">Note</a>

        </div>
        <div class="Footer">
            
                <button id="first_popUp" >supprimer</button>
                <button>modification</button>
                
        </div>
        
                <!--  partie suppression-->
        
        <div class="Pop_up first_popUp">
        
            <div class="content_PopUp">
            
                <div class="Suppression">
            
                    <form Method='POST' action='#'>
                    
                        <input type="text" name='Supp' placeholder="Entre Code  Matiere" required />
                        <input type='submit' name="supprimer" value='supprimer' class="Actions333" />
                        
                    </form>
                    
                </div>
                
                <button class="close" id="Pop_up">Close</button> 
                          
            </div>
         
            
        </div>
        
                <!-- Start Login Out -->
        
                        <div class="out">
                        <a href="logOut.php">Login Out</a>
                        </div>
        
                <!-- End Login Out -->
        
        
        <script src='JS/jquery-3.6.0.min.js'></script>
        <script src='JS/script_matiere.js'></script>
        
    </body>
</html>













