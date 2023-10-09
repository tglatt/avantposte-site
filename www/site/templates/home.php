<?php snippet('header') ?>

<main class="main">
    <h1><?= $page->fulltitle() ?></h1>
    <div class="carousel">
        <img src="<?php $page->image('g1056.png')->url() ?>" alt="équipe de l'avant-poste">
    </div>
    <h2><?= $page->subtitle() ?></h2>
    <ul class="domains">
    <?php foreach ($page->children()->listed() as $domain) : ?>
        <li>
            <div class="domain">
                <figure>
                    <?php if ($domain->image()){
                        echo $domain->image()->crop(200,200);
                    }
                    ?>
                </figure>
                <figcaption>
                    <?= $domain->title() ?>
                </figcaption>
                <p>
                <?= $domain->text()?>
                </p>
            </div>
        </li>
    <?php endforeach ?>
    </ul>

</main>

<?php snippet('footer') ?> 