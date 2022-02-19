<?php
        include 'conexion.php';
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confpassword=$_POST['confpassword'];
            
                
            if(empty($name)){
                header('location:sign_up.php?error=entrer votre email');
                exit();
            }
            else if(empty($email)){
                header('location:sign_up.php?error=entrer votre email');
                exit();

            }
            else if(empty($password)){
                header('location:sign_up.php?error=entrer votre password');
                exit();
            }else{
                                if($password==$confpassword){

                                
            
                $insert="INSERT INTO comptes (name ,email,password) VALUE ('$name','$email','$password')";
                $result=$conn->query($insert);
                header('location:indexs.php');    
                                                           }
                                                           else{
                                                               header('location:sign_up.php?error=password non identique');
                                                           }
        }
    }
        else{
            header('location:sign_up.php');
        }


?>