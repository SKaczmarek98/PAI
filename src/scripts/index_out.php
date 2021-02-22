<?php 
         session_start(); 

    require_once 'connect.php';
  
            if($conn->connect_errno) 
            {
              echo 'error';
            }else
            {
                
                $_SESSION['kategoria']=$_POST['kategoria'];
      
                $sql=" SELECT ks.nazwa as k_nazwa, ks.opis, ks.zdjecie FROM `kuchnie_swiata` ks INNER JOIN kategorie k ON ks.id_kategoria=k.id_kategoria WHERE k.nazwa='" . $_SESSION['kategoria'] . "'";
                
                $_SESSION['recipe']= $conn->query($sql);
               header("Location: ../przepisy.php");
              
            }

?>