 <?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"  type="text/css" href="styles/styles.css">
</head>
<body>
    <header>

    <nav>
        <img src="./ITI_logo.png" alt="" width="150px" height="90px">
    <ul>
        <a href="./index.php"><li>Home</li></a>
        <a href="page.html"><li>Road Map</li></a>
        <a href="regForm.html"><li>Registration Form</li></a>
        <a href="https://www.iti.gov.eg/iti/home"><li>Contact</li></a>
        
    </ul>
    </nav>
    </header>
    <?php
      
      echo session_id().'<br>';
    if( isset($_COOKIE["name"]))
      echo "<h1>Welcome " . $_COOKIE["name"] . "</h1><br />";
   
     else{
      echo "Sorry... Not recognized" . "<br />";}
      
     
    ?>
    <a href="./page.html">
        <img src="./img1.jpg" alt="" width="100% " height="100%">
    </a>
    <button ><a href="login.php">log out</a>
        
    </button>
    <!-- <form action=" lougout.php" method="POST">
    <input type="hidden" name="flag" value ="1">
    <button type="submit" style="color:red;">log out</button> -->
    <!-- </form> -->
    <footer>
        <hr>
    <p >Copyright 2021 by 3Akram &copy;.All Rights Reserved</p>
    </footer>
</body>
</html>