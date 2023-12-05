<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//webfonts3.radimpesko.com/RP-W-eeaadf78-9027-46dc-b0dc-378558cb6cf0" rel="stylesheet">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/index.css') ?>
    <?= css('assets/css/style.css') ?>
    <?= css('@auto') ?>

</head>


<body>

    <header class="header">

        <a href="<?= $site->url() ?>" class="logo">
            <img src="<?= $site->image('logo.svg')->url() ?>" />
        </a>

        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="/accueil">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            Accueil
                        </div>
                    </a>
                </li>
                <li>
                    <!-- <a href="activite"> -->
                    <div class="menu_item" id="toggle_show_activite">
                        <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                        Activités
                    </div>
                    <!-- </a> -->
                    <div class="sub_menu" id="sub_menu_activite">
                        <ul>
                            <li><a href="/activites/coworking">Coworking</a></li>
                            <li><a href="/activites/associations">Associations</a></li>
                            <li><a href="/activites/logements">Logements</a></li>
                            <li><a href="/activites/restaurant">Restaurant</a></li>
                            <li><a href="/activites/ateliers">Ateliers</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/acteurs">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            Acteurs
                        </div>
                    </a>
                </li>
                <li>
                    <div class="menu_item" id="toggle_show_avantposte">
                        <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                        l'Avant Poste
                    </div>

                    <div class="sub_menu" id="sub_menu_avantposte">
                        <ul>
                            <li><a href="/avantposte/la-scic">la SCIC</a></li>
                            <li><a href="/avantposte/le-lieu">le lieu</a></li>
                            <li><a href="/avantposte/l-equipe">l'équipe</a></li>
                            <li><a href="/avantposte/mission-valeurs">Mission & Valeurs</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/actualite">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            Actualités
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/contact">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            Contact
                        </div>
                    </a>
                </li>




                <!-- <?php foreach ($site->children()->listed() as $item) : ?>
                    <li>
                        <a href="<?= $item->url() ?>">
                            <div class="menu_item">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                                <?= $item->title() ?>
                            </div>
                        </a>
                    </li>
                <?php endforeach ?> -->
            </ul>
        </nav>
    </header>





    <script>
        document.getElementById("sub_menu_activite").style.display = 'none'
        document
            .getElementById("toggle_show_activite")
            .addEventListener("click",
                () => {
                    if (document.getElementById("sub_menu_activite").style.display == 'block') {
                        document.getElementById("sub_menu_activite").style.display = 'none'
                    } else {
                        document.getElementById("sub_menu_activite").style.display = 'block'
                        document.getElementById("sub_menu_avantposte").style.display = 'none'
                    }
                })

        document.getElementById("sub_menu_avantposte").style.display = 'none'
        document
            .getElementById("toggle_show_avantposte")
            .addEventListener("click",
                () => {
                    if (document.getElementById("sub_menu_avantposte").style.display == 'block') {
                        document.getElementById("sub_menu_avantposte").style.display = 'none'
                    } else {
                        document.getElementById("sub_menu_avantposte").style.display = 'block'
                        document.getElementById("sub_menu_activite").style.display = 'none'
                    }
                })
    </script>