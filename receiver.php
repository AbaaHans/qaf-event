<?php

$id = $_POST['id'];
$nom = $_POST['nom'];
$email = $_POST['client_mail'];
$telephone = $_POST['tel'];
$ville = $_POST['ville'];
$raison_sociale = $_POST['raison_sociale'];
$MD = $_POST['MD'];
$NC = $_POST['NC'];
$interet = $_POST['interet'];


header("Location:assets/mail/mail_receiver.php?id=$id&nom=$nom&email=$email&telephone=$telephone&ville=$ville&raison_sociale=$raison_sociale&MD=$MD&NC=$NC&interet=$interet");