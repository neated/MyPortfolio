<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

      
<div class="container">
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
$reponse = $bdd->query('SELECT * FROM news');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

        
        <div id="accordion<?php echo $donnees['id'] ?>" role="tablist" aria-multiselectable="true">
        
      <div class="card">
    <div class="card-header" role="tab" id="headingThree" style="height:60px;">
      <h5 class="mb-0">
        <a class="collapsed" style="color:#b1b1b1;" data-toggle="collapse" data-parent="#accordion<?php echo $donnees['id'] ?>" href="#collapseThree<?php echo $donnees['id'] ?>" aria-expanded="false" aria-controls="collapseThree<?php echo $donnees['id'] ?>">
        <i class="fa fa-newspaper-o" aria-hidden="true"></i>  News : <?php echo $donnees['TitleNewz']; ?> <div id="idnews">id <?php echo $donnees['id'] ?></div>
            
            
        <div id="posteddate"> 
               <p style="color:#a6a6a6;"><i class="fa fa-calendar" aria-hidden="true"></i> Poster le <?php echo $donnees['NewsDate']; ?></p>
            </div> 
            
            
        </a>
      </h5>
    </div>
    <div id="collapseThree<?php echo $donnees['id'] ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
        <?php echo $donnees['NewsText']; ?>     
              
      </div>
    </div>
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
</div>
      

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>