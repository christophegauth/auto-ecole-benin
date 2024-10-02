<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Vérification que l'email ne contient pas de chiffres
    if (preg_match('/\d/', $email)) {
        echo 'Veuillez entrer une adresse email valide sans chiffres.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Veuillez entrer une adresse email valide.';
    } else {
        // Destinataire
        $to = 'christophegauthiersokpoly@gmail.com';
        
        // Sujet
        $subject = 'Nouvelle inscription à la newsletter';

        // Message
        $message = $email; // Envoyer uniquement l'email

        // En-têtes
        $headers = 'From: noreply@votresite.com' . "\r\n" .
                   'Reply-To: noreply@votresite.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        // Envoi de l'email
        mail($to, $subject, $message, $headers);

        echo 'Merci pour votre inscription !';
    }
} else {
    echo 'Veuillez soumettre le formulaire.';
}
?>
