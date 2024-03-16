<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl tracking-normal text-gray-900 md:text-5xl lg:text-6xl">
                        <?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 2 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="titre">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-8 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->Sec2titre2() ?></h2>
                </div>

                <div class="text-left text-2xl"><?= $page->sec2text1()->kt() ?></div>
                <div class="text-left text-2xl"><?= $page->sec2text2()->kt() ?></div>

            </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">


            <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                <?= $page->sec3Titre2() ?>
            </h2>

            <div class="info my-8">
                <div class="text-left text-2xl font-bold mb-4"><?= $page->sec3titre3()->kt() ?></div>
                <hr>
                <div class="text-left text-2xl"><?= $page->sec3text2()->kt() ?></div>
            </div>


            <div class="info my-8">
                <div class="text-left text-2xl font-bold mb-4"><?= $page->sec3titre3bis()->kt() ?></div>
                <div class="text-left text-2xl"><?= $page->sec3text3()->kt() ?></div>
            </div>


            <div class="info my-8">
                <div class="text-left text-2xl font-bold mb-4"><?= $page->sec3titre3ter()->kt() ?></div>
                <div class="text-left text-2xl"><?= $page->sec3text4()->kt() ?></div>
            </div>


            <div class="info">
                <div class="text-left text-2xl font-bold mb-4"><?= $page->sec3titre3quar()->kt() ?></div>
                <div class="text-left text-2xl">
                    <a class="link_blackToPrimary" href="/avantposte/le-lieu"><?= $page->LienPageLieu()->kt() ?></a>
                </div>
            </div>

        </div>
    </section>

    <?php snippet('footer') ?>
</main>