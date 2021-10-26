<?php
require 'class/Utilisateur.class.php';

$users = [];
$user1 = new Utilisateur('Jean', 'DUPONT');
$user1->setMail('jean@dupont.me');
$user2 = new Utilisateur('Jeanne', 'DUPONT');

$users[] = $user1;
$users[] = $user2;
?>
<html>
<head>
    <title>Titre</title>
</head>
<body>

<ul>
    <?php
    foreach ( $users as $user ) {
        ?>
        <li><?php echo $user->getName(); ?> - <?php echo $user->getMail(); ?></li>
        <?php
    }
    ?>
</ul>

</body>
</html>