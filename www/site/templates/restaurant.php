<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-16 '>
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
        <div class='mx-auto max-w-4xl lg:max-w-5xl'>
            <div class="lg:px-20 md:px-12 px-12">
                <div class="lg:px-20 md:px-12 px-12">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->Sec3titre2() ?>
                    </h2>
                </div>
                <div class="text-justify text-2xl"><?= $page->sec3text1()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-32 section-border-top section-border-bottom'>
        <div class='mx-auto max-w-4xl lg:max-w-5xl'>
            <div class="lg:px-20 md:px-12 px-12">
                <div class="lg:px-20 md:px-12 px-12">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->sec4Titre2() ?>
                    </h2>
                </div>
                <div class="text-justify text-2xl"><?= $page->sec4Text1()->kt() ?></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="text-justify text-2xl"><?= $page->sec4textCol1()->kt() ?></div>


                    <div class="text-justify text-2xl"><?= $page->sec4textCol2()->kt() ?></div>

                </div>

            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class='py-16 md:py-32'>
        <div class='mx-auto max-w-4xl lg:max-w-5xl'>
            <div class="lg:px-20 md:px-12 px-12">
                <div class="lg:px-20 md:px-12 px-12">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->sec5Titre2() ?>
                    </h2>
                </div>

                <div class="text-justify text-2xl"><?= $page->sec5Text1()->kt() ?></div>
                <div class="two_col">
                    <div class="col1">
                        <div class="text-justify text-2xl">
                            <a class="link_blackToPrimary"
                                href="https://www.instagram.com/hobo_bistrot/"><?= $page->LienInstaHobo()->kt() ?></a>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="text-justify text-2xl">
                            <a class="link_blackToPrimary"
                                href="https://www.facebook.com/profile.php?id=100092677400813&locale=fr_FR"><?= $page->LienFacebookHobo()->kt() ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>