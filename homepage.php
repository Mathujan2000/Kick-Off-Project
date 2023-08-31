<?php
include_once "./dbHandler.php";
$dbHandler = new dbHandler();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welkom bij onze quiz</title>
        <link rel="stylesheet" href="homepagestyle.css">
    </head>
    <body class="homebody">
        <header>
            <h1>Welkom bij onze quiz</h1>
        </header> 

            <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="quiz.php">Onze vragen</a></li>
            <li><a href="create.php">Create</a></li>
            </ul>

    <article>
        <p>
            Welkom bij onze boeiende quiz! Deze quiz is ontworpen om je kennis te testen en je te vermaken. <br>
             Of je nu een expert bent op het onderwerp of gewoon wilt zien hoeveel je weet, <br>
              we hopen dat je een leuke en leerzame ervaring zult hebben.</p><br>
             <h1>Ons Doel</h1><br> 
            <p>Ons doel is om een uitdagende en plezierige quizervaring te bieden. We geloven in het delen van kennis <br>
                 het aanmoedigen van leren op een interactieve en boeiende manier. <br>
                Of je nu speelt om je kennis te testen, te leren of gewoon plezier te hebben,<br>
                 we hopen dat je geniet van elke vraag die we hebben voorbereid.</p><br>
             <h1>Ons Team </h1><br>
             <p>Ons team van quizmakers is gepassioneerd over educatie en entertainment. <br>
                 We streven ernaar om vragen te maken die zowel informatief als leuk zijn, <br>
                  zodat je een geweldige tijd hebt terwijl je je hersenen laat kraken.</p>
    </article>
    <footer>
        <p class="copyright">Copyright Contact — Press Room — Privacy Policy — Resources — Terms and Conditions</p>
    </footer>   
</body>
</html>