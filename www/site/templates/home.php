<?php snippet('header') ?>

<main class="main">
    <section >
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
    <!-- <section class="carousel">
        <img src="<?php $page->image('g1056.png')->url() ?>" alt="équipe de l'avant-poste">
    </section> -->
    <section class="listActivite">
        <div class="chapeau">
            <p><?= $page->subtitle() ?></p>
        </div>
        <hr>
        <ul class="domains">
            <?php foreach ($page->children()->listed() as $domain) : ?>
                <li>
                    <a href=" <?= page($domain->linkTo()) ?>">
                        <div class="domain">
                            <figure>
                                <?php if ($domain->image()) {
                                    echo $domain->image();
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