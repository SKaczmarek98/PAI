
<!DOCTYPE html>
<html lang="pl">

<!-- head -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

	<title>PROJEKT</title>
	
<!-- CSS -->

<link rel='stylesheet' id='ag-style-css' href='CSS/style.css' type='text/css' media='all' />
</head>

<!-- BODY -->

   <!-- HEADER -->

<body data-rsssl=1>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs">
      <!-- HEADER LEWO -->
<div class="header__menu header__menu--left">
          <div class="menu-menu-glowne-lewo-container">
              <ul id="menu-menu-glowne-lewo" class="menu">
                  <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="index.php">Home</a></li>
                  <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="przepisy.php">Przepisy</a></li>
                  <li id="menu-item-12123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12123"><a href="o_nas.php">O nas</a></li> 
              </ul>
            </div>
        </div>
       </div>

<!-- LOGO -->
<div class="col-md-2 col-sm-4 col-xs-6">
        <a href="index.php" class="header__logo"><div class="logo">
          <img src="IMG/logo.jpg" width="150" height="150">       </a>
      </div></div>
      
<!-- HEADER PRAWO -->

<div class="header__menu header__menu--right">
          <div class="menu-menu-glowne-prawo-container">
              <ul id="menu-menu-glowne-prawo" class="menu">
              
                <?php
     
                  if(!isset($_SESSION['logged']['email']))
                  {
                    echo '<li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="logogin.php">Zaloguj</a></li>';
                  }
                  else 
                  {
               
                   echo '<li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="add.php">Dodaj Przepis</a></li>          
                   <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="scripts/logout.php">Wyloguj</a></li>
                    <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122">
                    ' .$_SESSION['logged']['name'].'
                    <i class=\'fas fa-user-circle\' style=\'font-size:32px;    color:black\'></i></li>';
                  }
   
                ?>
              </ul>
            </div>
        </div>





<!-- O NAS -->

<div class="ostatnio-na-blogu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"><b>O nas</b></h2>
         
        </div>

<br><br>

<!-- ZAWARTOŚĆ (O NAS) -->

<!-- osoba1 -->
<div class="ostatnio-na-blogu">
<div class="container">
    <div class="row">
      <div class="o-mnie__thumbnail col-md-5 col-sm-12 col-xs-12">
        <img src="IMG/pan1.jpg" width="300" height="300" class="attachment-full size-full wp-post-image"  >    </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <h3>RANDOM PERSON ONE</h3>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

      </div>
    </div>
  </div>

<br>
<!-- osoba2 -->
<div class="ostatnio-na-blogu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"></h2>
         
        </div>
<br>

<div class="container">
    <div class="row">
      <div class="o-mnie__thumbnail col-md-5 col-sm-12 col-xs-12">
        <img src="IMG/pan2.jpg" width="300" height="300">   </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <h3>RANDOM PERSON TWO</h3>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

      </div>
    </div>
  </div>

  <br>

<!-- PRZERWA -->
  <div class="col-xs-12">
<div class="container">
        <div class="section-header-container">
          <h2 class="section-header">

          </h2>
        </div>
            </div>
<br><br>
</div>

<!-- STOPKA -->

<div class="container">
    <div class="row">
        <div class="footer__menu">
        
<div class="menu-menu-stopka-container">
    <ul id="menu-menu-stopka" class="menu">
        
              <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="index.php">Home</a></li>
              <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="przepisy.php">Przepisy</a></li>
              <li id="menu-item-12123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12123"><a href="o_nas.php">O nas</a></li> 
              <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="kontakt.php>Kontakt</a></li>
    </ul>
    
          </div> 
        </div>        
      </div>
    </div>
  </div>

 


  </body>
</html>
