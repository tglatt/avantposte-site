<?php snippet('header') ?>

<main class="main">
    <section>
        <div class="section-content">
            <div class="titre">
                <h1><?= $page->title() ?></h1>
            </div>
        </div>
    </section>


    <section>
            <div class="sec_carousel">
                <?php snippet('carousel-images', slots: true) ?>
                <?php slot('images') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            </div>
    </section>

    <section>
        <div class="section-content">
            <div class="info">
                <div class="medium_p"><?= $page->text1()->kt() ?></div>
                <hr>
                <div class="medium_p">
                    <a class="link_blackToPrimary" href="/contact"><?= $page->lien1()->kt() ?></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="info">
                <h2><?= $page->sec4titre2() ?></h2>
                <hr>

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
    <section>
        <div class="section-content">
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
    <section>
        <div class="section-content">
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
    <section>
        <div class="section-content">
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
    <section>
        <div class="section-content">
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