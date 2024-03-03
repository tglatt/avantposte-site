<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//webfonts3.radimpesko.com/RP-W-eeaadf78-9027-46dc-b0dc-378558cb6cf0" rel="stylesheet">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/style.css') ?>
    <?= css('assets/css/flickity.css') ?>
    <?= css('@auto') ?>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
</head>


<body>

    <header class="header">
        <div class="header-content">

            <a href="<?= $site->url() ?>" class="logo">
                <img src="<?= $site->image('logo.svg')->url() ?>" alt="Logo Avant-Poste" />
            </a>

        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="/">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                            Accueil
                        </div>
                    </a>
                </li>
                <li>
                    <!-- <a href="activite"> -->
                    <div class="menu_item" id="toggle_show_activite">
                        <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                        Activités
                        <!-- </a> -->
                    </div>
                    <div class="sub_menu" id="sub_menu_activite">
                        <ul>
                            <li><a href="/activites/coworking">Coworking</a></li>
                            <li><a href="/activites/associations">Associations</a></li>
                            <li><a href="/activites/logements">Logements</a></li>
                            <li><a href="/activites/restaurant">Restaurant</a></li>
                            <!-- <li><a href="/activites/ateliers">Ateliers</a></li> -->
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/acteurs">
                        <div class="menu_item">
                        <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                            Acteurs
                        </div>
                    </a>
                </li>
                <li>
                    <div class="menu_item" id="toggle_show_avantposte">
                        <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                        l'Avant Poste
                    </div>

                        <div class="sub_menu" id="sub_menu_avantposte">
                            <ul>
                                <li><a href="/avantposte/la-cooperative">la coopérative</a></li>
                                <li><a href="/avantposte/le-lieu">le lieu</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="/actualite">
                            <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                Actualités
                            </div>
                        </a>
                    </li> -->
                    <li>
                        <a href="/contact">
                            <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
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
        </div>
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