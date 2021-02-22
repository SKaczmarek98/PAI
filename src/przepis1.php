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
<link rel='stylesheet' id='ag-style-css' href='CSS/przepis12.css' type='text/css' media='all' />
<link rel='stylesheet' id='ag-style-css' href='CSS/stars.css' type='text/css' media='all' />


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
      </div>
      </div>




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

<!-- PRZERWA -->    
<div class="front-categories-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          <h2 class="section-header section-header--one-line">
          <b>Przepis</b>
          </h2>
        </div>

<!-- PRZEPIS -->

<div class="single-post__title">
<?php echo $_SESSION['nazwa'];
?>          
</div>

<div class="container">
  <div class="row">
    <div class="o-mnie__thumbnail col-md-5 col-sm-12 col-xs-12">
      <img src="<?php echo $_SESSION['zdjecie'];?>" width="433" height="677" class="attachment-full size-full wp-post-image"  sizes="(max-width: 433px) 100vw, 433px">    
    </div> 
  <div class="column">         
    <div class="przepis-header">Składniki:</div>
     <ul class="przepis-list">
        <?php
          for ($i=0; $i <count($_SESSION['skladniki']) ; $i++) 
          {           
            echo '<li>'.$_SESSION['skladniki'][$i].'</li>';
          }
        ?>                             
      </ul>
    <div class="przepis-header">Przygotowanie:</div>
      <div class="przygotowanie-content">
        <?php
          for ($i=0; $i <count($_SESSION['przygotowanie'])-1 ; $i++) 
          { 
            echo '<p>'.$_SESSION['przygotowanie'][$i].'.</p>';
          }
        ?>

     <div class='code-block code-block-2' style='margin: 8px 0; clear: both;'>
        <form action="scripts/ocena.php" method="post">
        <div>
        <?php
            if(isset($_SESSION['logged']['email']))
            {
              echo'
          <div class="stars">
            <input type="radio" id="star5" name="star" value="5">
              <label for="star5">  </label>
                <input type="radio" id="star4" name="star" value="4">
                <label for="star4">  </label>
                <input type="radio" id="star3" name="star" value="3">
                <label for="star3">  </label>
                <input type="radio" id="star2" name="star" value="2">
                <label for="star2">  </label>
                <input type="radio" id="star1" name="star" value="1">
                <label for="star1">  </label>
           </div>
           <div class="button">
                    <input type="submit" value="Ocen" />
                  </div>';
            }
           ?>
           </div>
        </form>
      </div>

      <?php
           require_once 'scripts/connect.php';
         $conn->connect_errno;
         $sql="SELECT * FROM oceny WHERE id_kuchnie_swiata='" . $_SESSION['id_kuchnie_swiata'] . "'";
        
         $result= $conn->query($sql);
         
         $i=0;
         $average=0;
        
         while($stars=$result->fetch_assoc())
         {
            $average+=$stars['ocena'];
            $i++;
         } 
         if($average>0) 
         {
          $average=$average/($i);
          echo '<h2>Ocena: ';
          echo $average.'</h2>';
         }     
         else
         {
          echo '<h2>Ocena: Brak</h2>';
         }
        
     ?>
     </div>
  </div>
  </div>
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
