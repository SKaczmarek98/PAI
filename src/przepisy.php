<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<!-- HEAD -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

	<title>PROJEKT</title>

	
<!-- CSS -->
<link rel='stylesheet' id='ag-style-css' href='CSS/style.css' type='text/css' media='all' />

 
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
                  <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="index.php ">Home</a></li>
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

<!-- PRZEPISY -->

<div class="front-categories-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          <h2 class="section-header section-header--one-line">
          <b><?php echo $_SESSION['kategoria'];?></b>
          </h2>
        </div>



<div class="ostatnio-na-blogu">
  <div class="container">
<form action="scripts/przepisy_out.php" method="post">
  <?php
          
          require_once 'scripts/connect.php';
          if( $_SESSION['kategoria']!="wszystkie")
          {
             $sql=" SELECT ks.nazwa as k_nazwa, ks.opis, ks.zdjecie, ks.id_kuchnie_swiata FROM `kuchnie_swiata` ks INNER JOIN kategorie k ON ks.id_kategoria=k.id_kategoria WHERE k.nazwa='" . $_SESSION['kategoria'] . "'"; 
          }
          else
          {
            $sql="SELECT ks.nazwa as k_nazwa, ks.opis, ks.zdjecie, ks.id_kuchnie_swiata FROM `kuchnie_swiata` ks INNER JOIN kategorie k ON ks.id_kategoria=k.id_kategoria";
          }
          $result= $conn->query($sql);
         while($przepis=$result->fetch_assoc())
         {
           echo <<<PRZEPIS
    <div class="col-md-6 col-sm-12 col-xs-12">   
      <div class="row">
        <div class="archive__post clearfix">
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="archive__post__img">
              <button  name='id_przepis'  value='$przepis[id_kuchnie_swiata]' style='background-color: white; border: 0px;'> 
                <img src="$przepis[zdjecie]" height="400"  width="266">
              </button>
            </div>
          </div>
          <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="archive__post__content">
              <button " name='id_przepis'  value='$przepis[id_kuchnie_swiata]' style='background-color: white; border: 0px'> 
                <a href="scripts/przepisy_out.php">
                  <h2 class="archive__post__title"> 
                    $przepis[k_nazwa]        
                  </h2>
                </a>
              </button>
              <div class="archive__post__excerpt">
                $przepis[opis]
              </div>
              <div class="archive__post__button" style="margin-top: 30%">  
              <button " name='id_przepis' value='$przepis[id_kuchnie_swiata]'  class="btn btn--green"> 
                  Czytaj więcej
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>            
PRZEPIS;
}

?> 
</form>
          </div>
              </div>
<br>
<!--PRZERWA-->

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
    <br>
          </div> 
        </div>        
      </div>
    </div>
  </div>
  </body>
</html>
