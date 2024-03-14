<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section class='py-16 md:py-32'>
        <div class='section-hero'>
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
            <div class="sec_padd1">
                <div class="info">
                    <div class="small_p"><?= $page->sec2text()->kt() ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="grid_personnnes">
                <?php foreach ($page->children()->listed() as $personne) : ?>
                <div class="personne">

                    <figure>
                        <?php if ($cover = $personne->image()) : ?>
                        <img src="<?= $cover->crop(500, 426)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
                        <?php endif ?>
                        <figcaption class="img-caption">
                            <hr>
                            <p><?= $personne->title()->esc() ?></p>
                        </figcaption>
                    </figure>
                    <?php if ($personne->job() != "") : ?>
                    <p><?= $personne->job()->esc() ?></p>
                    <?php endif ?>
                    <hr>
                    <?php if ($personne->entreprise() != "") : ?>
                    <p><?= $personne->entreprise()->esc() ?></p>
                    <?php endif ?>
                    <?php if ($personne->siteweb() != "") : ?>
                    <p>
                        <a href="https://<?= $personne->siteweb()->esc() ?>" class="link_blackToPrimary">
                            <?= $personne->siteweb()->esc() ?>
                        </a>
                    </p>
                    <?php endif ?>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>

</main>