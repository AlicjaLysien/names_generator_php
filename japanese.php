<head>
   <meta charset="utf-8">
   <title>Names generator</title>
   <link rel="stylesheet" href="style.css" type="text/css" />
   
   <style>
   body {background-color: grey;}
   </style>
   
</head>

<body>
  <a href="index.php"><button>BACK</button></a>
  <h1>Fantasy Names Generator</h1>
  
  <form>
<button class="mainbotton" type="submit">Generate</button>

<output value="
<?php
$_SESSION['fname1']
">
</output>
<output value="
<?php
$_SESSION['fname2']
">
</output>
<output value="
<?php
$_SESSION['fname3']
">
</output>

</form>
  
</body>

</html>