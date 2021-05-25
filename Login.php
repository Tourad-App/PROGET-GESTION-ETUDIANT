 <?php






    session_start();
        
    if(isset($_POST['env']))
    {
        

        
        $login = $_POST['login'];
        $password = $_POST['mdp'];
        
        if(!empty($login)  && !empty($password))
        {
            
            include("connexion.php");
            
$requete = $BD ->prepare( "SELECT * FROM login WHERE login = ? AND Password = ? " );
        $requete -> execute(array($login,$password));
        $result = $requete -> rowCount();
       
            if($result > 0)
            {
                $data = $requete -> fetch();
                $_SESSION['name'] = $data['niveau'];
                $_SESSION['u'] = $data['login'];
                
            }
            else
            
            {
                echo "Un Ou plusieurs champs manquer";
            }
            
        }
        
    }

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion D'etudiants</title>
    
    <style>
    
*
{
    padding: 0px;
    margin: 0px;
    box-sizing:border-box;
}

.Login
{
    width: 100%;
    height: 100vh;
    background-color: #edffdb;
}

.Login .container
{
    width: 90%;
    height: 100%;
    margin: auto;
    background: #ffffff;
    box-shadow: 1px 1px 9px rgb(0 0 0 / 50%);
    padding: 10px;
    position: relative;
}

div.Login div.container div.content 
{
            position: absolute;
            top: 2%;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
}

div.Login div.container div.content div.Login-title
{
    width: 100%;
    height: 50px;
    background-color: #fff0c287;
    margin-bottom: 2%;
    text-align: center;
    line-height: 50px;
    border: 1px solid #999;
}
      
div.Login div.container div.content div.Login-title h2
{
    color: #e91e63;
    font-size: 42px;
    text-transform: uppercase;
    font-weight: bold;
}
        
div.Login div.container div.content div.Formulaire 
{
    
    width : 100%;
    height: 500px;
    border: 1px solid #999;
    background-color: #fff0c287;
    
}

div.Login div.container div.content div.Formulaire div.content_formulaire
{
    width: 100%;
    height: 100%;
    margin-top: 14%;
    padding: 10px;
}

div.Login div.container div.content div.Formulaire div.content_formulaire form
        {
          margin-left: 4%;   
        }

div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input   
{
    width: 100%;
    height: 60px;
    line-height: 60px;
}
   
div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input label
{
 
    
        display: inline-block;
        color: #000;
        text-transform: capitalize;
        margin-left: 2%;
        font-size: 25px;
        margin-right: 8%;
        font-family: monospace;
}
  
div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input label.Nom
{
            margin-right: 9%;
}

div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input label.password
{
            margin-right: 4%;
}
        
div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input label.title
{
            margin-right: 9.1%;
}
        
div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input label.prenom
{
            margin-right: 6%;
}
        
div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input input 
{
    width: 399px;
    height: 37px;
    outline: none;
    background-color: #f5f7be;
    padding: 10px;
    border: 2px solid #152927;
    font-size: 18px;
    color: #231d1d;
    margin-left: 0.4%;
}

        div.Login div.container div.content div.Formulaire div.content_formulaire div.div_input input[type='text']
        {
            margin-left: 3.9%;
        }
        
div.Login div.container div.content div.Formulaire div.content_formulaire  input[type='submit']
{
    text-align: center;
    margin: auto;
    width: 185px;
    border: 0;
    border-radius: 7px;
    color: black;
    margin-left: 34%;
    cursor: pointer;
    height: 40px;
    font-size: 23px;
    font-weight: bold;
    color: #000;
    text-transform: uppercase;
    margin-top: 5%;
    font-family: monospace;
    background: #ffffff;
    box-shadow: 1px 5px 1px rgb(0 0 0 / 50%);   
    transition: All 1s ease-in-out;
}
   
div.Login div.container div.content div.Formulaire div.content_formulaire  input[type='submit']:hover
{

    box-shadow: none;
    color: #FFF;
    background: #000;
}
    


    </style>
</head>
    <body>
    
    <!-- Formulaire -->
        
        <?php
        
        if(!isset($_SESSION['name']))
            
        {
        
        ?>
        
        <div class="Login">
            
        <div class="container">
            
            <div class="content">
                
            <div class="Login-title">
                
                <h2>Formulaire D'inscription</h2>
                
            </div> <!-- Fin div.container -->
            <div class="Formulaire">
                
                <div class="content_formulaire">
                    
                <form Method='POST' action="#">

                    <div class="div_input">
                        <label class="prenom">Login : </label> <input type="text" name='login' required />
                    </div>
                    
                    <div class="div_input">
                        <label class="password">Password : </label> <input type="password" name='mdp' required />
                    </div>
                    
                   <input type="submit" name='env' value='Login' required />
                    
                </form>   
                
                </div>
                
                
            </div>
                
            </div>
            
        </div> <!-- Fin div.container -->
            
        </div> <!-- Fin div.Login -->
        
        <?php
        }
        else
        {
           header('Location:Page_Homme.php');
            
        }
            
            
        ?>
        
    </body>
</html>
