
<?php

try 
{
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '58375837Zz', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (exception $e)
{
  die('erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO Chat(pseudo, answer, date_answer) VALUES(:pseudo, :answer, NOW())');

$req->execute(array(
  'pseudo' => $_POST['pseudo'],
  'answer' => $_POST['answer'],
  ));

$req->closeCursor();

header('Location: index.php');
?>  