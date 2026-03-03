<?php 

if($_POST){
  $chars = (int)$_POST["zeichenanzahl"];
  $randomizer = new \Random\Randomizer();
  $sourcestring = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  $randompassword = $randomizer->getBytesFromString($sourcestring, $chars);
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

<div class="title-container">
  <h1>Passwort Generator</h1>
  <h3>Dein Passwort</h3>
</div>


<div class="password-container">
  
  <h5><?php echo $randompassword ?? "Klick auf generieren"; ?></h5>
</div>

<form action="#" method="POST">
  <div class="inputs-container">
    <div class="input-container">
      <label for="number">Wie viele Zeichen ?</label>
      <input
        class="number-input"
        type="number"
        name="zeichenanzahl"
        value="8"
        min="6"
        max="15"
        id="number"
        require
      >
    </div>

      <input class="submit-input" type="submit" value="Generieren">
  </div>
<a href="index.php">Zurücksetzen</a>
</form>
  
</body>
</html>