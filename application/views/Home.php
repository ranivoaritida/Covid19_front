<!DOCTYPE html>
<html lang="en">
<title><?php echo $titre[0]['nom'] ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo site_url("assets/css/style.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/style1.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/black-theme.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/family.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/eo.css"); ?>" rel="stylesheet">

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <h4> <a href="<?php echo site_url('Accueil.html'); ?>" class="w3-bar-item w3-button w3-theme-l1">Accueil</a></h4>
    <h4> <a href="<?php echo site_url('covid-19/madagascar-'.$contenue[0]['idSubject']).'.html';?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Madagascar</a></h4>
    <h4> <a href="<?php echo site_url('covid-19/monde-'.$contenue[1]['idSubject']).'.html';?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Monde</a></h4>
  </div>
</div>



<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

	  
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
	  <h1 class="w3-hover-teal"><?php echo $titre[0]['nom'] ?></h1></br>
      <h2 class="w3-text-teal"> <a href="<?php echo site_url('monde/index/'.$contenue[0]['idSubject']);?>"><?php echo $contenue[0]['titre'] ?></a></h2>
	  <h3 class="w3-text-grey"><strong><?php echo $contenue[0]['sousTitre'] ?></strong></h3>
      <p><?php echo $contenue[0]['content'] ?></p></div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"> <a href="<?php echo site_url('monde/index/'.$contenue[1]['idSubject']);?>"><?php echo $contenue[1]['titre'] ?></a></h2>
	  <h3 class="w3-text-grey"><strong><?php echo $contenue[1]['sousTitre'] ?></strong></h3>
      <p><?php echo $contenue[1]['content'] ?></p></div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
  </div></br></div></br>


  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Le Journal des MDG© Copyright 2021, Mada media All Rights Reserved</a></p>
    </div>
  </footer>

<!-- END MAIN -->



</body>
</html>
