
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
<link rel='stylesheet' id='ag-style-css' href='CSS/add.css' type='text/css' media='all' />


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
      </div>
</div>



<!-- HEADER PRAWO -->

        <div class="header__menu header__menu--right">
          <div class="menu-menu-glowne-prawo-container">
              <ul id="menu-menu-glowne-prawo" class="menu">
              
              <li id="menu-item-12122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12122"><a href="logogin.php">Zaloguj</a></li>

              </ul>
            </div>
        </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-header-container">
          
          <h2 class="section-header section-header--one-line"><b>DODAJ PRZEPIS</b></h2>
         
        </div>

<br><br>



<!-- FORMULARZ -->
<div class="formularz">
<form action="scripts/add_przepis.php" method="post">
      <fieldset>
        <legend>TWÓJ WŁASNY PRZEPIS</legend>

        <table>
        <tr>
            <td>
                <label for="category">Kategoria:</label>
            </td>
            <td>
                <select name="category">
                <option value="1">Desery</option>
                <option value="2">Obiady</option>
                <option value="4">Vege</option>
                <option value="3">Zupy</option>
                </select>
            </td>
        </tr>
          
        <tr>
            <td>
                <label for="name">Nazwa:</label>
            </td>
            <td>
                <input type="text" name="name" id="name" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ingredients">Składniki: </label>
            </td>
            <td>
                <textarea name="ingredients" style="resize:none;"></textarea>  
            </td>
        </tr>
        <tr>
            <td>
                <label for="preparation">Przygotowanie: </label>
            </td>
            <td>
                <textarea name="preparation" style="resize:none;"></textarea>  
            </td>
        </tr>
        <tr>
            <td>
                <label for="description">Krótki opis: </label>
            </td>
            <td>
                <textarea name="description" style="resize:none;"></textarea>  
            </td>
        </tr>
        <tr>
            <td>
              <label for="photo">Zdjęcie: </label>
            </td>
            <td>
            <input type="file" name="photo">
            </td>
        </tr>
        </table>
        <div class="button">
              <input type="submit"  value="Dodaj" />
    </div>
      </fieldset>
    </form> 
    
</div>
<br><br>
  <br>
 

<!-- PRZERWA -->
  <div class="col-xs-12">
<div class="container">
        <div class="section-header">
 
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
