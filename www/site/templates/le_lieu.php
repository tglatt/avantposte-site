<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section class='py-16 md:py-32'>
        <div class='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl leading-8 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec2titre2() ?></h2>
            </div>

            <div class="info">
                <div class="small_p"><?= $page->sec2text()->kt() ?></div>

            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec3titre2() ?></h2>
            </div>


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
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec4titre2() ?></h2>
            </div>
        </div>

        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>

        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <div class="small_p"><?= $page->sec4text()->kt() ?></div>
            </div>
        </div>
        <hr>

    </section>

    <?php snippet('footer') ?>

</main>