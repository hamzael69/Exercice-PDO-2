<?php
   require_once './utils/connect-db.php';

if (
    isset($_GET['numeroID'])) {
        
   $id = $_GET['numeroID']  ;

$sql = "SELECT * FROM patients WHERE id = {$id} ";

try {
    
    $stmt = $pdo->query($sql);
    $patient = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo "Erreur de requète : " . $error->getMessage();
}

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
<h1>Fiche du patient</h1>

<ul>
    
  
    <li>Nom : <?= $patient['lastname'] ?> | Prénom : <?= $patient['firstname'] ?> | Date de naissance : <?= $patient['birthdate'] ?> | Telephone : <?= $patient['phone'] ?> | Email : <?= $patient['mail'] ?></li>

</ul>
    <a href="./modifier-patient.php?numeroID=<?= $patient["id"]?>">Modifier profil du patient</a>
</body>
</html>