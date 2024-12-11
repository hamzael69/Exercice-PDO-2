<?php




require_once '../utils/connect-db.php';



$sql = "UPDATE patients set lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone , mail = :mail where id = :id";



try {
    $stmt = $pdo->prepare($sql);
    $patients = $stmt->execute([
        ':lastname' => $_POST["lastname"],
        ':firstname' => $_POST["firstname"],
        ':birthdate' => $_POST["birthdate"],
        ':phone' => $_POST["phone"],
        ':mail' => $_POST["mail"],
        ':id' => $_POST["id"]
    ]); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat




} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


header("Location: ../index.php");
exit;