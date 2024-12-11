
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./process/process-create-user.php" method="post">
    <label for="lastname">Nom : </label>
        <input type="text" name="lastname" id="lastname">

        <label for="firstname">Prenom : </label>
        <input type="text" name="firstname" id="firstname">

        <label for="birthdate">Date de naissance : </label>
        <input type="date" name="birthdate" id="bithdate">

        <label for="phone">Tel : </label>
        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Ex:0609056785">

        <label for="mail">Mail : </label>
        <input type="email" name="mail" id="mail">
        


        <input type="submit" value="Creer patient">
    </form>


</body>
</html>