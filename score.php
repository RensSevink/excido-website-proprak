<!DOCTYPE html>
<html lang="en">

<head>
  <title>Score Formulier</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="logo">
        <img src="img/logo.png" id="logo" alt=""/>
        </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a href="./home.html" class="active">Home</a>
      <a href="./activiteiten.html">Activiteiten</a>
      <a href="./contact.html">Contact</a>
      <a href="#">Score</a>
      <a href="#">Over Ons</a>
    </div>
  </div>

  <div class="container-fluid">
        <div class="row">
            <div id="helft">
                <div id="banner">
                    <h1>Score formulier</h1>
                    <hr>
                    <h5>Hier kan je invullen wat voor tijd je hebt gehaald in 1 van onze escape rooms!</h5>
                </div>
            </div>
        </div>
    </div>

    
              <!-- Hieronder staat HTML5 formulier -->

<div id="formulier">
  <form action="./create.php" method="post">
                  
  <label class="form-label" for="inputTeamnaam">Team naam: </label>
  <input type="text" name="teamnaam" id="inputTeamnaam" required>

  <label class="form-label" for="inputDatum">Datum van escape room: </label>
  <input type="text" name="datum" id="inputDatum">

  <label for="room">Escape room:</label>
  <select name="escaperoom" id="inputEscaperoom" required>
  <option value="man">Man</option>
  <option value="vrouw">Vrouw</option>
  <option value="other">Other</option>
  </select>

  <label class="form-label" for="inputTijd">Tijd: </label>
  <input type="text" name="tijd" id="inputTijd" required>

  <label class="form-label" for="inputBestelnummer">Bestelnummer: </label>
  <input type="text" name="bestelnummer" id="inputBestelnummer" required>

                 
  <input type="submit" value="Verzenden">
                  
  </form>
  <button id="scoreboord"><a href="./read.php">Leaderboard</a></button>
</div>
          



</body>

</html>