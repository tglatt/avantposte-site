<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section>
        <div class="titre">
            <h1><?= $page->title() ?></h1>
        </div>
    </section>

    <!-- Section 2 -->
    <section>
        <div class="titre">
            <h2><?= $page->sec2titre2() ?></h2>
        </div>
        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec2text()->kt() ?></div>

        </div>
    </section>

    <!-- Section 3 -->
    <section>
        <div class="titre">
            <h2><?= $page->sec3titre2() ?></h2>
        </div>
        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec3text()->kt() ?></div>
        </div>
        <hr>
        <div class="info">
            <div class="medium_p"><?= $page->sec3subtitle()->kt() ?></div>
        </div>
        <hr>
        <div class="two_col">
            <div class="col1">
                <div class="medium_p"><?= $page->sec3titreCol1()->kt() ?></div>
                <hr>
                <div class="imageInCol">
                    <?php if ($image = $page->image('NOTONCAROUSEL_depenses.png')) : ?>
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                    <?php endif ?>
                </div>
            </div>
            <div class="col2">
                <div class="medium_p"><?= $page->sec3titreCol2()->kt() ?></div>
                <hr>
                <div class="imageInCol">
                    <?php if ($image = $page->image('NOTONCAROUSEL_financements.png')) : ?>
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                    <?php endif ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="info">
            <div class="medium_p"><?= $page->sec3text2()->kt() ?></div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="sec_carousel">
        <hr>
        <div class="titre">
            <h2><?= $page->sec4titre2() ?></h2>
        </div>
        <hr>

        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>

        <div class="info">
            <div class="small_p"><?= $page->sec4text()->kt() ?></div>
        </div>
        <hr>
        <hr>
    </section>

    <?php snippet('footer') ?>

</main>