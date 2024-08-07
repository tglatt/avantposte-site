<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-18'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-12 px-12">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 Carrousel -->
    <section class='pt-8 md:pb-0 section-border-top section-border-bottom'>
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
            <div class="lg:px-20 md:px-12 px-12">
                <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl"><?= $page->Sec3titre2() ?>
                </h1>
            </div>

            <div class="lg:px-20 md:px-12 px-12">
                <div class="text-4xl text-justify py-8"><?= $page->sec3titre3()->kt() ?></div>
                <div class="text-2xl text-justify py-8"><?= $page->sec3text1()->kt() ?></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8 xl:px-0 py-8">
                    <div class="tarif-co border border-gray-300 rounded-lg p-4 py-8 text-center">
                        <a href="https://avantposte.dokos.cloud/coworking" target="_blank">
                            <div class="text-8xl flex items-center justify-center mb-4">
                                <div><?= $page->sec3Prix1()->kt() ?></div>
                                <div class="text-xs ml-1 mt-auto">TTC</div>
                            </div>
                            <div class="small_p mt-2">
                                <?= $page->sec3Unite1()->kt() ?>
                            </div>
                        </a>
                    </div>
                    <div class="tarif-co border border-gray-300 rounded-lg p-4 py-8 text-center">
                        <a href="https://avantposte.dokos.cloud/coworking" target="_blank">
                            <div class="text-8xl  flex items-center justify-center mb-4">
                                <div><?= $page->sec3Prix2()->kt() ?></div>
                                <div class="text-xs ml-1 mt-auto">TTC</div>
                            </div>
                            <div class="small_p mt-2">
                                <?= $page->sec3Unite2()->kt() ?>
                            </div>
                        </a>
                    </div>
                    <div class="tarif-co border border-gray-300 rounded-lg p-4 py-8 text-center">
                        <a href="/contact">
                            <div class="text-8xl  flex items-center justify-center mb-4">
                                <div><?= $page->sec3Prix3()->kt() ?></div>
                                <div class="text-xs ml-1 mt-auto">TTC</div>
                            </div>
                            <div class="small_p mt-2">
                                <?= $page->sec3Unite3()->kt() ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:px-20 md:px-12 px-12">
                <div class="text-4xl text-justify py-8"><?= $page->sec3titre3bis()->kt() ?></div>
                <div class="text-2xl text-justify mb-12">
                    <?= $page->sec3text2()->kt() ?>
                </div>


                <a href="https://avantposte.dokos.cloud/coworking">
                    <button class="px-6 py-4" onmouseover="this.style.backgroundColor='#f4f4f4';"
                        onmouseout="this.style.backgroundColor='';">
                        <h3 class="px-6 text-2xl md:text-2xl lg:text-5xl">
                            Réservez directement votre place de coworking
                        </h3>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-32 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-8 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl">
                    <?= $page->sec4Titre2() ?>
                </h2>

                <div class="text-2xl">
                    <p class='text-justify'><?= $page->sec4Text1()->kt() ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class=' py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">

            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl">
                    <?= $page->sec5Titre2() ?></h2>

                <div class="text-2xl text-justify mb-12"><?= $page->sec5Text1()->kt() ?></div>

                <div class="medium_p mb-4"><?= $page->sec5titre3()->kt() ?></div>

                <div class="text-2xl text-justify mb-12"><?= $page->sec5text2()->kt() ?></div>

                <div class="medium_p mb-4"><?= $page->sec5titre3bis()->kt() ?></div>

                <div class="text-2xl text-justify mb-12"><?= $page->sec5text3()->kt() ?></div>

                <div class="medium_p mb-4"><?= $page->sec5titre3ter()->kt() ?></div>

                <div class="text-2xl text-justify mb-12"><?= $page->sec5text4()->kt() ?></div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-32 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal md:text-4xl lg:text-5xl">
                    <?= $page->sec6Titre2() ?></h2>
                <div class="text-2xl text-justify mb-12"><?= $page->sec6Text1()->kt() ?></div>
                <a href="/contact">
                    <button class="px-6 py-4">
                        <h3 class="px-6 text-2xl md:text-2xl lg:text-5xl">
                            Contactez nous pour organiser votre séminaire
                        </h3>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>