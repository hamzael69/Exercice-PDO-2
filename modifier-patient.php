<?php
   require_once './utils/connect-db.php';

if (
    isset($_GET['numeroID'])) {
        
   $id = $_GET['numeroID']  ;

$sql = "SELECT * FROM patients WHERE id = {$id} ";


try {
    
    $stmt = $pdo->query($sql);
    $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<h1>Modifier patient</h1>

<ul>
    <?php
    foreach($patients as $patient){
    ?>

<form action="./process/process-update-user.php" method="post">
    <label for="lastname">Nom : </label>
        <input type="text" name="lastname" id="lastname" value="<?= $patient["lastname"] ?>">

        <label for="firstname">Prenom : </label>
        <input type="text" name="firstname" id="firstname" value="<?= $patient["firstname"] ?>">

        <label for="birthdate">Date de naissance : </label>
        <input type="date" name="birthdate" id="bithdate" value="<?= $patient["birthdate"] ?>">

        <label for="phone">Tel : </label>
        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Ex:0609056785" value="<?= $patient["phone"] ?>">

        <label for="mail">Mail : </label>
        <input type="email" name="mail" id="mail" value="<?= $patient["mail"] ?>">

       
        <input type="text" name="id" id="id" value="<?= $patient["id"]?>" hidden>
        


        <input type="submit" value="Modifier patient">
    </form>

    <?php
    }
    ?>

</ul>
</body>
</html>