<?php

require_once './utils/connect-db.php';

$sql = "SELECT * FROM patients";

try {
    
    $stmt = $pdo->query($sql);
    $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo "Erreur de requète : " . $error->getMessage();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste de tous les patients</h1>

<ul>
    <?php
    foreach($patients as $patient){
      
    ?>
    <li>Nom : <?= $patient['lastname'] ?> | Prénom : <?= $patient['firstname'] ?> | Date de naissance : <?= $patient['birthdate'] ?> | Telephone : <?= $patient['phone'] ?> | Email : <?= $patient['mail'] ?></li>
    <a href="./profil-patient.php?numeroID=<?= $patient["id"]?>">Profil du patient</a>
    <?php
    }
    ?>

</ul>
    <a href="./ajout-patient.php">Ajouter un nouveau patient.</a>
</body>
</html>