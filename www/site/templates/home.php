<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section class='py-16 md:py-16'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-2">
                    <h1 class="mb-1 leading-12 text-5xl  md:text-5xl lg:text-7xl">
                        <?= $page->fulltitle() ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='pt-8 md:pb-0'>
        <div class="sec_carousel">
            <?php snippet('carousel-images', slots: true) ?>
            <?php slot('images') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
        </div>
    </section>

    <!-- Section 3 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="listActivite">
                <div class="lg:px-20 md:px-10 px-4">
                    <h2 class="mb-4 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                        <?= $page->chapeau() ?></h2>
                </div>
            </div>

            <hr>
            <div class="grid grid-cols-1 md:grid-col-2 lg:grid-cols-3 xl:grid-cols-3  gap-4">
                <?php foreach ($page->children()->listed() as $domain) : ?>
                <div class='px-12 xl:px-4 mb-4 xl:mb-12'>
                    <a href="<?= page($domain->linkTo()) ?>" class="domain">
                        <figure>
                            <?php if ($domain->image()) {
                                    echo $domain->image();
                                }
                                ?>
                        </figure>
                        <hr>
                        <figcaption>
                            <h2 class="text-2xl lg:text-3xl"><?= $domain->title() ?></h2>
                            <hr>
                            <p class="text-lg font-normal text-gray-500">
                                <?= $domain->text() ?>
                            </p>
                        </figcaption>
                    </a>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <h1 class="mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                <?= $page->contactezNousText() ?>
            </h1>
            <div class="bouton">
                <a href="<?= page('contact.php')->url() ?>">
                    <button class="px-6 py-4 border-1 ">
                        <div class="px-6 text-lg md:text-xl lg:text-5xl bg-white">
                            <?= $page->contactezNousButton() ?>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-4 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->Sec6Title1() ?>
                </h1>
                <h2 class="mb-6 text-lg font-normal lg:text-xl sm:px-16 xl:px-48">
                    <?= $page->sec6Text()->kt() ?>
                </h2>
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