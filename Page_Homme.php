<?php

    include ("connexion.php");

    function myFunctCount($select,$tab)
    {
        
        global $BD ;
        $requete = $BD -> prepare(" select COUNT(DISTINCT($select))  FROM $tab ");
        $requete -> execute();
        
        echo $requete -> fetchColumn();
    }


?>



<!DOCTYPE html>
<html lang="en">

    <head>
    <title>La page principale</title>
    <meta charset="utf-8"/>
    
    <style>
    *
        {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
    
    .page_Homme
        {
            
            width: 100%;
            height: 100vh;
            background-size: cover;
            color: #000;
        }
        
    .page_Homme section.header 
        {
            width: 100%;
            height: 14%;
            background: black;
        }
        
         .page_Homme section.header h2
        {
         font-size: 27px;
    text-align: center;
    color: #FFF;
    text-transform: uppercase;
    font-family: monospace;
    padding-top: 1%;   
        }
        
    .container
        {
            width: 80%;
            margin: auto;
        }
  
              
    .content_header
        {
            width: 100%;
            height: 53px;
            line-height: 53px;
        }
        
      .content_header  div.Logo
        {
            width: 50%;
            height: 100%;
            float: left
        }
        
        .content_header  div.Logo h2
        {
            color: #009688;
            font-size: 29px;
            font-weight: bold;
            font-family: monospace;
            text-decoration: underline;
            width: 124px;
            padding-bottom: 0px;   
        }
        
        .content_header  div.Logo span
        {
                display: inline-block;
                color: #FFF;
                text-decoration: underline;
        }
        
        .content_header  div.Search 
        {
            width: 50%;
            height: 100%;
            float: left
        }
    
      .content_header  div.Search form
       {
            
        }
        
       .content_header  div.Search form input[type='search']
        {
            width: 80%;
            height: 37px;
            padding: 8px;
            border: none;
            outline: none;
        }
        
        .content_header  div.Search form input[type='submit']
        {
                height: 37px;
                width: 18%;
                background: #009688;
                color: #FFF;
                border: none;
                font-size: 14px;
                font-family: monospace;
                text-transform: capitalize;
                cursor: pointer;
        }
        
      section.statistique
        {
                width: 80%;
                height: 70%;
                background-color: #f9f9f9;
                margin: auto;
                margin-top: 4%;
                box-shadow: 0px 0px 3px rgb(0 0 0 / 50%);
                border-top: 6px solid #009688;
        }
                
      section.statistique  .content_statistique 
        {
            width: 100%;
            height: 100%;
        }
        
     section.statistique  .content_statistique  div.show
        {
            width: 100%;
            height:227px;
            margin-bottom: 1%;
        }
        
        section.statistique  .content_statistique  div.show div.div_left
        {
            width: 33.33%;
            height: 100%;
            float: left;  
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.content_img
        {
            position: relative;
            top: 11px;
            left: 0px;
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.content_img img
        {
                position: absolute;
                top: 12px;
                left: 26px;
                right: 0px;
                bottom: 0px;
                height: 200px;
                width: 170px;
                box-shadow: 0px 0px 3px rgb(0 0 0 / 50%);
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.content_img img.img_one
        {
            left: 60px;
        }
        
                section.statistique  .content_statistique  div.show div.div_left div.content_img img.img_tow
        {
            left: 60px;
        }
        


        
        section.statistique  .content_statistique  div.show div.div_left div.content_img a
        {

            display: inline-block;
            position: absolute;
            left: 64px;
            bottom: -266px;
            font-size: 15px;
            font-weight: bold;
            font-family: monospace;
            color: #FFF;
            text-decoration: none;
            background: #009688;
            padding: 10px 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 120px;
            text-align: center;
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.content_img a.liens_one
        {
            left: 85px;
            
        }
        
         section.statistique  .content_statistique  div.show div.div_left div.content_img a.liens_two
        {
                left: 85px;
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.content_img a.liens_threee
        {
            margin-left: 14px;   
        }
        
        section.statistique  .content_statistique  div.show div.div_left div.Count
        {
            position: absolute;
            top: 11px;
            left: -7px;
            width: 30px;
            height: 30px;
            background: #171717;
            color: #FFF;
            border-radius: 5px;
            text-align: center;
            line-height: 30px;
        }

                section.statistique  .content_statistique  div.show div.div_left div.content_img img.img_etud
       {
           left: 54px;
        }
        
        body
        {
            position: relative;
        }
        
        div.Footer
        {
                position: absolute;
                bottom: 10px;
                left: 50%;
                font-size: 18px;
                font-family: monospace;
                text-transform: capitalize;
                font-weight: bold;
                color: #000;
                transform: translateX(-50%);
        }
        
        div.Footer span
        {
                display: inline-block;
                color: #009688;
                text-decoration: underline;
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
        
        <div class="page_Homme">
        
            <section class="header">
                
                <h2>Gestion Des Etudiants <br> ISCAE 2021</h2>

            
        </section>
        
        <section class="statistique">
        
            <div class="container">
                
                <div class="content_statistique">
                
                    <div class="show">
                    
                        <div class="div_left">
                            
                            <div class="content_img">
                            <div class="Count">
                              <span><?php myFunctCount("Matricule","etudiant") ?></span>
                            </div>
                            <a href="Gestion_Etudiants.php" class="liens_threee">Etudiants</a>
                                <img src="IMG/39971.png" alt="etud" class="img_etud" />
                            </div>
                            
                        </div>
                        <div class="div_left">
                        
                            <div class="content_img">
                            <div class="Count">
                                <span><?php myFunctCount("Nom_Matiere","matiere") ?></span>
                            </div>
                                <a href="page_Matiere.php" class="liens_one">Matieres</a>
                                <img src="IMG/mcj038257400001.jpg" alt="matiere" class="img_one" />
                            </div>
                        
                        </div>
                        
                                                <div class="div_left">
                        
                            <div class="content_img">
                            <div class="Count">
                                <span><?php myFunctCount("valeur","notes") ?></span>
                            </div>
                                <a href="page_Note.php" class="liens_two">Notes</a>
                          
                                <img src="IMG/unnamed.png" alt="note" class="img_tow" />
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="show">
                    
                        <div class="div_left"></div>
                        <div class="div_right"></div>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </section>
    
        
        </div>
        
        <div class="Footer">
                <h3>Copy right <span>2021</span></h3>
        </div>
        
                
                <!-- Start Login Out -->
        
                        <div class="out">
                        <a href="logOut.php">Login Out</a>
                        </div>
        
                <!-- End Login Out -->
    
    </body>
</html>
