<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de Football - Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        .info-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menu {
            list-style: none;
            padding: 0;
        }
        .menu li {
            margin: 10px 0;
        }
        .menu a {
            display: block;
            padding: 15px;
            background: #36cd48;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .menu a:hover {
            background: #29b92b;
        }
    </style>
</head>
<body>

<?php
$nom_club = "FC Nantes";
$annee_creation = 1998;
$nombre_licences = 0;
?>

    <div class="info-box">
        
        <h2>Bienvenue au <?php echo $nom_club; ?>, fondé en <?php echo $annee_creation; ?></h2>
        <ul class="menu">
            <li><a href="formulaire_licencie.php">➕ Inscrire un nouveau licencié</a></li>
            <li><a href="affichage_licencies.php">📋 Voir tous les licenciés</a></li>
            
        </ul>
        <?php
    $categorie = "Senior";
    ?>
    
    <p><?php echo $categorie; ?></p>
    </div>

</body>
<?php
