<?php 
$db = new PDO('mysql:host=localhost;dbname=fricwork;charset=utf8', 'root');


if (isset($_POST['validate'])) {

    if(!empty($_POST['name']) AND !empty($_POST['email'])) {

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        $checkInfos = $db->prepare('SELECT email FROM email WHERE email = ?');
        $checkInfos->execute(array($email));

        if ($checkInfos->rowCount() == 0) {

            $insert = $db->prepare('INSERT INTO email(name, email)VALUES(?, ?)');
            $insert->execute(array($name, $email));

            $successMsg = "Salut $name, tu as étè bien ajouter a la liste d'attente";

        } else {
            $errorMsg = "L'adresse email est déja inscrit";
        }

    } else {
        $errorMsg = "Veuillez remplir tous les champs";
    }

}