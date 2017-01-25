<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

      

    <div class="row">
        <div class="col-md-12">
            
            
            
            <?php
try
{

    
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host='.$host.';dbname='.$bddname.';charset=utf8', $username, $password);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM imgsnews');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<!-- Bootstrap
        
        <div class="card" style="width: 20em; display:inline-block;margin-left:3%;">
//  <img class="card-img-top" src="<?php echo $donnees['linkimgs'] ?>" alt="Card image cap">
  <div class="card-block">
 //   <h4 class="card-title"><?php echo $donnees['id'] ?> Card title</h4>
    <p class="card-text"><?php echo $donnees['textsimgbox'] ?></p>
 //   <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            
            
            
            
   -->         
            
            
            
            
            

                
  <div class="card">
    <img class="card-img-top img-fluid" src="<?php echo $donnees['linkimgs'] ?>" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">[<?php echo $donnees['id'] ?>] <?php echo $donnees['titleimgsbox'] ?></h4>
      <p class="card-text"><?php echo $donnees['textsimgbox'] ?></p>
    </div>
  </div>


            
            
            
            
            
            
            
            
            
            
            
            
            
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
            
            // se renseigner sur ! :
            // QUERY= préparer la requette
            // FETCH= Executer la requette
            // $reponse->closeCursor() = fermeture du get de notre mysql (Important) -->
            // SELECT, INSERT, DELETE, UPDATE
            
            // isset()
            // session_start();
            // $_SESSION["MonUsername"];
            // session_destroy();
            
            // strlen(), empty() ou null()
?>
            
            
            
        </div>    
    </div>    

      

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>