<?php snippet('header') ?>

<main class="main">
    <section>
        <div class='section-hero'>
            <div class="section-content">
                <div class="titre">
                    <h1><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 Carrousel -->
    <section>

            <div class="sec_carousel">
                <?php snippet('carousel-images', slots: true) ?>
                <?php slot('images') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            </div>
    </section>

    <!-- Section 3 -->
    <section>
        <div class="section-content">
            <div class="titre">
                <h2><?= $page->Sec3titre2() ?></h2>
            </div>
            <hr>
            <div class="info">
                <div class="medium_p"><?= $page->sec3titre3()->kt() ?></div>
                <hr>
                <div class="small_p"><?= $page->sec3text1()->kt() ?></div>
            </div>
            <hr>
            <hr>
            <div class="info">
                <div class="medium_p"><?= $page->sec3titre3bis()->kt() ?></div>
                <hr>
                <div class="small_p"><?= $page->sec3text2()->kt() ?></div>
            </div>
            <hr>
            <hr>
            <div class="bouton">

                <a href="<?= page('contact.php')->url() ?>">
                    <button class="btn_secondary">
                        <?= $page->contactezNousButton() ?>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section>
        <div class="section-content">
            <div class="info">
                <h2><?= $page->sec4Titre2() ?></h2>
                <hr>
                <div class="small_p"><?= $page->sec4Text1()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section>
        <div class="section-content">
            <div class="info">
                <h2><?= $page->sec5Titre2() ?></h2>
                <hr>
                <div class="small_p"><?= $page->sec5Text1()->kt() ?></div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec5titre3()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec5text2()->kt() ?></div>
                </div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec5titre3bis()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec5text3()->kt() ?></div>
                </div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec5titre3ter()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec5text4()->kt() ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section>
        <div class="section-content">
            <div class="info">
                <h2><?= $page->sec6Titre2() ?></h2>
                <hr>
                <div class="small_p"><?= $page->sec6Text1()->kt() ?></div>

            </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>