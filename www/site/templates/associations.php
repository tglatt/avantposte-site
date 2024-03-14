<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-24'>
        <div class='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>


    <section class='py-16 md:py-24'>
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
                <div class="text-2xl md:text-4xl mb-8">
                    <?= $page->text1()->kt() ?>
                </div>
            </div>
            <div class="px-8 md:px-8 mb-8">
                <a class="text-2xl md:text-4xl link_blackToPrimary" href="/contact"><?= $page->lien1()->kt() ?></a>
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
                    <div class="medium_p"><?= $page->sec4titreCol1()->kt() ?></div>
                    <hr>
                    <div class="imageInCol">
                        <?php if ($image = $page->image('NOTONCAROUSEL_GrandeSalle.jpg')) : ?>
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                        <?php endif ?>
                    </div>
                    <hr>
                    <div class="small_p"><?= $page->sec4textCol1()->kt() ?></div>
                </div>
                <div class="col2">
                    <div class="medium_p"><?= $page->sec4titreCol2()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec4textCol2()->kt() ?></div>
                    <hr>
                    <div class="imageInCol">
                        <?php if ($image = $page->image('NOTONCAROUSEL_SalleActivite.jpg')) : ?>
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
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
            <div class="info">
                <h2><?= $page->sec5Titre2() ?></h2>
                <hr>
                <img>
                <div class="two_col">
                    <div class="col1">
                        <div class="small_p"><?= $page->sec5textCol1()->kt() ?></div>
                    </div>
                    <div class="col2">
                        <div class="small_p"><?= $page->sec5textCol2()->kt() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <h2><?= $page->sec6Titre2() ?></h2>
            </div>
            <hr>
            <div class="info">
                <div class="medium_p"><?= $page->sec6TextMediumA()->kt() ?></div>
            </div>
            <hr>
            <div class="tarifs">
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6APrix1()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6AText1()->kt() ?>
                    </div>
                </div>
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6APrix2()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6AText2()->kt() ?>
                    </div>
                </div>
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6APrix3()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6AText3()->kt() ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="info">
                <div class="medium_p"><?= $page->sec6TextMediumB()->kt() ?></div>
            </div>
            <hr>
            <div class="tarifs">
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6BPrix1()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6BText1()->kt() ?>
                    </div>
                </div>
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6BPrix2()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6BText2()->kt() ?>
                    </div>
                </div>
                <div class="tarif">
                    <div class="tarif_prix">
                        <?= $page->sec6BPrix3()->kt() ?>
                    </div>
                    <div class="small_p">
                        <?= $page->sec6BText3()->kt() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <h2><?= $page->sec7Titre2() ?></h2>
                <hr>
                <div class="medium_p">
                    <a class="link_blackToPrimary" href="/contact"><?= $page->sec7Link1()->kt() ?></a>
                </div>
                <hr>
                <div class="medium_p"><?= $page->sec7Text1()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 8 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="info">
                <h2><?= $page->sec8Titre2() ?></h2>
                <hr>
                <div class="medium_p"><?= $page->sec8Text1()->kt() ?></div>
            </div>
            <hr>
            <div class="bouton">

                <a href="<?= page('contact.php')->url() ?>">
                    <button class="btn_primary">
                        <?= $page->sec8Button() ?>
                    </button>
                </a>
            </div>
        </div>
    </section>


    <?php snippet('footer') ?>
</main>