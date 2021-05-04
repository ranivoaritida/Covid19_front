<!DOCTYPE html>
<html lang="en">
<title>Covid-19 : Situation a Madagascar</title>
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
    <h4> <a href="<?php echo site_url('Accueil.html'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Accueil</a></h4>
    <h4> <a href="<?php echo site_url('covid-19/madagascar-'.$contenue['idSubject']).'.html';?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Madagascar</a></h4>
    <h4> <a href="<?php echo site_url('covid-19/monde-1.html');?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Monde</a></h4>
  </div>
</div>



<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

	  
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
	  <h1 class="w3-hover-teal">Covid-19 : Situation a Madagascar</h1></br>
      <h2 class="w3-text-teal"><?php echo $contenue['titre'] ?></h2>
      <p><strong><?php echo $contenue['intro'] ?></strong><?php echo $contenue['content'] ?></p></div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
  </div>
</div>
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
