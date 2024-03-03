<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section>
        <div class="section-content">
            <div class="titre">
                <h1><?= $page->title() ?></h1>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section>
        <div class="section-content">
            <div class="sec_padd1">
                <div class="info">
                    <div class="small_p"><?= $page->sec2text()->kt() ?></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
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