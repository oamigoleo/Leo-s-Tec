<?php session_start() ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
    </head>
   <body>
       
   <?php

       if(!isset($_SESSION['usuario'])){
           

           if(isset($_POST['acao'])){
               $login = oamigoleo;
               $senha = 1234;

               $loginForm = $_POST['usuario'];
               $senhaForm = $_POST['password'];
            
            }

            include('login.html');
       }else{
           include('index.html');
       }

       ?>
    </body>
    </html>
    
    
