<?php
session_start();

if(!empty($_POST['email']) && !empty($_POST['pass']))
{
    require_once 'connect.php';
    if($conn->connect_errno !=0)
    {
        //błąd połączena z bazą
        $_SESSION['error']='Błędne połączenie z bazą danych!';
        //header('location: ../HTML/log/login.php');
        ?>
         <script>
            window.history.back();
         </script>
       <?php
       exit();
    }
    else
    {
        //połączono z bazą

        $email=htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
        $pass=htmlentities($_POST['pass'], ENT_QUOTES, "UTF-8");

        $sql=sprintf("SELECT * FROM users WHERE email='%s'"
        , mysqli_real_escape_string($conn, $email));
        
        if($result = $conn->query($sql))
        {
            $count=$result->num_rows;
            if($count ==1)
            {
                $user=$result->num_rows;
                if($conn==true)
                {
                    $user=$result->fetch_assoc();
                    $passdb=$user['pass'];

                    if(password_verify($pass, $passdb))
                    {
                        $_SESSION['error']='Zalogowano';
                        $_SESSION['logged']['name']=$user['name'];
                        $_SESSION['logged']['surname']=$user['surname'];
                        $_SESSION['logged']['email']=$user['email'];
                        $_SESSION['logged']['id']=$user['id_user'];
                        $conn->close();

                       
                        header("Location: ../index.php");
                      exit();
                    }
                    else
                    {
                        $_SESSION['error']='Błędne login lub hasło!';
                        ?>
                        <script>
                           window.history.back();
                        </script>
                      <?php
                      exit();
                    }
                }

            }
            else
            {
                $_SESSION['error']='Błędne login lub hasło!';
                ?>
                <script>
                   window.history.back();
                </script>
                <?php
                exit();
            }
          
        }
      
    }
}
else
{
    $_SESSION['error']='Wypełnij wszystkie dane!';
    
}
?>