<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>


    <section class='pt-8 md:pb-0'>
        <div class="sec_carousel">
            <?php snippet('carousel-images', slots: true) ?>
            <?php slot('images') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
        </div>
    </section>

    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="px-8 md:px-8">
                <div class="text-2xl md:text-3xl mb-8">
                    <?= $page->text1()->kt() ?>
                </div>
            </div>
            <div class="px-8 md:px-8 mb-8">
                <a class="text-2xl md:text-3xl link_blackToPrimary" href="/contact"><?= $page->lien1()->kt() ?></a>
            </div>
        </div>
    </section>

    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="listActivite">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-5xl  md:text-5xl lg:text-7xl">
                        <?= $page->sec4titre2() ?>
                    </h2>
                </div>
            </div>

            <div class="two_col">
                <div class="col1">
                    <div class="medium_p mb-8"><?= $page->sec4titreCol1()->kt() ?></div>
                    <div class="imageInCol mb-8">
                        <?php if ($image = $page->image('NOTONCAROUSEL_GrandeSalle.jpg')) : ?>
                        <div class="image-container">
                            <img class='image-activity' src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                            <div class="image-overlay-yellow"></div>
                        </div>
                        <?php endif ?>
                    </div>
                    <div class="text-left text-3xl"><?= $page->sec4textCol1()->kt() ?></div>
                </div>

                <div class="col2">
                    <div class="medium_p"><?= $page->sec4titreCol2()->kt() ?></div>
                    <hr>
                    <div class="text-left text-3xl"><?= $page->sec4textCol2()->kt() ?></div>
                    <hr>
                    <div class="imageInCol">
                        <?php if ($image = $page->image('NOTONCAROUSEL_SalleActivite.jpg')) : ?>
                        <div class="image-container">
                            <img class='image-activity' src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                            <div class="image-overlay-blue"></div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">

            <h2 class="mb-4 xl:mb-12 text-5xl  md:text-5xl lg:text-7xl"><?= $page->sec5Titre2() ?></h2>
            <hr>
            <img>
            <div class="two_col">
                <div class="col1">
                    <div class="text-left text-3xl"><?= $page->sec5textCol1()->kt() ?></div>
                </div>
                <div class="col2">
                    <div class="text-left text-3xl"><?= $page->sec5textCol2()->kt() ?></div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-16'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <h2 class="mb-4 xl:mb-12 text-5xl  md:text-5xl lg:text-7xl"><?= $page->sec6Titre2() ?></h2>
            </div>
            <hr>
            <div class="info">
                <div class="text-center text-3xl"><?= $page->sec6TextMediumA()->kt() ?></div>
            </div>
            <hr>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8 xl:px:0">
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6APrix1()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">TTC</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6AText1()->kt() ?>
                    </div>
                </div>
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6APrix2()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">TTC</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6AText2()->kt() ?>
                    </div>
                </div>
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6APrix3()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">TTC</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6AText3()->kt() ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="info">
                <div class="text-center text-3xl"><?= $page->sec6TextMediumB()->kt() ?></div>
            </div>
            <hr>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8 xl:px:0">
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6BPrix1()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">HT</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6BText1()->kt() ?>
                    </div>
                </div>
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6BPrix2()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">HT</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6BText2()->kt() ?>
                    </div>
                </div>
                <div class="tarif border border-gray-300 rounded-lg p-4 py-8 text-center">
                    <div class="text-8xl flex items-center justify-center mb-4">
                        <div><?= $page->sec6BPrix3()->kt() ?></div>
                        <div class="text-xs ml-1 mt-auto">HT</div>
                    </div>
                    <div class="small_p mt-2">
                        <?= $page->sec6BText3()->kt() ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 7 -->
    <section class='py-16 md:py-16'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <h2 class="mb-4 xl:mb-12 text-5xl  md:text-5xl lg:text-7xl"><?= $page->sec7Titre2() ?></h2>

                <div class="text-left text-3xl mb-8">
                    <a class="link_blackToPrimary" href="/contact"><?= $page->sec7Link1()->kt() ?></a>
                </div>

                <div class="text-left text-3xl"><?= $page->sec7Text1()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 8 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info mb-8">
                <h2 class="mb-4 xl:mb-12 text-5xl  md:text-5xl lg:text-7xl"><?= $page->sec8Titre2() ?></h2>
                <div class="text-left text-3xl"><?= $page->sec8Text1()->kt() ?></div>
            </div>

            <div class="bouton mt-8">
                <a href="<?= page('contact.php')->url() ?>">
                    <button class="px-6 py-4 border-1 ">
                        <div class="px-6 text-lg md:text-xl lg:text-5xl bg-white">
                            <?= $page->sec8Button() ?>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>


    <?php snippet('footer') ?>
</main>