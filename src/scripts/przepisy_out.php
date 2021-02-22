<?php 
    session_start(); 

    require_once 'connect.php';
  
    if($conn->connect_errno) 
    {
        echo 'error';
    }else
    {
                
        $_SESSION['id_przepis']=$_POST['id_przepis'];
  
        $sql=" SELECT ks.nazwa as k_nazwa, ks.opis, ks.zdjecie, ks.id_kuchnie_swiata, ks.skladniki, ks.przygotowanie 
        FROM `kuchnie_swiata` ks INNER JOIN kategorie k ON ks.id_kategoria=k.id_kategoria 
        WHERE ks.id_kuchnie_swiata ='" . $_SESSION['id_przepis'] . "'"; 

        $result= $conn->query($sql);
        $przepis=$result->fetch_assoc();

        $_SESSION['nazwa']=$przepis['k_nazwa']; 
        $_SESSION['skladniki']=explode(",", $przepis['skladniki']);
        $_SESSION['przygotowanie']=explode(".",$przepis['przygotowanie']);
        $_SESSION['zdjecie']=$przepis['zdjecie'];
        $_SESSION['id_kuchnie_swiata']=$przepis['id_kuchnie_swiata'];

        header("Location: ../przepis1.php");
    }

?>