<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/style.css') ?>
    <?= css('assets/css/styles.css') ?>
    <?= css('assets/css/flickity.css') ?>
    <?= css('@auto') ?>
    <link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>


<body>

    <header class="header" id='header-1'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl lg:max-w-5xl ">

            <a href="<?= $site->url() ?>" class="flex mb-auto space-x-3 rtl:space-x-reverse">
                <img id='logo-1' src="<?= $site->image('logo.svg')->url() ?>" alt="Logo Avant-Poste" />
            </a>

            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <a href="/">
                            <div class="menu_item">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Accueil
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="menu_item" id="toggle_show_events">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                alt="Cercle qui entoure le menu" />
                            Agenda
                        </div>
                        <div class="sub_menu" id="sub_menu_events">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <a href="/events">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Evènements
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/regular_events">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Activités régulières
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="menu_item" id="toggle_show_activite">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                alt="Cercle qui entoure le menu" />
                            Activités
                        </div>
                        <div class="sub_menu" id="sub_menu_activite">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/coworking">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Coworking
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/associations">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Associations
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/Logements">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Logements
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/Restaurant">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Restaurant
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/acteurs">
                            <div class="menu_item">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Acteurs
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="menu_item" id="toggle_show_avantposte">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                alt="Cercle qui entoure le menu" />
                            l'Avant-Poste
                        </div>

                        <div class="sub_menu" id="sub_menu_avantposte">
                            <ul>

                                <li>
                                    <div class="menu_item">
                                        <a href="/avantposte/la-cooperative">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            La coopérative
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="menu_item">
                                        <a href="/avantposte/le-lieu">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                                alt="Cercle qui entoure le menu" />
                                            Le lieu
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/contact">
                            <div class="menu_item">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Contact
                            </div>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <header id='header-2' class="hidden z-50">
        <nav class="bg-primary fixed w-full z-20 top-0 start-0 shadow-md">
            <div class="max-w-5xl flex flex-wrap items-center justify-between mx-auto p-4">
                <!-- Conteneur pour le logo -->

                <a href="<?= $site->url() ?>" class="flex mb-auto items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?= $site->image('logo.svg')->url() ?>" alt="Logo Avant-Poste" class="h-8">
                    <!-- Ajustez la taille du logo selon vos besoins -->
                </a>
                <!-- Ajoutez ici d'autres éléments si nécessaire -->


                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <!--<a href="https://7508c924.sibforms.com/serve/MUIFABrpteFNJ6oIAGBmr4stiuKfpwS49lF3Atic-7zZhZm2XOlXp_K5VQA4Xx7yRcUKPfrE9Vfr7AraUCXT3GaVPe1DUJ-lOXX2ZtiZ-3N5Lvw42AUccxGVYilNyJSM9TDfUvzT7M3Zc8t00qojgjJAr_u95evWIBwcl6k-WqrbOpEAlEjqRPuKgTuCX_ykExrteIy4YbJ1IkpE"
                        target="_blank">
                        <button type="button" id="button-newsletter"
                            class="ml-1 md:ml-8 xl:ml-12 text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">
                            S'inscrire
                        </button>
                    </a>-->
                    <a href="https://avantposte.dokos.cloud/coworking" target="_blank">
                        <button type="button" id="button-newsletter"
                            class="ml-1 md:ml-8 xl:ml-12 text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">
                            Réserver
                        </button>
                    </a>
                    <!--<button type="button" class="text-white bg-primary hover:bg-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">Contacter-nous</button>-->
                    <button data-collapse-toggle="navbar-sticky" id='toogle-button' type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-auto"
                    id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a class="hover:text-white" href="/">
                                <div class="menu_item cursor-pointer ">
                                    <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                        alt="Cercle qui entoure le menu" />
                                    Accueil
                                </div>
                            </a>
                        </li>
                        <li>

                            <div class="menu_item cursor-pointer hover:text-white" id="toggle_show_events-2">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Agenda
                            </div>
                            <div class="ml-4" id="sub_menu_events-2">
                                <ul>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/events">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Evènements
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/regular_events">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Activités régulières
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="menu_item cursor-pointer hover:text-white" id="toggle_show_activite-2">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Activités
                            </div>
                            <div class="ml-4" id="sub_menu_activite-2">
                                <ul>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/activites/coworking">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Coworking
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/activites/associations">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Associations
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/activites/Logements">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Logements
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu_item">
                                            <a href="/activites/Restaurant">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Restaurant
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/acteurs">
                                <div class="menu_item">
                                    <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                        alt="Cercle qui entoure le menu" />
                                    Acteurs
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="menu_item cursor-pointer" id="toggle_show_avantposte-2">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                l'Avant-Poste
                            </div>

                            <div class="sub_menu" id="sub_menu_avantposte-2">
                                <ul>

                                    <li>
                                        <div class="menu_item">
                                            <a href="/avantposte/la-cooperative">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                La coopérative
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="menu_item">
                                            <a href="/avantposte/le-lieu">
                                                <img class="menu_item_img"
                                                    src="<?= $site->image('entoure.svg')->url() ?>"
                                                    alt="Cercle qui entoure le menu" />
                                                Le lieu
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/contact">
                                <div class="menu_item">
                                    <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                        alt="Cercle qui entoure le menu" />
                                    Contact
                                </div>
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

    </header>





    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('toogle-button');
        const navbar = document.getElementById('navbar-sticky');

        button.addEventListener('click', function() {
            if (navbar.classList.contains('hidden')) {
                navbar.classList.remove('hidden'); // Supprimer la classe hidden si elle est présente
            } else {
                navbar.classList.add('hidden'); // Ajouter la classe hidden si elle n'est pas présente
            }
        });
    });
    </script>

    <script>
    document
        .getElementById("toggle_show_events")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_events").style.display == 'block') {
                    document.getElementById("sub_menu_events").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_events").style.display = 'block'
                    document.getElementById("sub_menu_avantposte").style.display = 'none'
                    document.getElementById("sub_menu_activite").style.display = 'none'
                }
            })

    document
        .getElementById("toggle_show_activite")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_activite").style.display == 'block') {
                    document.getElementById("sub_menu_activite").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_activite").style.display = 'block'
                    document.getElementById("sub_menu_avantposte").style.display = 'none'
                    document.getElementById("sub_menu_events").style.display = 'none'
                }
            })

    document
        .getElementById("toggle_show_avantposte")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_avantposte").style.display == 'block') {
                    document.getElementById("sub_menu_avantposte").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_avantposte").style.display = 'block'
                    document.getElementById("sub_menu_activite").style.display = 'none'
                    document.getElementById("sub_menu_events").style.display = 'none'
                }
            })

    document.getElementById("sub_menu_activite").style.display = 'none'
    document.getElementById("sub_menu_avantposte").style.display = 'none'
    document.getElementById("sub_menu_events").style.display = 'none'
    </script>

    <script>
    document
        .getElementById("toggle_show_events-2")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_events-2").style.display == 'block') {
                    document.getElementById("sub_menu_events-2").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_events-2").style.display = 'block'
                    document.getElementById("sub_menu_activite-2").style.display = 'none'
                    document.getElementById("sub_menu_avantposte-2").style.display = 'none'
                }
            })

    document
        .getElementById("toggle_show_activite-2")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_activite-2").style.display == 'block') {
                    document.getElementById("sub_menu_activite-2").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_events-2").style.display = 'none'
                    document.getElementById("sub_menu_activite-2").style.display = 'block'
                    document.getElementById("sub_menu_avantposte-2").style.display = 'none'
                }
            })

    document
        .getElementById("toggle_show_avantposte-2")
        .addEventListener("click",
            () => {
                if (document.getElementById("sub_menu_avantposte-2").style.display == 'block') {
                    document.getElementById("sub_menu_avantposte-2").style.display = 'none'
                } else {
                    document.getElementById("sub_menu_events-2").style.display = 'none'
                    document.getElementById("sub_menu_activite-2").style.display = 'none'
                    document.getElementById("sub_menu_avantposte-2").style.display = 'block'
                }
            })
    document.getElementById("sub_menu_events-2").style.display = 'none'
    document.getElementById("sub_menu_activite-2").style.display = 'none'
    document.getElementById("sub_menu_avantposte-2").style.display = 'none'
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleEvents = document.getElementById("toggle_show_events");
        const toggleActivite = document.getElementById("toggle_show_activite");
        const toggleAvantposte = document.getElementById("toggle_show_avantposte");
        const subMenuEvents = document.getElementById("sub_menu_events");
        const subMenuActivite = document.getElementById("sub_menu_activite");
        const subMenuAvantposte = document.getElementById("sub_menu_avantposte");

        const toggleEvents2 = document.getElementById("toggle_show_events-2");
        const toggleActivite2 = document.getElementById("toggle_show_activite-2");
        const toggleAvantposte2 = document.getElementById("toggle_show_avantposte-2");
        const subMenuEvents2 = document.getElementById("sub_menu_events-2");
        const subMenuActivite2 = document.getElementById("sub_menu_activite-2");
        const subMenuAvantposte2 = document.getElementById("sub_menu_avantposte-2");

        // Fonction pour fermer les sous-menus lorsque le clic est en dehors
        function closeSubMenus() {
            subMenuEvents.style.display = 'none';
            subMenuActivite.style.display = 'none';
            subMenuAvantposte.style.display = 'none';

            subMenuEvents.style.display = 'none';
            subMenuActivite2.style.display = 'none';
            subMenuAvantposte2.style.display = 'none';
        }

        // Ajouter un écouteur d'événements de clic au document
        document.addEventListener("click", function(event) {
            // Vérifie si le clic est sur toggle_show_activite ou sur son sous-menu
            if (event.target === toggleActivite || event.target.parentElement === toggleActivite) {
                // Ne rien faire, car le clic est sur toggle_show_activite ou sur son sous-menu
            } else if (event.target === toggleAvantposte || event.target.parentElement ===
                toggleAvantposte) {
                // Ne rien faire, car le clic est sur toggle_show_avantposte ou sur son sous-menu
            } else if (event.target === toggleAvantposte2 || event.target.parentElement ===
                toggleAvantposte2) {
                // Ne rien faire, car le clic est sur toggle_show_avantposte ou sur son sous-menu
            } else if (event.target === toggleActivite2 || event.target.parentElement ===
                toggleActivite2) {
                // Ne rien faire, car le clic est sur toggle_show_avantposte ou sur son sous-menu
            } else if (event.target === toggleEvents2 || event.target.parentElement ===
                toggleEvents2) {
                // Ne rien faire, car le clic est sur toggle_show_avantposte ou sur son sous-menu
            } else if (event.target === toggleEvents || event.target.parentElement ===
                toggleEvents) {
                // Ne rien faire, car le clic est sur toggle_show_avantposte ou sur son sous-menu
            } else {
                // Le clic est en dehors des éléments de menu, donc fermer les sous-menus
                closeSubMenus();
            }
        });
    });
    </script>

    <script>
    // Fonction pour gérer le comportement en fonction de la taille de la fenêtre
    function handleWindowSize() {
        const header1 = document.getElementById('header-1');
        const header2 = document.getElementById('header-2');
        // Vérifie la largeur de l'écran
        if (window.innerWidth < 768) {
            header1.classList.add('hidden'); // Cache le header-1 sur les petits écrans
            header2.classList.remove('hidden'); // Affiche le header-2 sur les petits écrans

        } else {
            // Vérifie si la fenêtre est en haut de la page
            if (window.scrollY < 70) {
                header1.classList.remove('hidden'); // Affiche le header-1
                header2.classList.add('hidden'); // Cache le header-2
            } else {
                header1.classList.add('hidden'); // Cache le header-1
                header2.classList.remove('hidden'); // Affiche le header-2
            }
        }
    }

    // Événement de scroll
    window.addEventListener('scroll', function() {
        handleWindowSize();
    });

    // Événement de redimensionnement de la fenêtre
    window.addEventListener('resize', function() {
        handleWindowSize();
    });

    // Appel initial de la fonction pour gérer le comportement lors du chargement initial de la page
    handleWindowSize();
    </script>