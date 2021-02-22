
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
<link rel='stylesheet' id='ag-style-css' href='CSS/kontakt.css' type='text/css' media='all' />
  
</head>

<!-- BODY -->

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






<!-- Kontakt -->

<div class="ostatnio-na-blogu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <br><br>
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"><b>Kontakt</b></h2>
         
        </div>

<br><br>

<!-- ZAWARTOŚĆ (Kontakt) -->



      <div class="col-xs-12">

        <br>
        <div class="dane">
        <h2>Nasze dane kontaktowe: </h2><br>
        Numer telefonu: <a>+48 123 456 789</a><br>
        Adres e-mail: <a>email@projekt.pl</a>
        </div>
      </div>
    </div>
  </div>
  </div>

<!--PRZERWA-->


  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <br><br>
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"></h2>
         
        </div>
       </div>
    </div>
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
              <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="kontakt.php">Kontakt</a></li>
    </ul>
    <br>
          </div> 
        </div>        
      </div>
    </div>
  </div>


 

  
  <div class="site-overlay"></div>
  </body>
</html>

