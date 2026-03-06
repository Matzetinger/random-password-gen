<?php 

if($_POST){
  $chars = (int)$_POST["zeichenanzahl"];

  if($chars < 6 || $chars > 15){
    $error = "Zeichenlänge muss zwischen 6 und 30 Zeichen lang sein";
    $randompassword = "ERROR";


  }else{
  $error = NULL;
  $randomizer = new \Random\Randomizer();
  $sourcestring = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!";
  $randompassword = $randomizer->getBytesFromString($sourcestring, $chars);
  }

  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Passwort Generator</title>
</head>
<body>

<div class="generator-container">
  <div class="title-container">
    <h1>Passwort Generator</h1>
    <h3>Dein Passwort</h3>
  </div>


  <div class="password-container">
    <h5><?php echo htmlspecialchars ($randompassword ?? "Klick auf generieren") ?></h5>
    
  </div>

  <form action="#" method="POST">
    <p>Wie viele Zeichen ?</p>
    <div class="inputs-container">
      
        <label for="number"></label>
        <input
          class="number-input"
          type="number"
          name="zeichenanzahl"
          value="6"
          min="6"
          max="15"
          id="number"
          require
        >
        <input class="submit-input" type="submit" value="Generieren">
    </div>
    
  </form>
  
</div>
<button><a href="index.php">Zurücksetzen</a></button>
<small><?php  echo $error ?? ""; ?></small>
</body>
</html>