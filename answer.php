
<?php

try 
{
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '58375837Zz', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (exception $e)
{
  die('erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO Chat(PSEUDO, ANSWER) VALUES(:PSEUDO, :ANSWER)');

$req->execute(array(
  'PSEUDO' => $_POST['pseudo'],
  'ANSWER' => $_POST['answer']
  ));

$req->closeCursor();

header('Location: index.php');
?>  