<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>LBB - La Bonne Bouffe</title>
    <link rel="shortcut icon" href="medias/icon.png" type="image/x-icon">
    <meta name="theme-color" content="#E4F1FF"/>
    <title>LBB - Modifier un article</title>
</head>
<?php 
    include 'connectbdd.php';
    $reponse = $bdd->query('SELECT * FROM article ORDER BY id');
?>
<body>
    <header class="general-header">
        <aside></aside>
        <h1>Bienvenue sur La Bonne Bouffe !</h1>
    </header>
    <div class="general-content">
        <aside></aside>
        <section class="desc">
        <p>Vous aimez la bonne bouffe ? Et bien vous êtes à l'endroit parfait, parcque ici on parle de bouffe, et pas n'importe laquelle, de la bonne !</p>
        </section>
        <div class="timeline">
        <?php 
            while($donnees = $reponse->fetch()){
        ?>
            <div class="container left">
                <div class="content" onclick="document.location.href='article.php?id=<?php echo $donnees['id'] ?>'">
                    <aside style="background-image: url('medias/mainimg/<?php echo $donnees['image'] ?>');"></aside>
                    <h2>Bonne Bouffe n°<?php echo $donnees['id'] ?></h2>
                    <p><?php echo $donnees['titre'] ?></p>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <script src="js/main.js"></script>
    <footer>
        <p>Fait par <a href="https://www.axsiow.ovh/" target="_blank" class="rainbow">Axsiow</a> sur un projet orinal de <a href="https://theomigeat.com">Théo Migeat</a> !</p>
        <p><a style="color:white" href="admin.php">admin</a></p>
		<p>Réaliser à Grenoble 🗻 France. Avec ❤️️</p>
    </footer>
</body>
</html>