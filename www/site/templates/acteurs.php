<?php snippet('header') ?>

<main class="main">

    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-12 px-12">
                    <h1 class="mb-1 text-5xl tracking-normal text-gray-900 md:text-5xl lg:text-6xl">
                        <?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='py-16 md:py-8 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <h1 class="mb-12 text-3xl tracking-normal  md:text-3xl lg:text-4xl text-justify">
                    <?= $page->sec2text()->kt() ?>
                </h1>
            </div>
        </div>
    </section>

    <section class='py-16 md:py-16'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-8">
                    <?php foreach ($page->children()->listed() as $personne) : ?>
                    <div class="personne  flex flex-col justify-between">
                        <div class="personne-image">
                            <?php if ($cover = $personne->image()) : ?>

                            <img src="<?= $cover->crop(500, 426)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
                            <?php endif ?>
                        </div>
                        <div class=" py-4 text-left">
                            <div class="font-medium text-xl mb-2"><?= $personne->title()->esc() ?></div>
                            <?php if ($personne->job() != "") : ?>
                            <div class="text-gray-500 text-base">
                                <?= $personne->job()->esc() ?>
                            </div>
                            <?php endif ?>
                            <?php if ($personne->siteweb() != "" && $personne->entreprise() != "") : ?>
                        </div>
                        <div class='mt-auto'>
                            <div class="text-gray-700 text-base text-capitalize">

                                <a href="<?= $personne->siteweb()->esc() ?>" class="link_blackToPrimary"
                                    style=" text-decoration: underline !important;">
                                    <?= $personne->entreprise()->esc() ?>
                                </a>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const screenWidth = window.innerWidth;
    const largeScreenSize = 1024;

    const galleryCells = document.querySelectorAll('.personne-image');
    galleryCells.forEach(function(cell, index) {
        // Supprimez les classes existantes pour éviter des conflits
        cell.classList.remove('image-container-yellow', 'image-container-blue',
            'image-container-orange', 'image-container-green');

        // Vérifiez si l'écran est considéré comme grand avant d'ajouter des classes
        if (screenWidth >= largeScreenSize) {
            if (index % 4 === 0) {
                cell.classList.add('image-container-yellow');
            } else if (index % 4 === 1) {
                cell.classList.add('image-container-blue');
            } else if (index % 4 === 2) {
                cell.classList.add('image-container-green');
            } else {
                cell.classList.add('image-container-blue');
            }
        }
    });
});
</script>