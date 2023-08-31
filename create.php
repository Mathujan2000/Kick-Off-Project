<?php
include_once "./dbHandler.php";
$dbHandler = new dbHandler();

if(isset($_POST["create"])){
    $dbHandler->MaakVraag($_POST["question_text"], $_POST["correct_answer"]); 
    }
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create</title>
</head>
      <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="quiz.php">Onze vragen</a></li>
      <li><a href="create.php">Create</a></li>
      </ul>
      
<body>
      <div class="main">
      <h1 id="create-title">Maak je eigen quizvraag!</h1>
            <div class="createform">
                  <form method="POST" action="quiz.php">
                  <input name="question_text" placeholder="Type hier je vraag" type="text" required/>
                  <input name="correct_answer" placeholder="Waar/Niet waar" type="text" required />
                  <!-- de name/value van create geven we mee zodat we kunnen controleren of de formdata afkomstig is van deze pagina -->
                  <button type="submit" name="create" value="create">Create</button>
                  </form>
            </div>
      </div>
      <footer>
        <p class="copyright">Copyright Contact — Press Room — Privacy Policy — Resources — Terms and Conditions</p>
    </footer>     
</body>
</html>