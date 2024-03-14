<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//webfonts3.radimpesko.com/RP-W-eeaadf78-9027-46dc-b0dc-378558cb6cf0" rel="stylesheet">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/style.css') ?>
    <?= css('assets/css/styles.css') ?>
    <?= css('assets/css/flickity.css') ?>
    <?= css('@auto') ?>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
</head>


<body>
    <!--
    <header class="header">
        <div class="mx-auto max-w-4xl lg:max-w-5xl lg:max-w-5xl">

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
                  
                        <div class="menu_item" id="toggle_show_activite">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                            Activités
                        </div>
                        <div class="sub_menu" id="sub_menu_activite">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/coworking">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                            Coworking
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/associations">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                            Associations
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/Logements">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                            Logements
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <a href="/activites/Logements">
                                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
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
                                    
                                    <li>
                                        <div class="menu_item">
                                            <a href="/avantposte/la-cooperative">
                                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                                La coopérative
                                            </a>
                                        </div>
                                    </li>
                                        
                                    <li>
                                    <div class="menu_item">
                                            <a href="/avantposte/le-lieu">
                                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
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
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" alt="Cercle qui entoure le menu" />
                                    Contact
                                </div>
                            </a>
                        </li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>-->

    <header>
        <nav class="bg-primary fixed w-full z-20 top-0 start-0">
            <div class="max-w-5xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="<?= $site->url() ?>" class="logo" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?= $site->image('logo.svg')->url() ?>" alt="Logo Avant-Poste" />
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
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
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

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

                            <div class="menu_item" id="toggle_show_activite">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                Activités
                            </div>
                            <div class="ml-4" id="sub_menu_activite">
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
                                            <a href="/activites/Logements">
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
                            <div class="menu_item" id="toggle_show_avantposte">
                                <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>"
                                    alt="Cercle qui entoure le menu" />
                                l'Avant Poste
                            </div>

                            <div class="sub_menu" id="sub_menu_avantposte">
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




    <script>
    /*
        const header = document.querySelector('.header');
        const logo = document.querySelector('.logo');

        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Vérifiez si la position de défilement est supérieure à la dernière position de défilement
        if (scrollTop > lastScrollTop) {
            // Faites défiler vers le bas
            header.style.top = '-180px'; // Masquez le header en déplaçant vers le haut
            logo.style.opacity = '0'; // Masquez le logo en le rendant transparent
            //header.style.backgroundColor = '#fff'; // Masquez le logo en le rendant transparent
            //header.style.border='1px solid #f4f4f4'
            header.style.boxShadow = '0 4px 4px rgba(0, 0, 0, 0.05)'; // Ajoutez une légère ombre au header
        } 
        
        if(scrollTop==0){
            // Faites défiler vers le haut
            header.style.top = '0'; // Affichez le header en le déplaçant vers le bas
            logo.style.opacity = '1'; // Affichez le logo en le rendant opaque
            header.style.backgroundColor = '#29e76bff'; // Masquez le logo en le rendant transparent
            header.style.boxShadow = 'none'; // Supprimez l'ombre du header
            
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Empêchez la valeur de la position de défilement d'être inférieure à 0
        });*/
    </script>