<?php snippet('header') ?>

<main class="main text-center">
    <div class="intro">
        <h1 class=" px-16 pt-6 pb-12 text-7xl"><?= $page->fulltitle() ?></h1>
        <div class="carousel bg-primary py-6">
            <img src="<?php $page->image('g1056.png')->url() ?>" alt="équipe de l'avant-poste">
        </div>
    </div>
    <div class="domainsActivites">
        <h2 class=" px-32 py-6 text-4xl"><?= $page->subtitle() ?></h2>
        <ul class="domains px-6 grid grid-cols-4 gap-2">
            <?php foreach ($page->children()->listed() as $domain) : ?>
                <li>
                    <a href=" <?= page($domain->linkTo())->url() ?>" class="hover:text-primary">
                        <div class="domain  px-3">
                            <figure class="px-20 pb-6">
                                <?php if ($domain->image()) {
                                    echo $domain->image()->crop(200, 200);
                                }
                                ?>
                            </figure>
                            <figcaption class="text-4xl pb-6">
                                <?= $domain->title() ?>
                            </figcaption>
                            <p class="text-lg leading-5 pb-6">
                                <?= $domain->text() ?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="contactezNous bg-primary py-6 ">
        <p class="py-6 px-32 text-4xl "><?= $page->contacteznoustext() ?></p>
        <a href="<?= page('contact.php')->url() ?>">
            <button class="my-6 py-4 px-24 text-4xl  border border-black rounded-2xl"><?= $page->contactezNousButton() ?></button>
        </a>
    </div>
    <div class="agenda mb-6">
        <h1 class=" px-16 pt-6 pb-12 text-7xl"><?= $page->agendatitle() ?></h1>
        <a href="<?= page()->url() ?>">
            <button class="my-6 py-4 px-24 text-4xl  border border-black rounded-2xl"><?= $page->agendaCompletButton() ?></button>
        </a>
    </div>
    <div class="soutient bg-primary">
        <h1 class=" px-16 pt-6 pb-12 text-7xl"><?= $page->soutientstitle() ?></h1>
        <p class="text-lg leading-5"> <?= $page->soutientstext() ?> </p>
    </div>

</main>

<?php snippet('footer') ?>