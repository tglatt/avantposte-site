<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section>
        <div class="section-content">
            <div class="title">
                <h1><?= $page->title() ?></h1>
            </div>
            <hr>
            <p><?= $page->sec1text()->kt() ?></p>
            <p class="link_blackToPrimary"><a href="mailto:<?= $page->mailContact() ?>"><?= $page->mailContact() ?></a></p>
            <hr>
            <p><?= $page->sec1text2()->kt() ?></p>
        </div>
    </section>

    <!-- Section 2 -->
    <section>
        <div class="section-content">
            <div class="info">
                <h2><?= $page->sec2title2() ?></h2>
                <hr>

                <div class="two_col">
                    <div class="col1">
                        <div class="small_p"><?= $page->sec2textCol1()->kt() ?></div>
                    </div>
                    <div class="col2">
                        <div class="imageInCol h100">
                            <iframe width="100%" height="100%" frameborder="0" allowfullscreen allow="geolocation" src="//umap.openstreetmap.fr/fr/map/localisation-de-lavant-poste_1011588?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false&captionMenus=true">
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