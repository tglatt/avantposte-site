<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section>
        <div class="titre">
            <h1><?= $page->fulltitle() ?></h1>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="sec_carousel">
        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>
    </section>

    <!-- Section 3 -->
    <section class="listActivite">
        <div class="chapeau">
            <p><?= $page->chapeau() ?></p>
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
    </section>

    <!-- Section 4 -->
    <section>
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
    </section>
    <!-- Section 5 -->
    <!-- <section class="agenda">
        <h1>l'Agenda</h1>
    </section> -->

    <!-- Section 6 -->
    <section>
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
    </section>
    <?php snippet('footer') ?>
</main>

</body>

</html>