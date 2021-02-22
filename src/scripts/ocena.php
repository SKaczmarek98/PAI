<?php
session_start();

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
    $stars=$_POST['star'];
    $_SESSION['logged']['id'];
    $_SESSION['id_kuchnie_swiata'];

    $sql="SELECT * FROM oceny WHERE id_kuchnie_swiata='" . $_SESSION['id_kuchnie_swiata'] . "' AND id_user='" . $_SESSION['logged']['id']."'";
    
    if($result = $conn->query($sql))
    {
        $count=$result->num_rows;
        if($count==1)
        {
            $star=$result->fetch_assoc();

            $sql_update="UPDATE oceny SET ocena = '".$stars."' WHERE id_kuchnie_swiata='" . $_SESSION['id_kuchnie_swiata'] . "' AND id_user='" . $_SESSION['logged']['id']."'";

            mysqli_query($conn, $sql_update); 
            ?>
            <script>
              window.history.back();
            </script>
            <?php
        }else
        {
            $sql_new="INSERT INTO oceny ( `id_kuchnie_swiata`, `id_user`, `ocena`) VALUES (?, ?, ?)";
            
            $stmt = $conn->prepare($sql_new);
            $stmt->bind_param("iii", $_SESSION['id_kuchnie_swiata'], $_SESSION['logged']['id'],$stars);  
            $stmt->execute();
            
            ?>
            <script>
              window.history.back();
            </script>
          <?php
          exit();
        }
    } 
}
?>