<?php include "config.php"; ?>
<nav class="navbar navbar-toggleable-md navbar navbar-light" style="background-color: #E5E5E5; border-radius: 5px 5px 0px 0px; height:50px;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><i class="fa fa-bolt" aria-hidden="true"></i> <?php echo $TitleSite; ?></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galerie.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Galerie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="infos.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Informations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-book" aria-hidden="true"></i> C.V</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Boutique</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>