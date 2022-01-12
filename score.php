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
  <div class="container" id="formuliercontainer">
  <form action="/create.php">
    <div class="row">
      <div class="col-25">
        <label for="inputTeamnaam">Team Naam</label>
      </div>
      <div class="col-75">
        <input type="text" name="teamnaam" id="inputTeamnaam" placeholder="Jouw teamnaam.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="inputDatum">Datum</label>
      </div>
      <div class="col-75">
        <input type="text" id="inputDatum" name="datum" placeholder="Datum van de escape room.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="inputEscaperoom">Escape room</label>
      </div>
      <div class="col-75">
        <select id="inputEscaperoom" name="escaperoom">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="inputTijd">Tijd</label>
      </div>
      <div class="col-75">
        <input type="text" id="inputTijd" name="tijd" placeholder="Tijd van de escape room.." required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    <a class="button" id="leaderboard" href="./read.php">Leaderboard</a>
  </form>
</div>




</body>
</html>