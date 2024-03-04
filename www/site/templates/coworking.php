<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-16'>
        <div class='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl leading-8 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 Carrousel -->
    <section class='py-16 md:py-16'>

            <div class="sec_carousel">
                <?php snippet('carousel-images', slots: true) ?>
                <?php slot('images') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->Sec3titre2() ?></h1>
            </div>
            
            
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
                    <button class="px-6 py-4 border-1 hover:bg-white">
                        <h3 class="px-6 text-lg md:text-xl lg:text-5xl">
                            <?= $page->contactezNousButton() ?>
                        </h3>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec4Titre2() ?></h2>
                </div>
                <div class="small_p"><?= $page->sec4Text1()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec5Titre2() ?></h2>
                </div>
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
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl"><?= $page->sec6Titre2() ?></h1>
                </div>
                <div class="small_p"><?= $page->sec6Text1()->kt() ?></div>

            </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>