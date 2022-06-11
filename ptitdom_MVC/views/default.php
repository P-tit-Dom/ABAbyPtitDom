<?php
$root = "/edsa-ptitdom_MVC"
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ABA by P'tit Dom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Theme styles -->
        <link rel="stylesheet" type="text/css" href="<?= $root ?>/assets/css/content2.css">
        <script type="text/javascript" src="<?= $root ?>/scripts/functions.js"></script>
    </head>

    <body>
        <?php
        $path = explode('/', $_GET['p'])[0];
        if($path != "Seance") {
        ?>
        <header>
            <!-- display header unless in cotation ? -->
            <table class="header">
                <tr>
                    <td>
                        <a href="<?= $root ?>">
                            <img src="<?= $root ?>/assets/img/Logo.png" alt="Logo" class="logo">
                        </a>
                    </td>
                    <td>
                        <a href="<?= $root ?>">
                            <button class="h1">
                                <h1>ABA by P'tit Dom</h1>
                            </button>
                        </a>
                    </td>
                    <td>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <form action="" method="post">
                                <button name="disconnection"><img src="assets/img/Exit.png" alt="Déconnexion"></button>
                            </form>
                        <?php } ?>
                    </td>
                </tr>
            </table>

            <?php if (isset($_SESSION['username'])) { ?>
                <div>
                    <a href="<?= $root ?>"><button type="button">Psychologue</button></a>  <!-- based on role (session) -->
                    <?php foreach(explode('/', $_GET['p']) as $p) {
                        if ($p != "") {
                            echo " > ".$p;
                        }
                    } ?>
                </div>
            <?php } ?>
        </header>
        <?php } # end path!=Seance ?>

        <main role="main">
            <?php if (isset($_SESSION['username']) && ($path == "" || $path == "Apprenant")) { ?>
                <label for="learner">Sélection d'un apprenant :</label>
                <select id="learner"> <!--  onchange="update_action(this)" -->
                    <?php
                    foreach($aps as $a) {
                        echo '<option value="'.$a['id'].'"';
                        if (isset($ap['id']) && $ap['id'] == $a['id']) { // ---------------- $ap being the current learner -------------------------------------------------------------------------------------------- //
                            echo ' selected';
                        }
                        echo '>'.$a['nom'].'</option>';
                    }
                    ?>
                </select>
                <a href="<?= $root ?>" onclick="this.href='<?= $root ?>/Apprenant/'+this.previousElementSibling.value"><button>send</button></a>
            <?php } ?>
            <?= $content ?>
        </main>

        <footer>
        </footer>
        <script type="text/javascript" src="<?= $root ?>/scripts/js.js"></script>
    </body>
</html>