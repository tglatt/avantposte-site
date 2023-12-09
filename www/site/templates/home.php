<?php snippet('header') ?>

<main class="main">
    <section>
        <h1><?= $page->fulltitle() ?></h1>
    </section>

    ICI
    <?php snippet('carousel-images', slots: true) ?>
        <?php slot('images') ?>
            <?php foreach ($page->images() as $img) : ?>
                <?= $img ?>
                <img src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
            <?php endforeach ?>
        <?php endslot() ?>
    <?php endsnippet() ?>
Là
    <!-- <section class="carousel">
        <img src="<?php $page->image('g1056.png')->url() ?>" alt="équipe de l'avant-poste">
    </section> -->

    <section class="listActivite">
        <h2><?= $page->subtitle() ?></h2>
        <ul class="domains">
            <?php foreach ($page->children()->listed() as $domain) : ?>
                <li>
                    <a href=" <?= page($domain->linkTo())->url() ?>">
                        <div class="domain">
                            <figure>
                                <?php if ($domain->image()) {
                                    echo $domain->image()->crop(200, 200);
                                }
                                ?>
                            </figure>
                            <figcaption>
                                <?= $domain->title() ?>
                            </figcaption>
                            <p>
                                <?= $domain->text() ?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

    <section class="contactezNous">
        <p><?= $page->text() ?></p>
        <a href="<?= page('contact.php')->url() ?>"><button><?= $page->contactezNousButton() ?></button></a>
    </section>
    <section class="agenda">
        <h1>l'Agenda</h1>
    </section>
</main>

<?php snippet('footer') ?>