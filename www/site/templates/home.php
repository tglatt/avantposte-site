<?php snippet('header') ?>

<main class="main">
    <section>
        <div class="titre">
            <h1><?= $page->fulltitle() ?></h1>
        </div>
    </section>
    <section class="sec_carousel">
        <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
        <?php endslot() ?>
        <?php endsnippet() ?>
    </section>

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
    <!-- <section class="agenda">
        <h1>l'Agenda</h1>
    </section> -->
    <?php snippet('footer') ?>
</main>

</body>

</html>