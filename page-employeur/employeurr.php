<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobhive_hub";
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="employeur.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" type="img" href="logo.png">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>


</head>

<body>
    <header>
        <article class="logo">
            <h1>JOBHIVE HUB
            </h1>
        </article>
        <?php
        $idU = $_SESSION['id_user'];
        $sql = "SELECT * FROM user WHERE id_user=$idU";
        $result = mysqli_query($connection, $sql);


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
           <article class="user">
            <div class="div22">
                <h1 class="nom_user">
                    <?php echo $row['nom_et_prenom']; ?>
                </h1>
                <p class="role_user">
                    <?php echo $row['role']; ?>
                </p>
                </div>
                <form action="logout.php" method="POST">
            <button class="Btn">

                <div class="sign"><svg viewBox="0 0 512 512">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                        </path>
                    </svg></div>

                <div class="text">Logout</div>
            </button>
        </form>
            </article>
        <?php } ?>
        
    </header>
    <section class="section1">
        <article class="article_btn">
            <a href="" id="active">Ajouter un employé</a>
            <a href="">Afficher mes employé </a>
            <a href="">Messages</a>
            <a href="">Notification</a>
        </article>
    </section>
    <section class="section2">
        <article class="article_input">
            <form action="employeur.php" method="post">
                <h1 class="titre">Titre:</h1>
                <input type="text" name="titre" id="titre" placeholder="Titre">
                <h1 class="titre">Domaine:</h1>
                <input type="text" name="domaine" id="domaine" placeholder="Domaine">
                <h1 class="titre">Nom du société:</h1>
                <input type="text" name="name" id="name" placeholder="Nom du société">
                <h1 class="titre">Adresse:</h1>
                <input type="text" name="adresse" id="adresse" placeholder="Adresse">
        </article>
        <article class="sal_cont">
            <h1 class="titre">Salaire:</h1>
            <input type="text" name="salaire" id="salaire" placeholder="Salaire">

            <h1 class="titre">Contrat</h1>
            <select id="pet-select" name="contrat">
                <option value="">--Please choose an option--</option>
                <option value="télétravail">télétravail</option>
                <option value="temps_complet">temps complet</option>
                <option value="demi_journée">demi journée</option>
            </select>
        </article>
        <article class="description">
            <h1 class="titre">Description du poste :</h1>
            <textarea placeholder="Description" name="description"></textarea>
        </article>
        <article class="btn">
            <button type="submit" class="btn1">Envoyer</button>
            <button disabled="disabled" class="btn1">Annuler</button>
        </article>
        </form>
    </section>
</body>

</html>