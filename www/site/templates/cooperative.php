<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl leading-8 md:text-5xl lg:text-7xl font-sans"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <div class="text-left text-2xl"><?= $page->sec2text()->kt() ?></div>
            </div>
            <hr>
            <div class="bouton">

                <a href="<?= page('contact.php')->url() ?>">
                    <button class="px-6 py-4 border-1 hover:bg-white">
                        <h3 class="px-6 text-lg md:text-xl lg:text-5xl">
                            <?= $page->sec2Button() ?>
                        </h3>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec3titre2() ?>
                    </h1>
            </div>
            <hr>
            <div class="info">
                <div class="text-left text-2xl"><?= $page->sec3text()->kt() ?></div>

            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="sec_carousel">
        <div class="lg:px-20 md:px-10 px-4">
            <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec4titre2() ?></h1>
        </div>
        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>
    </section>

    <!-- Section 5 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec5titre2() ?>
                    </h1>
            </div>

            <div class="info">
                <div class="text-left text-2xl"><?= $page->sec5text()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec6titre2() ?>
                    </h1>
            </div>
            <div class="image">
                <?php if ($image = $page->image('NOTONCAROUSEL_gouvernance.png')) : ?>
                <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                <?php endif ?>
            </div>
            <hr>
            <div class="info">
                <div class="small_p"><?= $page->sec6text()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 7 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec7titre1bis() ?>
                    </h1>
            </div>
        </div>
    </section>

    <!-- Section 8 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec8subtitle() ?>
                    </h1>
            </div>
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
        </div>
    </section>


    <?php snippet('footer') ?>

</main>