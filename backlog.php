<?php
  include 'conexion.php';
if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
            if(empty($email)){
            header("location:indexs.php?error=email ou password non entrer");
                exit();
                }
        else if(empty($password)){
            header("location:indexs.php?error=password ou email non netrer ");
               exit();
                 }
        else{
            $sql= "SELECT * FROM comptes WHERE email ='$email' and password='$password'";
            $data= $conn->query($sql);
               if(mysqli_num_rows($data) ==1)
                            {
                               $row=mysqli_fetch_assoc($data);
                                   if($row['email']==$email && $row['password']==$password)
                                                {
                                                    if(!empty($_POST['remember']))
                                                        {
                                                           setcookie('email',$email,time()+10);
                                                           setcookie('password',$password,time()+10);
                                                        }
                                                        session_start();
                                                        $_SESSION['id']=$row['id'];
                                                        $_SESSION['name']=$row['name'];
                                                        $_SESSION['email']=$row['email'];
                                                        $_SESSION['password']=$row['password'];
                                                        header("location:dashbords.php");
                                                        }
                                                    else{ header("location:indexs.php?error=password or email is not valid"); exit();}
                            }
                            else{ header("location:indexs.php?error=password or email is not valid"); exit();}    
        }
}
else{
    header("location:indexs.php");
}
?>
    
    