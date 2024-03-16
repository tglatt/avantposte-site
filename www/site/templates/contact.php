<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4 mb-8">
                    <h1 class="mb-1 leading-12 text-5xl  md:text-5xl lg:text-7xl">
                        <?= $page->title() ?>
                    </h1>
                </div>

                <div class="lg:px-20 md:px-10 px-4 text-2xl text-center">
                    <p><?= $page->sec1text()->kt() ?></p>
                </div>
                <div class="lg:px-20 md:px-10 px-4 text-2xl text-center">
                    <p class="link_blackToPrimary mb-8"><a
                            href="mailto:<?= $page->mailContact() ?>"><?= $page->mailContact() ?></a></p>

                    <p><?= $page->sec1text2()->kt() ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-8 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec2title2() ?></h2>
            </div>
            <div class="px-8 md:px-8">
                <div class="two_col grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-2">
                    <div class="col1 mb-8">
                        <div class="text-left text-2xl"><?= $page->sec2textCol1()->kt() ?></div>
                    </div>
                    <div class="col2">
                        <div class="h-full min-h-full">
                            <iframe class="w-full h-full min-h-5" frameborder="0" allowfullscreen allow="geolocation"
                                src="//umap.openstreetmap.fr/fr/map/localisation-de-lavant-poste_1011588?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false&captionMenus=true">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <?php snippet('footer') ?>
</main>