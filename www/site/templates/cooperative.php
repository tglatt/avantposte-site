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
        <div class="info">
            <div class="small_p"><?= $page->sec2text()->kt() ?></div>

        </div>
        <hr>
        <div class="bouton">

            <a href="<?= page('contact.php')->url() ?>">
                <button class="btn_primary">
                    <?= $page->sec2Button() ?>
                </button>
            </a>
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
    </section>

    <!-- Section 4 -->
    <section class="sec_carousel">
        <hr>
        <hr>
        <div class="titre">
            <h2><?= $page->sec4titre2() ?></h2>
        </div>
        <hr>
        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>
    </section>

    <!-- Section 5 -->
    <section>
        <div class="titre">
            <h2><?= $page->sec5titre2() ?></h2>
        </div>
        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec5text()->kt() ?></div>

        </div>
    </section>

    <!-- Section 6 -->
    <section>
        <div class="titre">
            <h2><?= $page->sec6titre2() ?></h2>
        </div>
        <hr>
        <div class="image">
            <?php if ($image = $page->image('NOTONCAROUSEL_gouvernance.png')) : ?>
                <img src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div>
        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec6text()->kt() ?></div>
        </div>
    </section>



    <!-- Section 7 -->
    <section>
        <div class="titre">
            <h1><?= $page->sec7titre1bis() ?></h1>
        </div>
    </section>
    <!-- Section 8 -->
    <section>
        <div class="titre">
            <h2><?= $page->sec8subtitle() ?></h2>
        </div>
        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec8text1()->kt() ?></div>
        </div>
        <hr>
        <div class="titre">
            <h2><?= $page->sec8subtitle2() ?></h2>
        </div>

        <hr>
        <div class="info">
            <div class="small_p"><?= $page->sec8text2()->kt() ?></div>
        </div>
    </section>


    <?php snippet('footer') ?>

</main>