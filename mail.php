<?php
// Informations de connexion au serveur de messagerie
$smtp_host = 'smtp.000webhost.com';
$smtp_username = 'slayerniry@gmail.com';
$smtp_password = '...';

// Destinataire de l'email
$to = 'ravelfitiaarielle@gmail.com';

// Sujet de l'email
$subject = 'Test d\'email avec PHP';

// Corps de l'email
$message = 'Ceci est un test d\'email envoyé depuis PHP avec 000webhost.com';

// En-têtes de l'email
$headers = "From: $smtp_username\r\n";
$headers .= "Reply-To: $smtp_username\r\n";
$headers .= "Content-type: text/html\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Email envoyé avec succès.';
} else {
    echo 'Erreur lors de l\'envoi de l\'email : ' . error_get_last()['message'];
}
