<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION["user_name"])) {
    $name = $_SESSION["user_name"];
    $welcomeMessage = "Bienvenue $name !";
} else {
    $welcomeMessage = "Bienvenue Invité !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Les balises head vont ici -->
    <meta charset="utf-8" />
    <title>Votre titre</title>
    <link rel="stylesheet" href="/css/register.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="/js/rgstr.js" charset="utf-8" defer></script>
</head>
<body>
    <div class="container" id="container">
        <!-- Afficher le message de bienvenue -->
        <h1><?php echo $welcomeMessage; ?></h1>

        <!-- Le reste du contenu de la page va ici -->
    </div>
</body>
</html>
