<?php
include('traitement.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mise en Page Simple</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
    <div class="container">
        <header>
            <h1>Mon Site Web</h1>
        </header>

        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À Propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <section class="main-content">
            <article>
                <h2>Article 1</h2>
                <p>Ceci est le premier article de mon site.</p>
            </article>

            <article>
                <h2>Article 2</h2>
                <p>Voici le deuxième article de mon site.</p>
            </article>
        </section>

        <aside>
            <h2>À la Une</h2>
            <p>Informations supplémentaires ou publicités peuvent être affichées ici.</p>
        </aside>

        <footer>
            <p>&copy; 2023 Mon Site Web. Tous droits réservés.</p>
        </footer>
    </div>
    <script src="js/code.js"></script>
</body>
</html>
