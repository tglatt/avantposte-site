<?php snippet('header') ?>

<?php
function getRandomChild($page) {
    $children = $page->children()->listed();
    if ($children->count() > 0) {
        $randomIndex = mt_rand(0, $children->count() - 1);
        return $children->nth($randomIndex);
    }
    return null;
}
$fullTitle = $page->fulltitle();
$randomChild = getRandomChild($page);
$randomChild2 = getRandomChild($page);

if ($randomChild) {
    $icon = '<img class="icon" src="' . $randomChild->image()->url() . '" alt="' . $randomChild->title() . '" />';
    $icon2 = '<img class="icon" src="' . $randomChild2->image()->url() . '" alt="' . $randomChild2->title() . '" />';
    $fullTitle = str_replace('oo', '<span class="icon-container">' . $icon . $icon2 . '</span>', $fullTitle);
}
?>

<main class="main">
    <!-- Section 1 -->
    <section class='py-16 md:py-16 '>
        <div class=' mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-10 px-2">
                    <h1 class="mb-1 leading-12 text-5xl  md:text-5xl lg:text-7xl hidden xl:block">
                        <?= $fullTitle ?>
                    </h1>
                    <h1 class="mb-1 leading-12 text-5xl  md:text-5xl lg:text-7xl xl:hidden ">
                        <?= $page->fulltitle() ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class='pt-8 md:pb-0 section-border-top section-border-bottom'>
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
                        <div class='mb-8'>
                            <figure>
                                <?php if ($domain->image()) {
                                    echo $domain->image();
                                }
                                ?>
                            </figure>
                        </div>
                        <figcaption>
                            <h2 class="text-2xl lg:text-3xl mb-8"><?= $domain->title() ?></h2>

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
    <section class='py-16 md:py-32 section-border-top section-border-bottom'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->contactezNousText() ?>
                </h1>
                <div class="bouton">
                    <a href="<?= page('contact.php')->url() ?>">
                        <button class="px-6 py-4 border-1 ">
                            <div class="px-6 text-2xl md:text-2xl lg:text-5xl bg-white">
                                <?= $page->contactezNousButton() ?>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4">
                <h1 class="mb-4 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    <?= $page->SupportTitle() ?>
                </h1>
                <div class="mb-8 text-lg font-normal lg:text-xl text-center">
                    <div class='support'><?= $page->SupportSubTitle()->kt() ?></div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-12 w-full">
                <?php foreach ($page->images() as $img) : ?>
                <?php if (str_contains(strtolower($img->name()), 'mecene_logo')) : ?>
                <div class='flex items-center'>
                    <?= $img ?>
                </div>
                <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <?php snippet('footer') ?>
</main>




</body>


</html>