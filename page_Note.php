<?php


                            include('connexion.php');

                        /* Start Ajouter un Etudiants */


                        if(isset($_POST['Envoyer']))
                                        {




                                $Code_matiere = $_POST['Code_matiere'];
                                $Note_matiere = $_POST['Note_matiere']; 


                                $Cod = $_POST['matricule'];


                                $long   = strlen($Cod);


                                    $matricule  = substr($Cod,1, $long);



                            if(!empty($matricule)  AND !empty($Code_matiere) AND !empty($Note_matiere))
                            {


                                include('connexion.php');
                    $requete = "INSERT INTO notes VALUES ('$matricule','$Code_matiere','$Note_matiere')"; 
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

                                        $requete = "DELETE FROM notes WHERE Cod_Matiere = '$Cod' ";

                                        $BD -> exec($requete);

                                        header('Location:page_Note.php');

                                    }

                                }


            /* End Suppression un Etudiants*/



?>

<!DOCTYPE  html>
<html lang="en">
<head>

    <title>Page Notes</title>
    <meta charset="utf-8" />
    
    <style>
    *
        {
            padding: 0px;
            margin:0px;
            box-sizing:border-box;
                
        }
        
    div.container

        {
            width: 100%;
            height: 100vh;
            background-image: url('IMG/ffb02ffdfddd9680f17bf02bd606ff9a.jpg');
            background-size:cover;
        }
        
    div.container div.left
        {
         width: 40%;
         height: 90%;
         float:left;
        }
    
    div.container div.left div.container_left
        {
            width: 100%;
            height: 100%;
        }
        
    div.container div.left div.container_left  div.left_Title
        {
            width: 100%;
            height: 60px;
            margin-bottom: 2%
        }
     div.container div.left div.container_left  div.left_Title h2
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
                margin-top: 3%;
        }
        
    div.container div.left div.container_left div.Remplir_Note  
        {
            color:#FFF;
            margin-left: 5%;
        }
    
    div.container div.left div.container_left div.Remplir_Note div.content_div
        {
            margin-bottom: 4%;
        }
        
    div.container div.left div.container_left div.Remplir_Note div.content_div label
        {
                font-size: 19px;
                display: inline-block;
                font-family: monospace;
                font-weight: bold;
                margin-right: 3%;
                color: #57e8ff;
        }
        
    div.container div.left div.container_left div.Remplir_Note div.content_div label.input_onee  
        {
            margin-right: 13%;
        }
        
    div.container div.left div.container_left div.Remplir_Note div.content_div label.input_seconde
        {
            margin-right: 29%;
        }
        
    
    div.container div.left div.container_left div.Remplir_Note div.content_div input[type='text']
        {
            height: 30px;
            border: none;
            width: 219px;
            border: none;
            outline: none;
            padding-left: 2%;
            font-size: 15px;
            color: #000;
            font-family: monospace;
            border:1px solid #000;
        }
        
    div.container div.left div.container_left div.Remplir_Note div.content_div input[type='submit']
        {
                outline: none;
                padding-left: 2%;
                font-size: 15px;
                font-family: monospace;
                background: #e91e63;
                border: none;
                color: #f7f7f7;
                font-weight: bold;
                font-size: 16px;
                text-transform: capitalize;
                cursor: pointer;
                border-radius: 8px;
                margin-top: 6%;
                margin-left: 20%;
                height: 36px;
                width: 136px;
        }
        
        
    div.container div.left div.Footer
        {
        position: relative;
        top: -50px;
        left: 100px;
        color: #FFF;
        margin-left: 29.8%;
        height: 11.8%; 
            
        }
        
    div.container div.left div.Footer button:first-child
        {
            background: #009688;
            font-weight: bold;
            font-size: 16px;
            text-transform: capitalize;
            font-family: monospace;
            cursor: pointer;
            border-radius: 8px;
            border: none;
            display: block;
            color: #f7f7f7;
            width: 136px;
            height: 37px;
        }
    
    div.container div.left div.Footer 
        {
            position: relative;
            top: -57px;
            left: 100px;
            color: #FFF;
            margin-left: 31.4%;
            height: 30px;
            
        }
        
    div.container div.left div.Footer  button:last-child  
        {
                margin-top: 2%;
                position: absolute;
                top: 36px;
                left: -64px;
                background: #0f1514;
                font-weight: bold;
                font-size: 16px;
                text-transform: capitalize;
                font-family: monospace;
                cursor: pointer;
                border-radius: 8px;
                border: none;
                display: block;
                color: #f7f7f7;
                width: 136px;
                height: 37px;
        }
        
    div.container div.right
        {
         width: 60%;
         height: 100vh;
         float:left;
        }
        
    div.container div.right div.conatiner_right
        {
            width: 100%;
            height: 90%;
            color:#FFF;
            position: relative;
            top: 5%;
            right: 3%;
            background: #FFF
        }
    div.container div.right div.conatiner_right table
        {
            position:absolute;
            top: 0px;
            right: 0px;
            border: 1px solid #FFF;
            margin: 0px;
            width: 100%;
            border: 1px solid #FFF;
            background: #f5f5f5;
        }
     
    div.container div.right div.conatiner_right table tr
        {
            height: 32px;
            width: 100%;
            background-color: #009688b5;
            font-size: 16px;
            font-family: monospace;
        }
     div.container div.right div.conatiner_right table tr td
        {
              
        text-align: center;
        text-transform: capitalize;
        width: 10%;
        
        }
        
    div.container div.right div.conatiner_right table tr td.right_td
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
            
            color: #FFFF;
            position: absolute;
            bottom: 0px;
            left: 0px;
            margin-left: 4%;
            width: 28%;
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
/*            text-decoration: underline;*/
        }
        
        body
        {
            position: relative;
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
        

        
        
    </style>
    
</head>
    <body>
    
    <div class="container">
    
        <div class="left">
            
            <div class="container_left">
            
            <div class="left_Title">
            <h2>Ajouter une Note</h2>    
            </div>
            
            <div class="Remplir_Note">
            
                <form Method='POST' action="#">
                
                    <div class="content_div">
                        
                        <label>Matricul etudiant</label>
                        <input type="text" name="matricule" required />
                        
                    </div>
                    
                    <div class="content_div">
                        
                        <label class="input_onee" >Code Matiere</label>
                        <input type="text" name="Code_matiere" required />
                        
                    </div>
                    
                     <div class="content_div">
                        
                        <label class="input_seconde">Note</label>
                        <input type="text" name="Note_matiere" required />
                        
                    </div>
                    
                     <div class="content_div">
                        
                        <input type="submit" name="Envoyer" value="Inserte" required />
                        
                    </div>
                    
                </form>
                
            </div>
<!--
                
            <div class="Footer">
            
                <button>supprimer</button>
                <button>modification</button>
                
            </div>
-->
                
         <div class="Footer">
            
                <button id="first_popUp" >supprimer</button>
                <button>modification</button>
                
        </div>
                
            </div>
            
        </div>
        
        <div class="right">
            
        <div class="conatiner_right">
        
            <table border="1">
            
                <tr>
                
                    <td>code etudiant</td>
                    <td>code matiere</td>
                    <td>note</td>
                    
                </tr>         
                                     
                         <?php
                                 
                            include('connexion.php');
                            $requete = "SELECT notes.*, matiere.Coeff, matiere.Nom_Matiere FROM `notes` INNER JOIN matiere ON notes.Cod_Matiere=matiere.Code_Matiere" ;
                            $result = $BD -> query($requete);
                            $data = $result -> fetchAll();
                            $sc=0;
                            for($i=0; $i<count($data); $i++)
                            {
                                $Code_Etudiant = $data[$i]['Code_Etudiant'];
                                $Cod_Matiere = $data[$i]['Cod_Matiere'];
                                $Coeff = $data[$i]['Coeff'];
                                $valeur = $data[$i]['valeur'];
                                $sc+=intval($Coeff);
                                
echo "<tr><td class='right_td'>I$Code_Etudiant</td><td class='right_td'>$Cod_Matiere</td><td class='right_td n' value=";
  echo $Coeff*$valeur;
    echo " title=$sc>$valeur</td></tr>"; 
                       if($i%5==0 && $i>=5)    {     
 echo"<tr> <td>Moyenne : <span  class='moy'>12.45<span></td> "; echo" <td>OBS : Admin</td> </tr>";} } 
                                                
                         
                            ?>

                
            </table>
            
        </div>
        <script>
            
            
            </script>    
        </div>
        
    </div>
        
<!--
            <div class="Footer">
                    
                <div class="heading">
                    
                                <h2>Aller à :  </h2>
                    
                </div>
                                                  
            </div>
-->
        
         <div class="Footer_link">
        
            <a href="Page_Homme.php" target="_blank">Homme</a>
            <a href="Gestion_Etudiants.php" target="_blank">Etudiant</a>
            <a href="page_Matiere.php" target="_blank">Matiere</a>
            
        </div>
        
        
        
        
                
                <!--  partie suppression-->
        
        <div class="Pop_up first_popUp">
        
            <div class="content_PopUp">
            
                <div class="Suppression">
            
                    <form Method='POST' action='#'>
                    
                        <input type="text" name='Supp' placeholder="Entre Code  Matiere" required />
<input type='submit' name="supprimer" value='supprimer' class="Actions333" return = 'confirm(\"Vous etes sur a supprimer votre note\");' />
                    
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
        <script src='JS/script_notes.js'></script>
        <script>
                  $(function(){
                      
                      s=0;for(i=0;i<$(".n").length;i++){ s+=parseInt($($(".n")[i]).attr('value'));}
                           sc=parseInt($($(".n")[$(".n").length-1]).attr('title'));
                        
                        $(".moy").text(s/sc); 
                                            
                    
                  });
        </script>
        
        
        
    </body>
</html>


