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
                    echo '<li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="log/login.php">Zaloguj</a></li>';
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

<!-- KATEGORIE -->
<br>
<div class="front-categories-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          <h2 class="section-header section-header--one-line">
          <b>Kategorie</b>
          </h2>
        </div>
        <h3 class="section-subheader">
        Pyszne kategorie czekają na Ciebie. Znajdź ulubione przepisy.
        </h3>
      </div>

       <form action="scripts/index_out.php" method="post">

      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="row" >
          <div class="col-md-4 col-sm-6 col-xs-12">
            
          <button  name='kategoria'  value='desery' style='background: white; border: 0px'>       
                <img src="img/deser.jpg" class="fc__box " >
              </button>
            
              <div class="fc__box-bg" ></div>
              <div class="fc__box__info">
                <b>Desery</b>            
              </div>
            </a>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
           
          <button  name='kategoria'  value='obiady'style='background: white; border: 0px'>       
                <img src="img/obiad.jpg" class="fc__box " >
              </button>
            
           <div class="fc__box-bg" ></div>
              <div class="fc__box__info">
              <b>Obiady</b>             </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            
          <button  name='kategoria'  value='zupy'style='background: white; border: 0px'>       
                <img src="img/zupa.jpg" class="fc__box " >
              </button>
            
              <div class="fc__box-bg"></div>
              <div class="fc__box__info">
              <b>Zupy</b>             </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <!--\<a href="przepisy.php" class="fc__box fc__box--vege">-->
           
              <button  name='kategoria'  value='vege'style='background: white; border: 0px'>       
                <img src="img/vege.jpg" class="fc__box " >
              </button>
            
           <div class="fc__box-bg"></div>
              <div class="fc__box__info">
              <b>Vege</b>             </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <button  name='kategoria'  value='wszystkie'style='background: white; border: 0px'>       
                <img src="img/wszystko.jpg" class="fc__box fc__box--wszystkie" height="400">
              </button>
          
          <div class="fc__box-bg"></div>
          <div class="fc__box__info">
            <b>Wszystkie</b>          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</form>

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


  </body>
</html>
