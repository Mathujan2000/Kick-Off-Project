<?php
final class dbHandler
{
    private $dataSource = "mysql:dbname=quiz;host=localhost;";
    private $username = "root";
    private $password = "";

    public function selectvraag()
    {
        try {
            $pdo = new PDO($this->dataSource, $this->username, $this->password);
            $statement = $pdo->prepare("SELECT question_id, question_text FROM quizdb;");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            // Handle the exception if needed
            return false;
        }
    }

    public function MaakVraag(string $question_text, string $correct_answer)
    {
        try {
            $pdo = new PDO($this->dataSource, $this->username, $this->password);

            $statement = $pdo->prepare("INSERT INTO quizdb (question_text, correct_answer) VALUES (:question_text, :correct_answer)");
            $statement->bindParam(":question_text", $question_text, PDO::PARAM_STR);
            $statement->bindParam(":correct_answer", $correct_answer, PDO::PARAM_STR);
            $statement->execute();
        } catch (PDOException $exception) {
            // Handle the exception if needed
            echo "Error: " . $exception->getMessage();
        }
    }

    public function VerwijderVraag(int $question_id)
    {
        try {
            $pdo = new PDO($this->dataSource, $this->username, $this->password);

            $statement = $pdo->prepare("DELETE FROM quizdb WHERE question_id = :question_id");
            $statement->bindParam(":question_id", $question_id, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $exception) {
            // Handle the exception if needed
            echo "Error: " . $exception->getMessage();
        }
    }
}
