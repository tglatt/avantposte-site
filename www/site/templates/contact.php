<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">

                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-8 text-5xl tracking-normal text-gray-900 md:text-5xl lg:text-6xl">
                        <?= $page->title() ?></h1>
                </div>
                <div class="lg:px-20 md:px-10 px-4">
                    <p><?= $page->sec1text()->kt() ?></p>
                </div>
                <p class="link_blackToPrimary"><a
                        href="mailto:<?= $page->mailContact() ?>"><?= $page->mailContact() ?></a></p>
                <hr>
                <p><?= $page->sec1text2()->kt() ?></p>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">

                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->sec2title2() ?></h2>
                </div>

                <div class="two_col">
                    <div class="col1">
                        <div class="small_p"><?= $page->sec2textCol1()->kt() ?></div>
                    </div>
                    <div class="col2">
                        <div class="imageInCol h100">
                            <iframe width="100%" height="100%" frameborder="0" allowfullscreen allow="geolocation"
                                src="//umap.openstreetmap.fr/fr/map/localisation-de-lavant-poste_1011588?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false&captionMenus=true">
                            </iframe>
                            <!-- <p>
                                <a href="//umap.openstreetmap.fr/fr/map/localisation-de-lavant-poste_1011588?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false&captionMenus=true">
                                    Voir en plein écran
                                </a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php snippet('footer') ?>
</main>