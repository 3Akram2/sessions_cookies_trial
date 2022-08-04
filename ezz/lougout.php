<?php 

$f=$_POST['flag'];
     if($f==="1"){
        session_destroy();
        setcookie("name", $v1, time()-60);
        header("location: http://localhost/ezz/login.php");
        
        
        
     }
      



?>