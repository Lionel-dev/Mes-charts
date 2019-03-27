<?php
    

    if(!empty($_POST)) { // S'il a cliquer sur le bouton
       
        
        $servername = "bd-svc";
        $username = "root";
        $password = "Tigrou007";

        $pdo = new PDO("mysql:host=$servername;dbname=dblaboweb", $username, $password);
   
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
        

        
           $req = $pdo->prepare("INSERT INTO utilisateurs SET prenom= ?, nom= ?, mail= ?, mdp = ?");  // Ajoute une ligne dans la database avec les parametre indiqué
           $req->execute([$_POST['prenom'], $_POST['nom'], $_POST['mail'],$_POST['mdp']]); 
           $user_id = $pdo->lastInsertId(); // met le dernier id dans $user_id
    
           echo "vous etes connecté";

        
    }
?>

        <h1>S'inscrire</h1> 
  

    
       <form method="post" action="">

                    <label> Prénom </label>
                    <input type="text" name="prenom">
              
                    <label> Nom </label>
                    <input type="text" name="nom">
            
           
                    <label> mail </label>
                    <input type="text" name="mail" >
             
                    <label> Mot de passe</label>
                    <input type="password" name="mdp" >
                
                    <button>S'inscrire</button>
                
        </form> 
    
 