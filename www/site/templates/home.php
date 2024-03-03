<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section>
        <div class='section-hero'>
            <div class="section-content">
                <div class="titre">
                    <h1><?= $page->fulltitle() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section>
        <div class="section-content-gallery">
            <div class="sec_carousel">
                <?php snippet('carousel-images', slots: true) ?>
                <?php slot('images') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section>
        <div class="section-content">
            <div class="listActivite">
                <div class="chapeau">
                    <p><?= $page->chapeau() ?></p>
                </div>
            </div>
        
            <hr>
            <ul class="domains">
                <?php foreach ($page->children()->listed() as $domain) : ?>
                    <li>
                        <a href="<?= page($domain->linkTo()) ?>" class="domain">
                            <figure>
                                <?php if ($domain->image()) {
                                    echo $domain->image();
                                }
                                ?>
                            </figure>
                            <hr>
                            <figcaption>
                                <h2><?= $domain->title() ?></h2>
                                <hr>
                                <p>
                                    <?= $domain->text() ?>
                                </p>
                            </figcaption>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <!-- Section 4 -->
    <section>
        <div class="section-content">
            <div class="chapeau">

                <p><?= $page->contactezNousText() ?></p>
            </div>
            <hr>
            <hr>
            <div class="bouton">

                <a href="<?= page('contact.php')->url() ?>">
                    <button class="btn_primary">
                        <?= $page->contactezNousButton() ?>
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- Section 5 -->
    <!-- <section class="agenda">
        <h1>l'Agenda</h1>
    </section> -->

    <!-- Section 6 -->
    <section>
        <div class="section-content">
            <div class="titre">
                <h1><?= $page->Sec6Title1() ?></h1>
                <hr>
                <hr>
                <div class="medium_p"><?= $page->sec6Text()->kt() ?></div>
            </div>
            <hr>
            <hr>
            <div class="mecenes">
                <?php foreach ($page->images() as $img) : ?>
                    <?php if (str_contains($img->name(), 'MECENE_LOGO')) : ?>
                            <?= $img ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <?php snippet('footer') ?> 
</main>

</body>

</html>