<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=poo', 'root');

$sql = 'SELECT * FROM utilisateur';
$req = $pdo->query($sql);
$res = $req->fetchAll(PDO::FETCH_ASSOC);
require 'class/Utilisateur.class.php';

$users = [];
//$csv = file('users.csv');
foreach ( $res as $data ) {
    $user = new Utilisateur($data['id'], $data['prenom'], $data['nom'], $data['mail']);
    $users[] = $user;
}
?>
<html>
<head>
    <title>Liste</title>
</head>
<body>

<ul>
    <?php
    foreach ( $users as $user ) {
        ?>
        <li>
            <a href="profil.php?id=<?php echo $user->getId(); ?>">Profil</a>
            |
            <?php echo $user->getName(); ?> - <?php echo $user->getMail(); ?>
        </li>
        <?php
    }
    ?>
</ul>

</body>
</html>