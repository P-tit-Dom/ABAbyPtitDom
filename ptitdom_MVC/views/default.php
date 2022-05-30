<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ABA by P'tit Dom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Theme styles -->
        <link rel="stylesheet" type="text/css" href="assets/css/ss2.css">
        <script type="text/javascript" src="scripts/functions.js"></script>
    </head>

    <body>
        <header>
            <!-- display header unless in cotation ? -->
            <table class="header">
                <tr>
                    <td>
                        <a href="/edsa-ptitdom_MVC">
                            <img src="assets/img/Logo.png" alt="Logo" class="logo">
                        </a>
                    </td>
                    <td>
                        <a href="/edsa-ptitdom_MVC">
                            <button class="h1">
                                <h1>ABA by P'tit Dom</h1>
                            </button>
                        </a>
                    </td>
                    <td>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <form action="" method="post">
                                <button name="disconnection">Déconnexion</button>
                            </form>
                        <?php } ?>
                    </td>
                </tr>
            </table>

            <?php if (isset($_SESSION['username'])) { ?>
                <div>
                    <a href="/edsa-ptitdom_MVC"><button type="button">Psychologue</button></a>
                    <?php foreach(explode('/', $_GET['p']) as $p) {
                        if ($p != "") {
                            echo " > ".$p;
                        }
                    } ?>
                </div>
            <?php } ?>
        </header>

        <main role="main">            
            <?php if (isset($_SESSION['username'])) { ?>
                <form action="Apprenant" method="get">
                    <!-- think about the placeholder if a child has been selected -->
                    <label for="learner">Sélection d'un apprenant :</label>
                    <select id="learner" name="id">
                        <?php
                        echo 'theres sth';
                        foreach($aps as $a) {
                            echo '<option value="'.$a['id'].'">'.$a['nom'].'</option>';
                        }
                        ?>
                    </select>
                    <button>send</button>
                </form>
                <p>(should become a text input)</p>
            <?php } ?>
            <?= $content ?>
        </main>

        <footer>
        </footer>
        <script type="text/javascript" src="scripts/js.js"></script>
    </body>
</html>