<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('leopiazza21@gmail.com', 'Envoi depuis la page Contact', $_POST['nom'], $_POST['mail'], $_POST['sujet'], $_POST['message'], 'depuis : leopiazza21@gmail.com');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
