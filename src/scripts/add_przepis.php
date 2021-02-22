<?php
session_start();

if(!empty($_POST['category']) &&!empty($_POST['name']) && !empty($_POST['ingredients']) && !empty($_POST['preparation'])&&!empty($_POST['description']))
{
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
        $category=$_POST['category'];
        $name=$_POST['name'];
        $ingredients=$_POST['ingredients'];
        $preparation=$_POST['preparation'];
        $description=$_POST['description'];

        if(!empty($_POST['photo']))
        {
            $photo='../img/'.$_POST['photo'];
        }
        else
        {
            $photo='../img/default.jpg';    
        }

        $sql="INSERT INTO kuchnie_swiata( `nazwa`, `opis`, `zdjecie`, `id_kategoria`, `skladniki`, `przygotowanie`) VALUES (?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssiss", $name,  $description, $photo, $category, $ingredients, $preparation );  

     
        if($stmt->execute())
        {
            ?>
            <script>
               window.history.back();
            </script>
            <?php
            exit();
        }
        else
        {
           
            echo 'error';
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
    echo ' wszystkie pola';
    ?>
        <script>
             //window.history.back();
        </script>
     <?php   
}
?>