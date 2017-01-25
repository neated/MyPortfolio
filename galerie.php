<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $TitleSite; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Neated Module css -->  
    <link href="css/ntd.css" rel="stylesheet">
      
    <link rel="stylesheet" href="css/font-awesome.min.css">
  </head>
<body>

<div id="ntdheader">
      
</div>      

<div class="jumbotron jumbotron-fluid" style="padding:1px;box-shadow: 0px 5px 0px #5cb85c;">
  <div class="container">
    <h2 class="display-4"><i class="fa fa-bolt" aria-hidden="true"></i><?php echo $TitleSite; ?></h2>
    <p class="lead"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $PhraseTitleSite; ?></p>
  </div>
</div>    
    
<div class="container">
    
    
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo $Strongalert; ?></strong> <?php echo $Alertext; ?>
</div>
    
    
    </br>
    
    <?php include("menu.php"); ?>
    
    <div id="containbgcolor">
        


        <div id="cardcadre">
        

            
            
            
            <div class="card-columns">
            <?php include("moduleloadimgsgalerie.php"); ?>
            </div>
            
            
            
            
        
    </div>
        
        

        

    </div>
    
    
    
<br>
        <div id="socialbutton">
    <button type="button" class="fa fa-facebook-square" style="color:#3b5998;"></button>
    <button type="button" class="fa fa-twitter-square" style="color:#1da1f2;"></button>
    <button type="button" class="fa fa-youtube-square" style="color:#e62117;"></button>
    <button type="button" class="fa fa-twitch" style="color:#6441a4;"></button>
    </div>




      
<div id="ntdfooter">
    <center><p style="color:#c9c9c9;"><?php echo $TitleSite; ?> © Tout droit réservé</p></center>
</div>

    </div>  <!-- container end -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>