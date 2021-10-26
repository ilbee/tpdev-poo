<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=poo', 'root');

$sql = 'SELECT * FROM utilisateur where id = :monParamQuiVientDeGET';
$req = $pdo->prepare($sql);
$req->bindParam('monParamQuiVientDeGET', $_GET['id'], PDO::PARAM_INT);
$req->execute();
$res = $req->fetch(PDO::FETCH_ASSOC);

require_once  'class/Utilisateur.class.php';

$user = new Utilisateur($res['id'], $res['prenom'], $res['nom'], $res['mail']);
?>
<html>
<head>
    <title>Profil</title>
</head>
<body>
Nom : <?php echo $user->getLastName(); ?>
<br/>
Prénom : <?php echo $user->getFirstName(); ?>
</body>
</html>
