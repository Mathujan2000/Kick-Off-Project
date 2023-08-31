<?php
include_once "./dbHandler.php";
$dbHandler = new dbHandler();

// Handle question creation
if (isset($_POST["create"])) {
    $dbHandler->MaakVraag($_POST["question_text"], $_POST["correct_answer"]); 
}

// Handle question deletion
if (isset($_POST["delete"])) {
    if (isset($_POST["question_id"])) {
        $question_id = (int)$_POST["question_id"];
        $dbHandler->VerwijderVraag($question_id);
    }
}

// Fetch questions from the database
$questions = $dbHandler->selectvraag();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Include your stylesheet -->
    <title>Quiz</title>
</head>
<body>
    <div class="main">
        <div class="header">
            Welcome to Our Quiz
        </div>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="quiz.php">Our Questions</a></li>
            <li><a href="create.php">Create</a></li>
        </ul>
        <div class="vraag">
        <?php
            if (!empty($questions)) {
                foreach ($questions as $question) {
                    ?>
                    <div class="question">
                        <h2><?= $question['question_text'] ?></h2>
                        <!-- Add answer options and form for deletion -->
                        <form method='POST' action='quiz.php'>
                            <input type='hidden' name='question_id' value='<?= $question['question_id'] ?>'>
                            <button type='submit' name='delete'>Delete</button>
                            <input type="radio" name="true" value="true"><label for="true">True</label>
                            <input type="radio" name="false" value="false"><label for="false">False</label>
                        </form>
                    </div>
                    <?php
                }
            } else {
                echo "No questions available.";
            }
            ?>
        </div>
    </div>
    <footer>
        <p class="copyright">Copyright Contact — Press Room — Privacy Policy — Resources — Terms and Conditions</p>
    </footer>
</body>
</html>
