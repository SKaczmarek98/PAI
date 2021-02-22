<?php
    session_start();
    if(isset($_SESSION['logged']['email']))
    {
        //unięcie zmiennej sesyjnej
        unset($_SESSION['logged']);
        ?>
        <script>
           window.history.back();
        </script>
      <?php
    }
    else{
        header('location:../html/index.php');
        echo 'error';
    }

?>