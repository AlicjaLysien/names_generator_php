<?php
session_start();
$_SESSION['fname1'] = "";
$_SESSION['fname2'] = "";
$_SESSION['fname3'] = "";
$_SESSION['jname1'] = "";
$_SESSION['jname2'] = "";
$_SESSION['jname3'] = "";

?>

<!DOCTYPE html>

<head>
   <meta charset="utf-8">
   <title>Names generator</title>
   <link rel="stylesheet" href="style.css" type="text/css" />
   
   <style>
   body {background-color: grey;}
   </style>
   
</head>

<body>
  
  <h1>Names Generator</h1>
  
  
  <div class="divbutton"><a href="fantasy.php"><button class="mainbotton">Fantasy names generator</button></a></div>
 <br><br>

  <div class="divbutton"><a href="japan.php"><button class="mainbotton">Japanese names generator</button></a></div>

  
  
</body>

</html>