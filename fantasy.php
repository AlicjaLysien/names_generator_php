<?php
session_start();

require_once('FGenerate.php');

?>

<head>
   <meta charset="utf-8">
   <title>Names generator</title>
   <link rel="stylesheet" href="style.css" type="text/css" />
   
   <style>
   body {background-image: url(img/fantasy.jpg);}
   </style>
   
</head>

<body>
  <a href="index.php"><button id = "back">BACK</button></a>
  <h1 style="color: white;">Fantasy Names Generator</h1>
  
  <form method="post">
<button class="mainbotton" type="submit">Generate</button></br>

      <div class="generate"><?php echo $_SESSION["fname1"] ?></div></br>

      <div class="generate"><?php echo $_SESSION["fname2"] ?></div></br>

      <div class="generate"><?php echo $_SESSION["fname3"] ?></div>


</form>
  
</body>

</html>

<!-- background: https://wallpaperset.com/illidan-wallpaper  -->