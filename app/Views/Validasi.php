<?php 
     function validasiLogin($email, $password){
         $users = [
             'c14444444@john.petra.ac.id' => 'paswordrill',
             'c14220016@john.petra.ac.id' => 'passwordgeming'
         ];

        
         if($password !== $users [$email]){
             return false;
         }
         return true;
     }
     
     $hasilValidasi = validasiLogin($_POST['email'], $_POST['password']);
     
     if (!$hasilValidasi){
         return view('/loginPage');
         die;
     } else {
         return view('/homePage');
     }
?>