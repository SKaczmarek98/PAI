<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<!-- head -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

	<title>PROJEKT</title>


	
<!-- CSS -->

<link rel='stylesheet' id='ag-style-css' href='../CSS/style.css' type='text/css' media='all' />

<link rel='stylesheet' id='ag-style-css' href='../CSS/register.css' type='text/css' media='all' />

  
</head>

<!-- BODY -->
<br>
<br>
<body data-rsssl=1>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs">
<!-- HEADER LEWO -->

<div class="header__menu header__menu--left">
          <div class="menu-menu-glowne-lewo-container">
              <ul id="menu-menu-glowne-lewo" class="menu">
                  <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="../index.php">Home</a></li>
                  <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="../przepisy.php">Przepisy</a></li>
                  <li id="menu-item-12123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12123"><a href="../o_nas.php">O nas</a></li> 
              </ul>
            </div>
        </div>
       </div>

<!-- LOGO -->
<div class="col-md-2 col-sm-4 col-xs-6">
        <a href="index.php" class="header__logo"><div class="logo">
          <img src="../IMG/logo.jpg" width="150" height="150">       </a>
      </div>
</div>



<!-- HEADER PRAWO -->

<div class="header__menu header__menu--right">
          <div class="menu-menu-glowne-prawo-container">
              <ul id="menu-menu-glowne-prawo" class="menu">
              
                <?php
     
                  if(!isset($_SESSION['logged']['email']))
                  {
                    echo '<li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="login.php">Zaloguj</a></li>';
                  }
                  else 
                  {
               
                   echo '<li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="./add.php">Dodaj Przepis</a></li>          
                   <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="../scripts/logout.php">Wyloguj</a></li>
                    <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122">
                    ' .$_SESSION['logged']['name'].'
                    <i class=\'fas fa-user-circle\' style=\'font-size:32px;    color:black\'></i></li>';
                  }
   
                ?>
              </ul>
            </div>
        </div>
<!-- ZALOGUJ SIĘ -->

<div class="ostatnio-na-blogu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"><b>Zarejestruj się</b></h2>
         
        </div>

<br><br>

<!-- FORMULARZ -->
<div class="formularz">
 
<form action="../scripts/add_user.php" method="post">
      <fieldset>
        <legend>REJESTRACJA</legend>
        <b>
    <?php
     if(isset($_SESSION['error']))
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    ?>
                </b>
        <div class="textarea">
        <table>
        <tr>
          <div class="input">
            <td>
              <label for="imie">Imię:</label>
            </td>
            <td>
              <input type="text" name="imie" id="imie" />
            </td>
            </tr>
            <tr>
            <tr>
          <div class="input">
            <td>
              <label for="nazwisko">Nazwisko:</label>
            </td>
            <td>
              <input type="text" name="nazwisko" id="nazwisko" />
            </td>
            </tr>
            <tr>
            </div>
          <div class="input">
            <td>
              <label for="email">Email:</label>
            </td>
            <td>
              <input type="text" name="email" id="email" />
            </td>
            </div>

          </tr>
          <tr>
           <div class="input">
            <td>
              <label for="haslo">Hasło: </label>
            </td>
            <td>
              <input type="password" name="haslo1" id="haslo" />
            </td>
           </div>
          </tr>    
          <tr> 
            <td>
              <label for="haslo">Powtórz hasło: </label>
            </td>
            <td>
              <input type="password" name="haslo2" id="haslo" />
            </td>
          </tr>    
        </table>
      </fieldset>
</br>
    <div class="button">
            
              <input type="submit" value="Zarejestruj" />
            
            </div>
</form>
        <div class="log">
<h4>Masz konto?
<a href="login.php"><u>Zaloguj się</u></a></h4>
</div>
</div>
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
        
              <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="../index.php">Home</a></li>
              <li id="menu-item-12118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12118"><a href="../przepisy.php">Przepisy</a></li>
              <li id="menu-item-12123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12123"><a href="../o_nas.php">O nas</a></li> 
              <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="../kontakt.php>Kontakt</a></li>
    </ul>
    <br>
          </div> 
        </div>        
      </div>
    </div>
  </div>


  </body>
</html>
