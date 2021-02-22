<?php
session_start();
if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['email'])&&!empty($_POST['haslo1'])&&!empty($_POST['haslo2']))
{
    $error=0;

    if ($_POST['haslo1'] != $_POST['haslo2']) 
    {
      $_SESSION['error'] = 'Hasła są różne!';
    
      ?>
        <script>
         window.history.back();
        </script>
     <?php
     exit();
    }
    

    require_once 'connect.php';

    if($conn->connect_errno) 
    {
      $_SESSION['error']='Błędne połączenie z bazą danych';
      ?>
        <script>
           window.history.back();
        </script>
      <?php
      exit();
    }else
    {
      //$_SESSION['error']='Prawidłowe połączenie z bazą danych';
      //prawidłowe połączenie i wypełnione pola w formularzu
      
      $name=$_POST['imie'];
      $surname=$_POST['nazwisko'];
      $email=$_POST['email'];
      $pass=$_POST['haslo1'];
      $pass=password_hash($pass, PASSWORD_ARGON2ID);



      $sql="INSERT INTO users ( `name`, `surname`, `email`, `pass`) VALUES (?, ?, ?, ?)";
    
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $name, $surname,$email,$pass);  

     
     if($stmt->execute()){
       header('location:../index.php');
       exit();
      }
      else
      {
        $_SESSION['error']='Taki adres email już istnieje!';
        echo 'error email';
        ?>
          <script>
            window.history.back();
          </script>
        <?php
      exit();
      }
    }
}else
{
    $_SESSION['error']='Wypełnij wszystkie pola!';
    ?>
    <script>
      window.history.back();
    </script>
  <?php
}
?>