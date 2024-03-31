<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-12 px-12">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>



    <!-- Section 2 -->
    <section class='py-16 md:py-32 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec2titre2() ?>
                </h2>

                <div class="text-justify text-2xl"><?= $page->sec2text()->kt() ?></div>

            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec3titre2() ?></h2>


                <div class="text-justify text-2xl mb-8"><?= $page->sec3text()->kt() ?></div>

                <div class="text-justify text-2xl mb-12"><?= $page->sec3subtitle()->kt() ?></div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="mb-12">

                        <div class="text-justify text-3xl mb-8"><?= $page->sec3titreCol1()->kt() ?></div>

                        <div class="imageInCol">
                            <?php if ($image = $page->image('NOTONCAROUSEL_depenses.png')) : ?>
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="mb-12">
                        <div class="text-justify text-3xl mb-8">
                            <p><?= $page->sec3titreCol2()->kt() ?></p>
                        </div>
                        <hr>
                        <div class="imageInCol">
                            <?php if ($image = $page->image('NOTONCAROUSEL_financements.png')) : ?>
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                            <?php endif ?>
                        </div>
                    </div>
                </div>

                <div class="text-justify text-2xl"><?= $page->sec3text2()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-16 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->sec4titre2() ?></h2>
            </div>
        </div>
        <div class="sec_carousel">
            <?php snippet('carousel-images', slots: true) ?>
            <?php slot('images') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
        </div>
    </section>

    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <div class="text-justify text-2xl mb-8"><?= $page->sec4text()->kt() ?></div>
                <div class="text-justify text-2xl mb-8">
                    <div class="list">
                        <?= $page->sec4textList()->list()->kt() ?></div>
                </div>
                <div class="text-justify text-2xl"><?= $page->sec4text2()->kt() ?></div>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>

</main>