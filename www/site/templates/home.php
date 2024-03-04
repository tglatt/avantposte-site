<?php snippet('header') ?>

<main class="main">
    <!-- Section 1 -->
    <section>
        <div class='section-hero'>
            <div class="mx-auto max-w-4xl">
                <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-1 text-5xl tracking-tight text-gray-900 md:text-5xl lg:text-6xl"><?= $page->fulltitle() ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section>
        <div class="mx-auto mx-auto max-w-4xl-gallery py-2">
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
        <div class="mx-auto max-w-4xl">
            <div class="listActivite">
                <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-4 text-4xl tracking-tight text-gray-900 md:text-4xl lg:text-5xl"><?= $page->chapeau() ?></h1>
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
        <div class="mx-auto max-w-4xl">
            <h1 class="mb-4 text-4xl tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
               <?= $page->contactezNousText() ?>
            </h1>
            <hr>
            <hr>
            <div class="bouton">

                <a href="<?= page('contact.php')->url() ?>">
                    <button class="px-3 py-1 border-1 hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300">
                        <h3 class="text-lg md:text-xl lg:text-2xl">
                            <?= $page->contactezNousButton() ?>
                        </h1>
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
        <div class="mx-auto max-w-4xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-4 text-4xl tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->Sec6Title1() ?>
                </h1>
                <p class="mb-6 text-lg font-normal lg:text-xl sm:px-16 xl:px-48">
                    <?= $page->sec6Text()->kt() ?>
                </p>
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